<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('User_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

  
    
    
    function upload_foto(){
        $config['upload_path']          = './assets/foto_profil';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }
    
  
    
    function index(){
		
		
		$this->session->userdata('id_users');
		$this->db->where('id_users',$this->session->userdata('id_users'));
		$q= $this->db->get('tbl_user');
            $user = $q->row_array();
		 	
	$d['id_users'] = $user['id_users'];
	$d['full_name'] = $user['full_name'];
	$d['email'] = $user['email'];
	$d['password'] = $user['password'];
	$d['images'] = $user['images'];
	$d['id_user_level'] = $user['id_user_level'];
	$d['is_aktif'] = $user['is_aktif'];
	$d['action'] = site_url('Profil/update_profil');
	$d['button'] = 'Update';
	
        $this->template->load('template','user/profil', $d);

        
    }
	  public function _rulesprofile() 
    {
	$this->form_validation->set_rules('full_name', 'full name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	//$this->form_validation->set_rules('password', 'password', 'trim|required');
	//$this->form_validation->set_rules('images', 'images', 'trim|required');

	$this->form_validation->set_rules('id_users', 'id_users', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	public function update_profil() 
    {
        $this->_rulesprofile();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->update2($this->input->post('id_users', TRUE));
        } else {
            if($foto['file_name']==''){
                $data = array(
		'full_name'     => $this->input->post('full_name',TRUE),
		'email'         => $this->input->post('email',TRUE));
            }else{
                $data = array(
		'full_name'     => $this->input->post('full_name',TRUE),
		'email'         => $this->input->post('email',TRUE),
                'images'        =>$foto['file_name']);
	
                // ubah foto profil yang aktif
                $this->session->set_userdata('images',$foto['file_name']);
            }
           if(empty($this->input->post('password')))
		   {
		//	$data['password'] ='tes';

		   }
else
{
	        $password       = $this->input->post('password',TRUE);
            $options        = array("cost"=>4);
            $hashPassword   = password_hash($password,PASSWORD_BCRYPT,$options);
			$data['password'] =$hashPassword;
}
            $this->User_model->update($this->input->post('id_users', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('welcome'));
        }
    }
	 public function update2($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button'        => 'Update',
                'action'        => site_url('user/update_profil'),
		'id_users'      => set_value('id_users', $row->id_users),
		'full_name'     => set_value('full_name', $row->full_name),
		'email'         => set_value('email', $row->email),
		'images'        => set_value('images', $row->images),
	    );
            $this->template->load('template','user/profil', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user/profil'));
        }
    }

}

