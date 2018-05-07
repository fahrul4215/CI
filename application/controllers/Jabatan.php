<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Jabatan extends CI_Controller {



	public function __construct()

	{

		parent::__construct();

		$this->load->model('PegawaiModel');

	}



	function index($id)

	{

		$data['listJabatan']=$this->PegawaiModel->getJabatanByPegawai($id);

		$data['pegawai']=$this->PegawaiModel->getPegawai($id);

		$this->load->view('jabatan', $data);

	}



	public function create($id)

	{

		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');



		if ($this->form_validation->run() == FALSE) {

			$data['pegawai']=$this->PegawaiModel->getPegawai($id);

			$this->load->view('tambah_jabatan_view', $data);

		} else {

			$this->PegawaiModel->insertJabatan($id);

			$this->load->view('tambah_jabatan_sukses');

		}

	}

}



/* End of file Jabatan.php */

/* Location: ./application/controllers/Jabatan.php */