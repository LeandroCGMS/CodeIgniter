<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/_header');
		
		$this->load->view('layouts/_footer');
	}
}
