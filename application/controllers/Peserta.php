<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Peserta_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/peserta/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/peserta/index/';
            $config['first_url'] = base_url() . 'index.php/peserta/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Peserta_model->total_rows($q);
        $peserta = $this->Peserta_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'peserta_data' => $peserta,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','peserta/peserta_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Peserta_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'api' => $row->api,
		'jadwal' => $row->jadwal,
		'nik' => $row->nik,
		'nama' => $row->nama,
		'email' => $row->email,
		'tgl_lahir' => $row->tgl_lahir,
		'alamat' => $row->alamat,
		'hp' => $row->hp,
		'vaksin' => $row->vaksin,
		'ke' => $row->ke,
		'tgl_vaksin' => $row->tgl_vaksin,
		'st' => $row->st,
	    );
            $this->template->load('template','peserta/peserta_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('peserta/create_action'),
	    'id' => set_value('id'),
	    'api' => set_value('api'),
	    'jadwal' => set_value('jadwal'),
	    'nik' => set_value('nik'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'alamat' => set_value('alamat'),
	    'hp' => set_value('hp'),
	    'vaksin' => set_value('vaksin'),
	    'ke' => set_value('ke'),
	    'tgl_vaksin' => set_value('tgl_vaksin'),
	    'st' => set_value('st'),
	);
        $this->template->load('template','peserta/peserta_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'api' => $this->input->post('api',TRUE),
		'jadwal' => $this->input->post('jadwal',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'hp' => $this->input->post('hp',TRUE),
		'vaksin' => $this->input->post('vaksin',TRUE),
		'ke' => $this->input->post('ke',TRUE),
		'tgl_vaksin' => $this->input->post('tgl_vaksin',TRUE),
		'st' => $this->input->post('st',TRUE),
	    );

            $this->Peserta_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('peserta'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Peserta_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('peserta/update_action'),
		'id' => set_value('id', $row->id),
		'api' => set_value('api', $row->api),
		'jadwal' => set_value('jadwal', $row->jadwal),
		'nik' => set_value('nik', $row->nik),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'alamat' => set_value('alamat', $row->alamat),
		'hp' => set_value('hp', $row->hp),
		'vaksin' => set_value('vaksin', $row->vaksin),
		'ke' => set_value('ke', $row->ke),
		'tgl_vaksin' => set_value('tgl_vaksin', $row->tgl_vaksin),
		'st' => set_value('st', $row->st),
	    );
            $this->template->load('template','peserta/peserta_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'api' => $this->input->post('api',TRUE),
		'jadwal' => $this->input->post('jadwal',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'hp' => $this->input->post('hp',TRUE),
		'vaksin' => $this->input->post('vaksin',TRUE),
		'ke' => $this->input->post('ke',TRUE),
		'tgl_vaksin' => $this->input->post('tgl_vaksin',TRUE),
		'st' => $this->input->post('st',TRUE),
	    );

            $this->Peserta_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('peserta'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Peserta_model->get_by_id($id);

        if ($row) {
            $this->Peserta_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('peserta'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('api', 'api', 'trim|required');
	$this->form_validation->set_rules('jadwal', 'jadwal', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('hp', 'hp', 'trim|required');
	$this->form_validation->set_rules('vaksin', 'vaksin', 'trim|required');
	$this->form_validation->set_rules('ke', 'ke', 'trim|required');
	$this->form_validation->set_rules('tgl_vaksin', 'tgl vaksin', 'trim|required');
	$this->form_validation->set_rules('st', 'st', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "peserta.xls";
        $judul = "peserta";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Api");
	xlsWriteLabel($tablehead, $kolomhead++, "Jadwal");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "Vaksin");
	xlsWriteLabel($tablehead, $kolomhead++, "Ke");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Vaksin");
	xlsWriteLabel($tablehead, $kolomhead++, "St");

	foreach ($this->Peserta_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->api);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jadwal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->vaksin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ke);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_vaksin);
	    xlsWriteNumber($tablebody, $kolombody++, $data->st);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=peserta.doc");

        $data = array(
            'peserta_data' => $this->Peserta_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('peserta/peserta_doc',$data);
    }

}
