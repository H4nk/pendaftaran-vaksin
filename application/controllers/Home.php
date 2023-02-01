<?php
Class Home extends CI_Controller{
        
    function index(){
        $this->load->view('home/index');
    }
        
		function daftar(){
		
		$this->db->where('st',1);
		$data['jadwal'] = $this->db->get('jadwal')->result();
			
        $this->load->view('home/daftar',$data);
    }		
	function proses(){
		$api= api();
	$in['api'] =$api;	
	$in['jadwal'] = $this->input->post('jadwal');	
	$in['nik'] = $this->input->post('nik');	
	$in['nama'] = $this->input->post('nama');	
	$in['email'] = $this->input->post('email');	
	$in['tgl_lahir'] = $this->input->post('tgl_lahir');	
	$in['alamat'] = $this->input->post('alamat');	
	$in['hp'] = $this->input->post('hp');	
	$in['vaksin'] = $this->Db_model->get_data($this->input->post('jadwal'),'vaksin','jadwal');	
	$in['ke'] = $this->input->post('ke');	
	$in['tgl_vaksin'] = $this->input->post('tgl_vaksin');	
	$in['st'] ='0';	
		$this->db->insert('peserta',$in);
redirect(site_url('Home/cetak/'.$api.''));

    }
    
   		function cetak($api){
		
		$this->db->where('api',$api);
		$q= $this->db->get('peserta')->result();
			foreach($q as $h){
				
				$data['api'] = $h->api;
				$data['nik'] = $h->nik;
				$data['nama'] =$h->nama;
				$data['email'] =$h->email ;
				$data['tgl_lahir'] = tgl_indo($h->tgl_lahir);
				$data['alamat'] = $h->alamat;
				$data['hp'] = $h->hp;
				$data['vaksin'] = $this->Db_model->get_data($h->vaksin,'nama','jenis');
				$data['ke'] = $h->ke;
				$data['tgl_vaksin'] = tgl_indo($h->tgl_vaksin);
				$data['st'] =$h->st ;
			}
        $this->load->view('home/cetak',$data);
    }
}
