<?php

class Pages extends CI_Controller
{

	public function views()
	{
		$this->load->view('template/header');
        $this->load->view('views');
        $this->load->view('template/footer');
	}
}