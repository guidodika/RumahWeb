<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Welcome extends CI_Controller
{

	public function registrasi()
	{

		if ($this->input->method() === 'post') {
			print_r($this->input->post());
		}

		$this->load->view('registrasi');
	}
}
