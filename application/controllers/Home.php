<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['judul_halaman'] = "Selamat Datang";

		$this->load->view('template/header', $data);
		$this->load->view('home/home.php');
		$this->load->view('template/footer');
	}
}
