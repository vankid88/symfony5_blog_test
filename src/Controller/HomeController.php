<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class HomeController extends AbstractController
{
	/**
		* @Route("/random", name="random_page")
	*/
	public function random() {
		$number = random_int(0, 100);

		return $this->render('demo/random.html.twig', [
			'number' => $number,
		]);
	}

	/**
	 * @Route("/", name="homepage")
	 */
	public function homepage()
	{

		return $this->render('home/homepage.html.twig', [
			'test' => 'abc'
		]);
		
		// generate a URL with no route arguments
		//$signUpPage = $this->generateUrl('sign_up');

		// generate a URL with route arguments
		// $userProfilePage = $this->generateUrl('user_profile', [
		// 	 'username' => 'admin',
		//  ]);

		// generated URLs are "absolute paths" by default. Pass a third optional
		// argument to generate different URLs (e.g. an "absolute URL")
		//$signUpPage = $this->generateUrl('sign_up', [], UrlGeneratorInterface::ABSOLUTE_URL);

		// when a route is localized, Symfony uses by default the current request locale
		// pass a different '_locale' value if you want to set the locale explicitly
		//$signUpPageInDutch = $this->generateUrl('sign_up', ['_locale' => 'nl']);

	}

	/**
	 * @Route("/blog", name="blog_list")
	 */
	public function list3(Request $request) {
		$routeName = $request->attributes->get('_route');
		$routeParameters = $request->attributes->get('_route_params');

		// use this to get all the available attributes (not only routing ones):
		$allAttributes = $request->attributes->all();
	}

	/**
	 * @Route("/blog", name="blog_list")
	 */
	public function list() {
		//
	}

	/**
	 * @Route(
	 * 	"/contact",
	 *	name="contact",
		*	condition="context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'"
		* )
	*
	* expressions can also include config parameters:
	* condition: "request.headers.get('User-Agent') matches '%app.allowed_browsers%'"
	*/
	public function contact()
	{
		//
	}

	/**
	 * @Route("/api/posts/{id}", methods={"GET","HEAD"}, requirements={"page"="\d+"})
	 */
	public function show(int $id)
	{
		// ... return a JSON response with the post
	}

	/**
	 * @Route("/blog/{page<\d+>?1}", name="blog_list2")
	 */
	public function list2(int $page)
	{
		// ...
	}

	/**
	 * @Route("/api/posts/{id}", methods={"PUT"})
	 */
	public function edit(int $id)
	{
		// ... edit a post
	}

	/**
	 * @Route("/blog/{slug}", name="blog_show")
	 */
	public function show2(string $slug)
	{
		// ... TODO 
	}

	/**
	 * @Route("/blog/{page}", name="blog_index", defaults={"page": 1, "title": "Hello world!"})
	 */
	public function index(int $page, string $title)
	{
		// ...
	}

	/**
	 * @Route("/share/{token}", name="share", requirements={"token"=".+"})
	 */
	public function share($token)
	{
		// ...
	}
}