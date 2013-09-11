<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

use app\models\MyPosts;

/**
 * This controller is used for serving static pages by name, which are located in the `/views/pages`
 * folder.
 *
 * A Lithium application's default routing provides for automatically routing and rendering
 * static pages using this controller. The default route (`/`) will render the `home` template, as
 * specified in the `view()` action.
 *
 * Additionally, any other static templates in `/views/pages` can be called by name in the URL. For
 * example, browsing to `/pages/about` will render `/views/pages/about.html.php`, if it exists.
 *
 * Templates can be nested within directories as well, which will automatically be accounted for.
 * For example, browsing to `/pages/about/company` will render
 * `/views/pages/about/company.html.php`.
 */
class PagesController extends \lithium\action\Controller {

	private $validpages = array('home', 'resume', 'contact');

	public function view() {
		$options = array();
		$path = func_get_args();

		if (!$path || $path === array('home')) {
			return $this->home();
		}

		if(!in_array($path[0], $this->validpages))
		{
			return $this->NotFound();
		}

		if(method_exists($this, $path[0]))
		{
			return $this->$path[0]();
		}

		$options['template'] = join('/', $path);
		return $this->render($options);
	}

	public function home()
	{
		$myPosts = MyPosts::find('all', array(
				'limit'		=>	5,
				'order'		=>	array(
						'created_at' => 'DESC',
				)
		));

		return $this->render(array(
			'template'  => 'home',
			'data'			=> compact('myPosts'),
		));
	}

	public function resume()
	{
		return $this->render(array(
			'template'	=>	'resume',
		));
	}

	public function NotFound()
	{
		return $this->render(array('template' => 'pagenotfound'));
	}
}

?>