<?php

namespace Controllers;

use Framework\View;
use Models\User;

Class HomeController
{
	public function index()
	{	
		$user = User::get(1);

		View::render('index');
	}

		public function erro404()
	{	
		View::render('404');
	}
}