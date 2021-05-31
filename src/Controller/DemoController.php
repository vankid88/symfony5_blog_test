<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class DemoController
{

	private $twig;

	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

	/**
     * @Route("/demo_service/{name}", name="demo_service")
     */
	public function index($name)
	{
		$content = $this->twig->render(
			'demo/index.html.twig',
			['name' => $name]
		);

		return new Response($content);
	}
}
