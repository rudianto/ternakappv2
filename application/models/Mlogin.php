<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getuser($where){
		$query = $this->db->get_where('t_user', $where);
		return $query;
	}

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */