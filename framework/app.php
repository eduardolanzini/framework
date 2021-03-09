<?php

namespace Framework;

use Framework\Config;
use Framework\Log;
use EduardoLanzini\Router;
use EduardoLanzini\DB;

Final Class App{

	private $config;

	function __construct()
	{
		$config = new Config;
		require_once 'config/config.php';
		$this->config = $config;
	}

	public function run()
	{	
		if ($this->config->useDb) {
			DB::connect($this->config->getDb());
		}

		session_start();

		define('DS', DIRECTORY_SEPARATOR);
		define('PATH', $this->config->getPath());
		define('ROOT', $this->config->getRoot());
		define('ENVIRONMENT', $this->config->getEnvironment());
		define('LAST_URL', isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : '' );

		require_once 'helpers/helpers.php';

		$router = new Router();

		$router->setBasePath($this->config->getPath());
		$router->setControllerPath($this->config->getRoot().DS.'app'.DS.'controllers');
		$router->setViewPath($this->config->getRoot().DS.'app'.DS.'views');

		require_once $this->config->getRoot().'/app/Routes.php';

		if (!$router->route())
		{
			http_response_code(404);
			redirect('404');
		}
	}

}