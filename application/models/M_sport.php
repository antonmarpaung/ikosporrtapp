<?php 
class M_sport extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}


function edit_data($where, $table){
	return $this->db->get_where($table,$where);
}
function update_produk($where,$data,$table)
	{
		 $this->db->where($where);
		 $this->db->update($table,$data);
	}

function get_data($table){
	return $this->db->get($table);
}


public function get_data2($keyword = null){
	if($keyword){
		$this->db->like('merek_produk', $keyword);
		$this->db->or_like('kategori_produk', $keyword);
	}
	return $this->db->get('transaksi')->result_array();
}
public function get_data3($keyword = null){
	if($keyword){
		$this->db->like('merek_produk', $keyword);
		$this->db->or_like('kategori_produk', $keyword);
		
	}
	return $this->db->get('produk')->result_array();
}
public function countAllItem()
{
	return $this->db->get('transaksi')->num_rows();
}

public function countAllItem2()
{
	return $this->db->get('produk')->num_rows();
}

function insert_data($data, $table){
	$this->db->insert($table,$data);
}



function delete_data($where, $table){
	$this->db->where($where);
	$this->db->delete($table);
}


public function simpan_admin($data) {
        $this->db->insert('admin', $data);
        return $this->db->insert_id();
    }

public function mdelete_admin($idadmin)
	{
		$this->db->where('id_admin',$idadmin);
		$this->db->delete('admin');
	}

function update_admin($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

public function msave_raket($data)
	{
		$ins=$this->db->insert('produk',$data);
		return $ins;
	}

public function msave_transaksi($data)
	{
		$ins=$this->db->insert('transaksi',$data);
		return $ins;
	}


public function mdelete_raket($id_produk)
	{
		$this->db->where('id_produk',$id_produk);
		$this->db->delete('produk');
	}

	public function mdelete_transaksi($nomor_transaksi)
	{
		$this->db->where('nomor_transaksi',$nomor_transaksi);
		$this->db->delete('transaksi');
	}

function update_raket($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

public function get_sum(){
	$this->db->select_sum('total_harga', 'total_harga');
	$this->db->from('transaksi');
	return $this->db->get('')->row();
}


public function get_count()
{
	$sql = "SELECT count(id_produk) as id_produk from produk";
	$result = $this->db->query($sql);
	return $result->row()->id_produk;
}

public function update_stok($idproduk, $jumlah)
{
	$this->db->set('stok', 'stok -'. $jumlah, FALSE);
	$this->db->where('id_produk', $idproduk);
	$this->db->update('produk');
}



}

	
