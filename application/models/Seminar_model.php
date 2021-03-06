<?php

class Seminar_model extends CI_Model{

    public $id;
    public $semester;
    public $tanggal;
    public $jam;
    public $kategori_seminar_id;
    public $nim;
    public $nama_mahasiswa;
    public $judul;
    public $pembimbing_id;
    public $penguji1_id;
    public $penguji2_id;
    public $nilai_pembimbing;
    public $nilai_penguji1;
    public $nilai_penguji2;
    public $lokasi;
    public $nilai_akhir;


    public function getAll(){
        //select * from pasien

        //this->db->get('nama_tabel')
        $query = $this->db->get('seminar_ta');
        return $query;

    }

    public function findById($id){
        //select * from pasien where id = $id
        
        //$this->db->get_where('nama_tabel',array id)
        return $this->db->get_where('seminar_ta', ["id" => $id])->row();
    }

    public function delete($where,$table){

        //delete from pasien where id = id
        $this->db->where($where);
        $this->db->delete($table);
    }

    //add data

    public function save($data){
        //$this->db->insert('nama_tabel',data)
        $this->db->insert('seminar_ta',$data);
    }



    //edit data
   
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('seminar_ta',$data,array('id'=>$id));
    }


    //fungsi upload foto    
    public function upload_foto(){
        
		$config['upload_path']         = 'img/';  // folder upload tujuan 
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
		$config['max_size']             = 3000; //maksimal ukuran file
		$config['max_width']            = 1024; //maksimal lebar gambar
		$config['max_height']           = 768;// maksimal tinggi gambar

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) { //parameter foto diambil dari nama column database
            return $this->upload->data("file_name");
        }
        
        return "default.png";

    }

}




?>