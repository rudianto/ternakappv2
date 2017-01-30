<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_Model {

    public function countkandang()
	{
		$query = $this ->db->count_all('t_kandang');
		return $query;
	}

	public function countvaksin()
	{
		$query = $this ->db->count_all('t_vaksin');
		return $query;
	}

	public function countpelanggan()
	{
		$query = $this ->db->count_all('t_pelanggan');
		return $query;
	}

	public function countpesan()
	{
		$query = $this ->db->count_all('t_pemesanan');
		return $query;
	}

	public function jml_telur()
	{
		
		$query = $this->db->query("select sum(jumlah_telur) as jml from t_produksi")->row_array();
		return $query['jml'];
	}

}

/* End of file Mdashboard.php */
/* Location: ./application/models/Mdashboard.php */