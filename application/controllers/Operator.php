<?php
class Operator extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('Model_operator');
	}

	function index()
	{
		$data['record'] = $this->Model_operator->tampilkan_data()->result();
		$this->template->load('template/template','operator/lihat_data',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			//proses data
			$nama 		= $this->input->post('operator',true);
			$username	= $this->input->post('username',true);
			$password	= $this->input->post('password',true);
			$data 		= array('nama_operator'=>$nama, 'username'=>$username, 'password'=>md5($password));
			$this->db->insert('operator',$data);
			redirect('operator');

		}

		else{
			$this->template->load('template/template','operator/form_input');
		}
	}

	function edit()
	{
		if(isset($_POST['submit'])){
			//proses operator
			$data=array('nama_operator'=> $this->input->post('nama'),
				'username' => $this->input->post('nama_operator'),

		);
			$this->Model_operator->edit($data);
		
			redirect ('operator');
		}

		else {
			$id= $this->uri->segment(3);
			$data['record'] = $this->Model_operator->get_one($id)->row_array();
			$this->template->load('template/template','operator/form_edit',$data);
			}
	}

	function hapus() 	
	{
		$id= $this->uri->segment(3);
		$this->db->where('id_operator',$id);
		$this->db->delete('operator');
		redirect('operator');
	}
}

?>	