<?php


class Front extends CI_Controller 
{
    public function front1()
	{
        $this->load->view('templates/header.php');
        $this->load->view('front.php');
        $this->load->view('templates/footer.php');
    }

}