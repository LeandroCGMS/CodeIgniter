<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('formulario');
    }
    public function tratarFormulario(){
        $dados['contato'] = $this->input->post();
        $this->load->view('apresentar_dados', $dados);
    }
}