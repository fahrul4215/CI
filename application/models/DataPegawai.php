<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getPegawai($id)
	{
		$query = $this->db->query('select * from pegawai where idpegawai='.$id);
		return $query->result();
	}

	public function getJumlahPendidikan($id)
	{
		$query = $this->db->query('select * from pendidikan where fk_pegawai='.$id);
		return $query->num_rows();
	}

	public function getPendidikan($id)
	{
		$query = $this->db->query('select * from pendidikan where fk_pegawai='.$id.' order by tahunLulus DESC');
		return $query->result();
	}

}

/* End of file pegawai.php */
/* Location: ./application/models/pegawai.php */