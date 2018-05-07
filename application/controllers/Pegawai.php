<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Pegawai extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('PegawaiModel');
		}

		function index()
		{
			$data['pegawai_list']=$this->PegawaiModel->getDataPegawai();
			$this->load->view('pegawai', $data);
		}

		public function create()
		{
			$this->form_validation->set_rules('nama', 'Nama Pegawai', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat  Pegawai', 'trim|required');
			$this->form_validation->set_rules('tanggal', 'Tanggal Lahir Pegawai', 'trim|required|min_length[10]|max_length[10]');

			if ($this->form_validation->run()==FALSE) {
				$this->load->view('tambah_pegawai_view');
			}else{
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '1000';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('userfile')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('tambah_pegawai_view', $error);
				}else{
					$this->PegawaiModel->insertPegawai();
					$this->load->view('tambah_pegawai_sukses');
				}
			}
		}

		public function update($id)
		{
			$this->form_validation->set_rules('nama', 'Nama Pegawai', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat  Pegawai', 'trim|required');
			$this->form_validation->set_rules('tanggal', 'Tanggal Lahir Pegawai', 'trim|required|min_length[10]|max_length[10]');

			$data['pegawai']=$this->PegawaiModel->getPegawai($id);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('edit_pegawai_view', $data);
			} else {
				$this->PegawaiModel->updateById($id);
				$this->load->view('edit_pegawai_sukses');
			}
		}

		public function delete($id)
		{
			$this->PegawaiModel->deleteById($id);
			redirect(base_url().'index.php/pegawai/');
		}

		public function datatable()
		{
			$data['listPegawai'] = $this->PegawaiModel->getDataPegawai();
			$this->load->view('pegawai_datatable', $data);
		}
	}
 ?>