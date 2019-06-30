<?php

class Model_stok extends CI_Model{

	function tampil_data()
	{
		return 
		$this->db->join('barang','barang.id_barang = stok.id_barang','left')
		->join('kategori','kategori.id_kategori = barang.id_kategori','left')
		->distinct()
		->get('stok')->result();

	}

	function post($data)
	{
		$this->db->insert('stok', $data);
	}

	function get_one($id)
	{
		$param = array ('id_barang'=>$id);
		return $this->db->get_where('barang', $param);
	}

	function edit($data, $id)
	{
		$this->db->where('id_barang', $id);
		$this->db->update('barang', $data);
	}

	function hapus($id)
		{
			$this->db->where('id_barang', $id);
			$this->db->delete('barang');
		}
}
?>