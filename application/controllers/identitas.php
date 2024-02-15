<?php
class Identitas extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_identitas');
		chek_session();
	}

	function index(){
        chek_session();
        $data['identitas'] = $this->m_identitas->list_identitas()->result();
        $this->template->load('template','identitas/list',$data);
    }


	function tambah() {
		$nama  = $this->input->post('nama_identitas');
        $email  = $this->input->post('email');
        $alamat = $this->input->post('alamat');
		$no_telepon = $this->input->post('no_telepon');

		$data = array(
			'nama_identitas' => $nama,
			'email'       => $email,
            'alamat' => $alamat,
			'no_telepon'       => $no_telepon,
			);

		$this->m_identitas->tambah($data, 'identitas');
		redirect('identitas');
	}

	function hapus($id) {
		$where = array('id_identitas' => $id);
		$this->m_identitas->hapus($where, 'identitas');
		redirect('identitas');
	}

	function edit($id) {
		$where 			= array('id_identitas' => $id);
		$data['identitas'] = $this->m_identitas->edit($where, 'identitas')->result();
		$this->template->load('template','identitas/edit', $data);
	}

	function load_edit() {
		$id    = $this->input->post('id_identitas');
		$nama  = $this->input->post('nama_identitas');
		$email = $this->input->post('email');
        $alamat  = $this->input->post('alamat');
		$no_telepon = $this->input->post('no_telepon');

		$data = array(
			'id_identitas'   => $id,
			'nama_identitas' => $nama,
			'email' 	  => $email,
            'alamat' => $alamat,
			'no_telepon' 	  => $no_telepon,
		);

		$where = array(
			'id_identitas' => $id
		);

		$this->m_identitas->load_edit($where, $data, 'identitas');
		redirect('identitas');
	}

}


?>