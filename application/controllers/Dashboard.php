<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')!=true){
			
			redirect(base_url().'login?pesan=belumlogin');
		}
	}

    public function index()
	{
		$this->load->view("dashboard");	
	}
	function admin()
	{
		$data['admin'] = $this->M_sport->get_data('admin')->result();
		$this->load->view('v_admin',$data);
	}


	function edit_admin($idadmin)
	{
		$where = array('id_admin' => $idadmin);
		$data['admin'] = $this->M_sport->edit_data($where, 'admin')->result();
		$this->load->view("edit_admin",$data);
	}
	public function simpan_admin() {
	
		$this->form_validation->set_rules('password_admin', 'Password', 'required|trim|min_length[8]');
        $data = array(
            'admin_nama' => $this->input->post('admin_nama'),
            'username_admin' => $this->input->post('username_admin'),
            'password_admin' => $this->input->post('password_admin')
        );

        $idadmin = $this->M_sport->simpan_admin($data);

        if ($idadmin) {
        	$this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
  <center>Data Berhasil Ditambahkan!</center>
</div>');
            redirect('dashboard/admin');
        } else {
            echo 'Gagal menyimpan admin';
        }
    }

     function admin_update()
    {
        $id = $this->input->post('id_admin');
        $nama = $this->input->post('admin_nama');
        $username = $this->input->post('username_admin');
        $password = $this->input->post('password_admin');

        $this->form_validation->set_rules('username_admin', 'Username Admin', 'required');
        if ($this->form_validation->run() != false) {
            $where = array(
                'id_admin' => $id
            );
            $data = array(
                'admin_nama' => $nama,
                'username_admin' => $username,
                'password_admin' => $password
                
            );
            $this->M_sport->update_admin($where, $data, 'admin');
            redirect(base_url() . 'dashboard/admin');
        } else {
            $where = array(
                'pelanggan_id' => $id
            );
            $data['pelanggan'] = $this->M_sport->edit_data($where, 'pelanggan')->result();
            $this->load->view('dashboard/edit_admin', $data);
}
    }

	public function admin_hapus($idadmin)
	{
		$this->M_sport->mdelete_admin($idadmin);
		redirect('dashboard/admin');
	}

	// function update_admin() {
 //        if($this->form_validation->run() == FALSE){
 //        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
 //  <center>Data gagal Diubah!</center></div>');
 //        	redirect('dashboard/admin');
 //        }else{
 //        	$idadmin = $this->input->post('id_admin');
 //        	$username_admin = $this->input->post('username_admin');
 //        	$password_admin = $this->input->post('password_admin');
 //        	$data = array(
 //        		'id_admin' => $idadmin,

 //        		'username_admin' => $username_admin,
 //        		'password_admin' => $password_admin
 //        	);
 //        	$this->db->where('id_admin', $idadmin);
 //        	$this->db->update('admin', $data);
 //        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
 //  <center>Data gagal Diubah!</center></div>');
 //        	redirect('dashboard/raket');
 //        }

	// }

	

	
	function dashboard()
	{
		
		$data['transaksi'] = $this->M_sport->get_data('transaksi')->result();
		if ($this->input->post('submit')) {
			$data['keyword'] =  $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);

		}else{
			$data['keyword'] = null;
		}
		

		$config['total_rows'] = $this->M_sport->countAllItem();
		$data['sum_jumlah'] = $this->M_sport->get_sum();
		$data['count'] = $this->M_sport->get_count();
		$data['total_rows'] = $config['total_rows'];
		$data['transaksi'] = $this->M_sport->get_data2($data['keyword']);
		$this->load->view('dashboard', $data);
	}


	
	function raket()
	{
		$data['produk'] = $this->db->query("select * from produk,barang_keluar where id_produk = 
        id_produk")->result();
		
		if ($this->input->post('submit')) {
			$data['keyword'] =  $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);

		}else{
			$data['keyword'] = null;
		}



		$config['total_rows'] = $this->M_sport->countAllItem2();

		$data['total_rows'] = $config['total_rows'];
		$data['produk'] = $this->M_sport->get_data3($data['keyword']);
		
		$this->load->view('v_raket',$data);
	}


	function transaksi()
	{
		$data['transaksi'] = $this->db->query("select * from transaksi,produk where transaksi_produk = 
        id_produk")->result();

		if ($this->input->post('submit')) {
			$data['keyword'] =  $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);

		}else{
			$data['keyword'] = null;
		}



		$config['total_rows'] = $this->M_sport->countAllItem();

		$data['total_rows'] = $config['total_rows'];
		$data['transaksi'] = $this->M_sport->get_data2($data['keyword']);
		
		$this->load->view('transaksi',$data);
	}

function sepatu()
	{
		
		$this->load->view('sepatu');
	}

function bola()
	{
		
		$this->load->view('bola');
	}


	function tambah_raket()
	{
		$this->load->view("template/header.php");
		$this->load->view("template/navbar.php");
		$this->load->view("template/sidebar.php");
		$this->load->view("tambah_raket.php");
		$this->load->view("template/footer.php");
	}

// 	function simpan_raket()
// 	{
// 		$config['upload_path']	= 'assets/gambar/'; 
// 		$config['allowed_types']	= 'jpg|png';
// 		$config['max_size']			= 5000;
// 		$this->load->library('upload', $config);
		
// 		if (!$this->upload->do_upload('gambar_raket'))
// 		{
// 			echo 'Gagal Upload Gambar';
// 		} 
// 	else
// 	{
		
// 		$merk = $this->input->post('merek_raket');
// 		$tipe= $this->input->post('tipe_raket');
// 		$harga = $this->input->post('harga_raket');
// 		$file = $this->upload->data();
// 		$gambar = $file['file_name'];

// 		$this->M_sport->msave_raket(array('merek_raket'=> $merk,
// 								  'tipe_raket'=> $tipe,
// 								  'harga_raket'	=> $harga,
// 								  'gambar_raket'=> $gambar));
// 		redirect('dashboard/raket');
// 	}
// }



public function update_raket()
	{
		$config['upload_path']	= 'assets/gambar/';
		$config['allowed_types']	= 'jpg|png';
		$config['max_size']			= 5000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar_produk'))
		{
			echo 'Gagal Upload Gambar';
		}
		else
		{
		$idproduk = $this->input->post('id_produk');
		$merk = $this->input->post('merek_produk');
		$kategori = $this->input->post('kategori_produk');
		$tipe = $this->input->post('tipe_produk');
		$harga = $this->input->post('harga_produk');
		$stok = $this->input->post('stok');
		$file = $this->upload->data();
		$gambar = $file['file_name'];

		$data = array(
				'merek_produk'=> $merk,
				'kategori_produk'=> $kategori,
				'tipe_produk'	=> $tipe,
				'harga_produk'	=> $harga,
				'stok'	=> $stok,
				'gambar_produk'	=> $gambar);

		$where = array('id_produk'=>$idproduk);
		$this->M_sport->update_raket($where,$data,'produk');
		redirect('dashboard/raket');
		}
	}
		public function produk_update()
	{
		$config['upload_path']	= 'assets/gambar/'; 
		$config['allowed_types']	= 'jpg|png';
		$config['max_size']			= 5000;
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('userfile'))
		{
			echo 'Gagal Upload Gambar';
		} 
	else
	{
		$id_produk = $this->input->post('id_produk');
		$merk = $this->input->post('merek_produk');
		$kategori= $this->input->post('kategori_produk');
		$tipe= $this->input->post('tipe_produk');
		$harga = $this->input->post('harga_produk');
		$file = $this->upload->data();
		$gambar = $file['file_name'];

		$data = array(
				'merek_produk'=> $merk,
				'kategori_produk'=> $kategori,
				'tipe_produk'=> $tipe,
				'harga_produk'	=> $harga,
				'gambar_produk'	=> $gambar);

		$where = array('id_produk'=>$id_produk);
		$this->M_sport->update_produk($where,$data,'produk');
		$this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
  <center>Data Berhasil Diubah!</center>
</div>');
		redirect('dashboard/raket');
	}
}


function simpan_produk()
	{
		$config['upload_path']	= 'assets/gambar/'; 
		$config['allowed_types']	= 'jpg|png';
		$config['max_size']			= 5000;
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('gambar_produk'))
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
  <center>Data Gagal Ditambahkan !</center>
</div>');
			redirect('dashboard/raket');
		} 
	else
	{
		
		$merk = $this->input->post('merek_produk');
		$kategori= $this->input->post('kategori_produk');
		$tipe= $this->input->post('tipe_produk');
		$harga = $this->input->post('harga_produk');
		$stok = $this->input->post('stok');
		$file = $this->upload->data();
		$gambar = $file['file_name'];

		$this->M_sport->msave_raket(array('merek_produk'=> $merk,
									'kategori_produk'=> $kategori,
								  'tipe_produk'=> $tipe,
								  'harga_produk'	=> $harga,
								  'stok'	=> $stok,
								  'gambar_produk'=> $gambar));

		$this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
  <center>Data Berhasil Ditambahkan!</center>
</div>');
		redirect('dashboard/raket');
	}
}

Public function simpan_transaksi()
    {



        $merek = $this->input->post('merek_produk');
        $kategori = $this->input->post('kategori_produk');
        $tipe = $this->input->post('tipe_produk');
        $tgl = $this->input->post('tgl_order_produk');
        $jumlah = $this->input->post('jumlah_produk');
        $harga = $this->input->post('harga_produk');	
        $total = $this->input->post('total_harga');
        $tranduk = $this->input->post('transaksi_produk');
 		$total = $jumlah * $harga;
    	$data['total_harga'] = $total;
        $ArrInsert = array(
            'merek_produk' => $merek,
            'kategori_produk' => $kategori,
            'tipe_produk' => $tipe,
            'tgl_order_produk' => $tgl,
            'jumlah_produk' => $jumlah,
            'harga_produk' => $harga,
            'total_harga' => $total,
            'transaksi_produk' => $tranduk
        );

        $this->M_sport->msave_transaksi($ArrInsert);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
  <center>Transaksi Berhasil <i class="fa-solid fa-check fa-xl"></i></center>
</div>');
        Redirect(base_url('dashboard/transaksi'));
    }

    public function totalharga(){
    	$jumlah = $this->input->post('jumlah_produk');
    	$harga = $this->input->post('harga_produk');


}

	
	public function raket_hapus($id_produk)
	{
		$this->M_sport->mdelete_raket($id_produk);
		$this->session->set_flashdata('pesanlogout', '<div class="alert alert-danger" role="alert">
  <center>Data Berhasil Dihapus!</center>
</div>');

		
		redirect('dashboard/raket'	);
	}
	public function transaksi_hapus($nomor_transaksi)
	{
		$this->M_sport->mdelete_transaksi($nomor_transaksi);
		$this->session->set_flashdata('pesanlogout', '<div class="alert alert-danger" role="alert">
  <center>Data Berhasil Dihapus!</center>
</div>');

		
		redirect('dashboard/transaksi'	);
	}

function edit_produk($idproduk)
	{
		$where = array('id_produk' => $idproduk);
		$data['produk'] = $this->M_sport->edit_data($where, 'produk')->result();
		$this->load->view("edit_produk",$data);
	}

	public function createTransaction()
	{
		$idproduk = $this->input->post('id_produk');
		$jumlah = $this->input->post('jumlah_produk');

		$this->load->model('M_sport');
		$this->M_sport->update_stok($idproduk, $jumlah);
		redirect('dashboard/transaksi');
	}
	public function print()
	{
		$data['transaksi'] = $this->M_sport->get_data('transaksi')->result();
		$this->load->view('transaksi_print.php', $data);
	}

		function laporan(){
    $dari = $this->input->post('dari');
    $sampai = $this->input->post('sampai');
    $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
    $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');

    if($this->form_validation->run()!=false){
        $data['laporan'] = $this->db->query("select *from transaksi,produk where transaksi_produk=id_produk and date(tgl_order_produk) >='$dari'")->result();
        
        $this->load->view('laporan_filter', $data);
        

    }else{
        
        $this->load->view('laporan');
        
    }
}
function laporan_print(){
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        if($dari !="" && $sampai != ""){
            $data['laporan']=$this->db->query("select * from transaksi, produk where
            transaksi_produk=id_produk and date (tgl_order_produk)>= '$dari'")->result();

            $this->load->view('laporan_print', $data);
        }else{
            redirect("dashboard/laporan");

        }
    }


}

