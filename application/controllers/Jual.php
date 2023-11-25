<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jual extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["Produk"] = $this->produk_model->getProdukJual();
		$this->load->view("produkjual/list", $data);
	}
}
