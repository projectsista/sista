<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
    //menampilkan data program studi
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('seminar_model');//load model
		$data['seminar'] = $this->seminar_model->getAll(); //query select all data
		$this->load->view('seminar/index',$data);
	}

	public function view($id){
		
		$this->load->model('seminar_model');
		$data['seminar'] = $this->seminar_model->findById($id);
		$this->load->view('seminar/profile',$data);
	}

	public function delete($id){
        
		//untuk menghapus data
        $this->load->model('seminar_model');//load model
		$where = array('id' => $id);
		$this->seminar_model->delete($where,'seminar_ta');// query delete(delete from pasien where id = $id)
		redirect('seminar/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('seminar/tambah_seminar');
	}

	public function save(){
	
		$this->load->model('seminar_model');

		$data['semester'] =$this->input->post('semester');
		$data['tanggal'] =$this->input->post('tanggal');
		$data['jam'] =$this->input->post('jam');
		$data['kategori_seminar_id'] =$this->input->post('kategori_seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama_mahasiswa'] =$this->input->post('nama_mahasiswa');
		$data['judul'] =$this->input->post('judul');
		$data['pembimbing_id'] =$this->input->post('pembimbing_id');
		$data['penguji1_id'] =$this->input->post('penguji1_id');
		$data['penguji2_id'] =$this->input->post('penguji2_id');
		$data['nilai_pembimbing'] =$this->input->post('nilai_pembimbing');
		$data['nilai_penguji1'] =$this->input->post('nilai_penguji1');
		$data['nilai_penguji2'] =$this->input->post('nilai_penguji2');
		$data['lokasi'] =$this->input->post('lokasi');
		$data['nilai_akhir'] =$this->input->post('nilai_akhir');
		$data['foto'] = $this->seminar_model->upload_foto();
		$this->seminar_model->save($data);
		redirect('seminar/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('seminar_model');
		$data['seminar'] = $this->seminar_model->findById($id);
		$this->load->view('seminar/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('seminar_model');
		$id = $this->input->post('id');
		$data['semester'] =$this->input->post('semester');
		$data['tanggal'] =$this->input->post('tanggal');
		$data['jam'] =$this->input->post('jam');
		$data['kategori_seminar_id'] =$this->input->post('kategori_seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama_mahasiswa'] =$this->input->post('nama_mahasiswa');
		$data['judul'] =$this->input->post('judul');
		$data['pembimbing_id'] =$this->input->post('pembimbing_id');
		$data['penguji1_id'] =$this->input->post('penguji1_id');
		$data['penguji2_id'] =$this->input->post('penguji2_id');
		$data['nilai_pembimbing'] =$this->input->post('nilai_pembimbing');
		$data['nilai_penguji1'] =$this->input->post('nilai_penguji1');
		$data['nilai_penguji2'] =$this->input->post('nilai_penguji2');
		$data['lokasi'] =$this->input->post('lokasi');
		$data['nilai_akhir'] =$this->input->post('nilai_akhir');
		$this->seminar_model->update($data,$id);
		redirect('seminar/index');

		//upload file
		if (!empty($_FILES["foto"]["name"])) {//array foto diambil dari name inputan
			$data['foto'] = $this->seminar_model->upload_foto(); //array foto dari nama column di db
		} else {
			$data['foto'] = $post["old_image"];
		}
		$this->seminar_model->update($data,$id);
		redirect('seminar/index');
	}


}