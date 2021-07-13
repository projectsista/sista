<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	
	public function index()
	{	
		$this->load->model('peserta_model');//load model
		$data['peserta'] = $this->peserta_model->getAll(); //query select all data
		$this->load->view('peserta/index',$data);
	}
}
?>