<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Divisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Divisi_Model');
	}
	public function index()
	{
		$data["divisi_list"] = $this->Divisi_Model->GetDivisi()->result();
		$this->load->view('Divisi/List_Divisi',$data);	
	}

	
}

 ?>