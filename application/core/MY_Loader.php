<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
	public function __construct()
    {
        parent::__construct();
	}

	public function _view($content = '')
	{
		$this->view('admin/inc/header');
		$this->view('admin/inc/categories');
		$this->view($content);
		$this->view('admin/inc/footer');
	}

}
