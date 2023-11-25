<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["Produk"] = $this->produk_model->getProduk();
		$this->load->view("produk/list", $data);
	}

	public function input()
	{
		$data["Kategori"] = $this->produk_model->getKategori();
		$data["Status"] = $this->produk_model->getStatus();

		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required|numeric', array(
			'numeric'      => 'Kolom {field} Harus Berupa Angka!!'
		));
		$this->form_validation->set_rules('kategori_id', 'kategori_id', 'required');
		$this->form_validation->set_rules('status_id', 'status_id', 'required');
		$this->form_validation->set_message('required', 'Kolom {field} Wajib Diisi!!');

		if ($this->form_validation->run() == TRUE) {
			$this->produk_model->save();
		}
		
		$this->load->view('produk/new_form', $data);
	}
	
	public function edit($id = NULL)
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required|numeric', array(
			'numeric'      => 'Kolom {field} Harus Berupa Angka!!'
		));
		$this->form_validation->set_rules('kategori_id', 'kategori_id', 'required');
		$this->form_validation->set_rules('status_id', 'status_id', 'required');
		$this->form_validation->set_message('required', 'Kolom {field} Wajib Diisi!!');
		
		$data['Produk']  = $this->produk_model->getById($id);
		$data["Kategori"] = $this->produk_model->getKategori();
		$data["Status"] = $this->produk_model->getStatus();

		if ($this->form_validation->run() == TRUE) {
			$this->produk_model->update();
		}
		$this->load->view("produk/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->produk_model->delete($id)) {
			redirect(site_url('produk'));
		}
	}
}
