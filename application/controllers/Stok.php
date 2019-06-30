<?php

	class Stok extends CI_Controller{

function __construct()
{
parent::__construct();
$this->load->model('Model_barang');
$this->load->model('Model_kategori');
$this->load->model('Model_stok');
}
function index()
{
		$data['stok'] = $this->Model_stok->tampil_data();
		$this->template->load('template/template','stok/lihat_data',$data);
}
	function post()
	{
			if(isset($_POST["submit"])){
				// proses barang
				$id = $this->input->post('id');
				$nama = $this->input->post('nama_barang');
				$kategori = $this->input->post('kategori');
				$harga = $this->input->post('harga');
				$data = array('nama_barang'=>$nama,'
								id_kategori'=>$kategori, 'harga'=>$harga);

				   // var_dump($data);
       //    die;
				$this->Model_barang->post($data, $id);
				redirect('barang');
			}
			 else {
			 	$id = $this->uri->segment(3);
			 	$data['barang'] =  $this->Model_barang->tampil_dropdown()->result();
			 	$this->template->load("template/template","stok/form_input",$data); 

			}
		}


    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_barang');
            $kategori   =   $this->input->post('kategori');
            $harga      =   $this->input->post('harga');
            $data       = array('nama_barang'=>$nama,
                                'id_kategori'=>$kategori,
                                'harga'=>$harga);
       

            $this->Model_barang->edit($data,$id);
            redirect('barang');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('Model_kategori');
            $data['kategori']   =  $this->Model_kategori->tampilkan_data()->result();
            $data['record']     =  $this->Model_barang->get_one($id)->row_array();
            $this->load->view('barang/form_edit',$data);
        }
    }

    function hapus()
    {
    	$id= $this->uri->segment(3);
    	$this->Model_barang->hapus($id);
    	redirect('barang');
    }
}

?>