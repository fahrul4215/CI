<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiModel extends CI_Model {

	public function getDataPegawai()
	{
		return $this->db->get('pegawai')->result();
	}

	public function insertPegawaiGrid()
	{
		$data = $this->input->post();
		$this->db->insert('pegawai', $data);
	}

	public function insertPegawai()
	{
		$tgl=$this->input->post('tanggal');
		// $tglraw=explode('-', $tgl);
		// var_dump($tglraw);
		// $tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];
		// var_dump($tglfix);
		// die();

		$object=array(
				'namaPegawai'=>$this->input->post('nama'),
				'alamatPegawai'=>$this->input->post('alamat'),
				'tanggalLahir'=>date('Y-m-d', strtotime($tgl)),
				'foto'=>$this->upload->data('file_name')
			);
		$this->db->insert('pegawai', $object);
	}

	public function getPegawai($id)
	{
		$this->db->where('idPegawai', $id);
		$query=$this->db->get('pegawai');
		return $query->result();
	}

	public function updateById($id)
	{
		$tgl=$this->input->post('tanggal');

		$data=array(
				'namaPegawai'=>$this->input->post('nama'),
				'alamatPegawai'=>$this->input->post('alamat'),
				'tanggalLahir'=>date('Y-m-d', strtotime($tgl))
			);

		$this->db->where('idPegawai', $id);
		$this->db->update('pegawai', $data);
	}

	public function deleteById($id)
	{
		$this->db->where('idPegawai', $id);
		$this->db->delete('pegawai');
	}

	public function getJabatanByPegawai($id)
	{
		$this->db->where('fkPegawai', $id);
		$query=$this->db->get('jabatan');
		return $query->result();
	}

	public function insertJabatan($id)
	{
		$tglMulai = date('Y-m-d', strtotime($this->input->post('tglMulai')));
		$tglSelesai = date('Y-m-d', strtotime($this->input->post('tglSelesai')));

		$object=array(
			'jabatan'	=> $this->input->post('jabatan'),
			'tglMulai'	=> $tglMulai,
			'tglSelesai'=> $tglSelesai,
			'fkPegawai'	=> $id
		);
		$this->db->insert('jabatan', $object);
	}
}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */