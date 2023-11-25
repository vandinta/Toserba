<?php

class Produk_model extends CI_Model
{
	private $_table = "tb_produk";

	public function getProduk()
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.kategori_id', 'left');
		$this->db->join('tb_status', 'tb_status.id_status = tb_produk.status_id', 'left');
		return $this->db->get()->result();
	}
	
	public function getProdukJual()
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.kategori_id', 'left');
		$this->db->join('tb_status', 'tb_status.id_status = tb_produk.status_id', 'left');
		$this->db->where('status_id', 1);
		return $this->db->get()->result();
	}

	public function getKategori()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		return $this->db->get()->result();
	}
	
	public function getStatus()
	{
		$this->db->select('*');
		$this->db->from('tb_status');
		return $this->db->get()->result();
	}

	public function save()
	{
		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga'),
			'kategori_id' => $this->input->post('kategori_id'),
			'status_id' => $this->input->post('status_id'),
		);

		$this->db->insert($this->_table, $data);
		$this->session->set_flashdata('berhasil', 'Data Produk Berhasil Ditambahkan');
		redirect(site_url('produk'));
	}

	public function getById($id)
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->where('id_produk', $id);
		return $this->db->get()->result();
	}

	public function update($id = NULL)
	{
		$id = $this->input->post('id');

		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga'),
			'kategori_id' => $this->input->post('kategori_id'),
			'status_id' => $this->input->post('status_id'),
		);

		$this->db->update($this->_table, $data, array('id_produk' => $id));
		$this->session->set_flashdata('berhasil', 'Data Produk Berhasil Diupdate');
		redirect(site_url('produk'));
	}

	public function delete($id_produk)
	{
		$this->db->delete($this->_table, array('id_produk' => $id_produk));
		$this->session->set_flashdata('berhasil', 'Data Produk Berhasil Dihapus');
		redirect(site_url('produk'));
	}
}
