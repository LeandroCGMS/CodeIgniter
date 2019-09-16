<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$query = $this->db->query('SELECT * FROM contatos;');
		$temp['dados'] = $query->result_array();
		$this->load->view('inicio', $temp);
	}
	public function gravar(){
		$valores = [
		$this->input->post('text_nome'),
		$this->input->post('text_telefone')
		];
		$this->db->query('INSERT INTO contatos(nome, telefone) VALUES(?, ?);', $valores);
		redirect('geral');
	}
}
