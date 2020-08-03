<?php

class data_transaksi extends CI_Controller {

	public function index()
	{
    $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer")->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_transaksi', $data);
    $this->load->view('templates_admin/footer');
	}

  public function _rules(){
    $this->form_validation->set_rules('kode_type','Kode Type','required');
    $this->form_validation->set_rules('nama_type','Nama Type','required');
  }

  
}
