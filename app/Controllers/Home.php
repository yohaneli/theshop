<?php

namespace App\Controllers;

class Home extends BaseController {

	public function index() {

		echo view('site/common/header');
		echo view('index');
		echo view('site/common/footer');

	}
	
}
