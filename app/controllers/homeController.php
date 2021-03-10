<?php

namespace Controllers;

use EduardoLanzini\Framework\View;
use Models\User;

Class HomeController
{
	public function index($request)
	{	
		//$user = User::get($request['user']);

		View::render('index');
	}

		public function erro404()
	{	
		http_response_code(404);
		View::render('404');
	}
}