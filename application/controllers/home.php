<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
	public function index()
	{
		$this->load->view('v_front');
	}

	public function tambah_data()
	{
		$this->load->view('v_tambah');
	}


}


