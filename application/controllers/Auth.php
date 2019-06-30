<?php
class auth extends CI_controller {

	function __construct() {

		parent::__construct();
		$this->load->model('Model_operator');
	}

function login()

{

	if(isset($_POST['submit'])) {

		//proses login disini
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hasil = $this->Model_operator->login($username, $password);
		echo $hasil;
	}
		else {

			$this->load->view('form_login');
		}
}

}