<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/admin")
 */
class ProductController extends AbstractController
{
	/**
	 * @Route("/products", name="product_index", methods={"GET"})
	 */
	public function index(ProductRepository $productRepository): Response
	{
		return $this->render('product/index.html.twig', [
			'products' => $productRepository->findAll(),
		]);
	}

	/**
	 * @Route("/product/new", name="product_new", methods={"GET","POST"})
	 */
	public function new(Request $request, SluggerInterface $slugger): Response
	{
		$product = new Product();
		$form = $this->createForm(ProductType::class, $product);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$photoFile = $form->get('photo')->getData();


			if ($photoFile) {
				$originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
				// this is needed to safely include the file name as part of the URL
				$safeFilename = $slugger->slug($originalFilename);
				$newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

				// Move the file to the directory where brochures are stored
				try {
					$photoFile->move(
						$this->getParameter('upload_dir'),
						$newFilename
					);
				} catch (FileException $e) {
					// ... handle exception if something happens during file upload
				}

				// updates the 'photoFileName' property to store the image file name
				// instead of its contents
				$product->setPhoto($newFilename);
			}

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($product);
			$entityManager->flush();

			return $this->redirectToRoute('product_index');
		}

		return $this->render('product/new.html.twig', [
			'product' => $product,
			'form' => $form->createView(),
		]);
	}

	/**
	 * @Route("/product/{id}", name="product_show", methods={"GET"})
	 */
	public function show(Product $product): Response
	{
		return $this->render('product/show.html.twig', [
			'product' => $product,
		]);
	}

	/**
	 * @Route("/product/{id}/edit", name="product_edit", methods={"GET","POST"})
	 */
	public function edit(Request $request, Product $product): Response
	{
		$form = $this->createForm(ProductType::class, $product);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$this->getDoctrine()->getManager()->flush();

			return $this->redirectToRoute('product_index');
		}
		
		return $this->render('product/edit.html.twig', [
			'product' => $product,
			'form' => $form->createView(),
		]);
	}

	/**
	 * @Route("/product/{id}", name="product_delete", methods={"DELETE"})
	 */
	public function delete(Request $request, Product $product): Response
	{
		if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($product);
			$entityManager->flush();
		}

		return $this->redirectToRoute('product_index');
	}
}