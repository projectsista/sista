<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {


	
	//function __construct(){
	//	parent::__construct();
	
	//	if($this->session->userdata('status') != "login"){
	//		redirect('login/login');
	//	}
	//}
    //menampilkan data program studi
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('dosen_model');//load model
		$data['dosen'] = $this->dosen_model->getAll(); //query select all data
		$this->load->view('dosen/index',$data);
	}

	public function view($id){
		
		$this->load->model('dosen_model');
		$data['dosen'] = $this->dosen_model->findById($id);
		$this->load->view('dosen/view',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('dosen_model');//load model
		$where = array('id' => $id);
		$this->dosen_model->delete($where,'dosen');// query delete(delete from pasien where id = $id)
		redirect('dosen/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('dosen/tambah_dosen');
	}

	public function save(){
	
		$this->load->model('dosen_model');

		$data['nidn'] =$this->input->post('nidn');
		$data['nama'] =$this->input->post('nama');
		$this->dosen_model->save($data);
		redirect('dosen/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('dosen_model');
		$data['dosen'] = $this->dosen_model->findById($id);
		$this->load->view('dosen/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('dosen_model');
		$id = $this->input->post('id');
		$data['nidn'] =$this->input->post('nidn');
		$data['nama'] =$this->input->post('nama');
		
		$this->dosen_model->update($data,$id);
		redirect('dosen/index');
	}


}