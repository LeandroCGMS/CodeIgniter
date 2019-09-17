<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/_header');
		$this->load->view('layouts/cabecalho');
		$this->load->view('layouts/rodape');
		$this->load->view('layouts/_footer');
	}
	public function setup(){
		$this->load->view('layouts/_header');
		$this->load->view('layouts/cabecalho');
		$this->load->view('setup/setup');
		$this->load->view('layouts/rodape');
		$this->load->view('layouts/_footer');
	}
}
