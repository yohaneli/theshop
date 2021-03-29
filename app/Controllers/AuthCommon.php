<?php

namespace App\Controllers;

class AuthCommon extends BaseController {

	public function index() {

		echo view('site/common/header');
		echo view('testauth');
		echo view('site/common/footer');

	}
	
}
