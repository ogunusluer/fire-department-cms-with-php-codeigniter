<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayitsorgula extends CI_Controller {

	public function index()
	{
		$this->load->view('kayitsorgula');
	}

	public function kayit(){

		$kayit_id = $this->uri->segment(3);

		$data['ihbar'] = $this->db->where('KAYIT_ID',$kayit_id)->get('ihbarlar')->row();

		$this->load->view('kayit',$data);


	}


}
