<?php

class Admin extends CI_Controller
{
    public function login($password = '1',$dd)
    {
        $data['abc'] = $dd;  
        if ($password === '123') {
            $this->load->view('templates/header.php');
            $this->load->view('success.php',$data);
            $this->load->view('templates/footer.php');
        } else {
            $this->load->view('templates/header.php');
            $this->load->view('failed.php');
            $this->load->view('templates/footer.php');
        }
    }
}
