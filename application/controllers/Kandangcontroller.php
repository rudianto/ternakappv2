<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandangcontroller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdashboard');
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');

		if($this->session->userdata('status') != 'login'){            
			redirect('login','refresh');
		}
	}

	public function index()
	{	$data['title']='Dashboard';
		$data['jml']=$this->Mdashboard->jml_telur();
		$data['kandang']= $this->Mdashboard->countkandang();
		$data['vaksin']= $this->Mdashboard->countvaksin();
		$data['pelanggan']= $this->Mdashboard->countpelanggan();
		$data['pesan']= $this->Mdashboard->countpesan();
		$this->load->view('header');
		$this->load->view('dashboard', $data);
		//$this->load->view('footer');
	}

	public function kandang()
	{
		$data['title']="Data Kandang";
		$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('t_kandang');
			$crud->set_relation('id_vaksin','t_vaksin','nama_vaksin');
			//$crud->display_as('officeCode','Office City');
			//$crud->set_subject('Employee');

			//$crud->required_fields('lastName');

			//$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

		//$this->grocery_crud->set_table('t_kandang');
		//$this->grocery_crud->set_theme('datatables');
		//$output = $this->grocery_crud->render();
		
		//$this->load->view('header');
		//$this->load->view('title', $data);
		$this->load->view('header2',$output);
		$this->load->view('title',$data);
		$this->load->view('kandang',$output);
		//$this->load->view('footer');
	}

	public function vaksin()
	{
		$data['title']="Data Vaksin";
		$this->grocery_crud->set_table('t_vaksin');
		$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->set_rules('nama_vaksin','varchar');
		$this->grocery_crud->set_rules('jml_vaksin','harga_vaksin','integer');
		$this->grocery_crud->set_rules('tanggal_vaksin','datetime');
		$output = $this->grocery_crud->render();
		
		$this->load->view('header2',$output);
		$this->load->view('title',$data);
		$this->load->view('kandang',$output);
	}

	public function pelanggan()
	{
		$data['title']="Data Pelanggan";
		$this->grocery_crud->set_table('t_pelanggan');
		$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->set_relation('id_perusahaan','t_perusahaan','nama_perusahaan');
		$this->grocery_crud->display_as('id_perusahaan','Nama perusahaan');
		$output = $this->grocery_crud->render();
		
		$this->load->view('header2',$output);
		$this->load->view('title',$data);
		$this->load->view('kandang',$output);
	}

	public function perusahaan()
	{
		$data['title']="Data perusahaan";
		$this->grocery_crud->set_table('t_perusahaan');
		$this->grocery_crud->set_theme('datatables');
		$output = $this->grocery_crud->render();
		
		$this->load->view('header2',$output);
		$this->load->view('title',$data);
		$this->load->view('kandang',$output);
	}

	public function pesan()
	{
		$data['title']="Data Pesanan";
		$this->grocery_crud->set_table('t_pemesanan');
		$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->set_relation('id_pelanggan','t_pelanggan','nama_pelanggan');
		$this->grocery_crud->set_relation('id_perusahaan','t_perusahaan','nama_perusahaan');
		$output = $this->grocery_crud->render();
		
		$this->load->view('header2',$output);
		$this->load->view('title',$data);
		$this->load->view('kandang',$output);
	}

	public function produksi()
	{
		$data['title']="Data Produksi Telur";
		$this->grocery_crud->set_table('t_produksi');
		$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->columns('id_kandang','jumlah_telur','waktu');
		$this->grocery_crud->display_as('id_kandang','No Kandang');
		$this->grocery_crud->set_relation('id_kandang','t_kandang','no_kandang');
		$output = $this->grocery_crud->render();

		
		$this->load->view('header2',$output);
		$this->load->view('title',$data);
		$this->load->view('produksi',$output);
	}

	public function jml(){
		$data['jml']=$this->Mdashboard->jml_telur();
		$this->load->view('coba', $data);
	}
}

/* End of file Kandangcontroller.php */
/* Location: ./application/controllers/Kandangcontroller.php */