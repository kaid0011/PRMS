<?php

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('user_ID')) {
        //     redirect('mainpage');
        // } else if ($this->session->userdata('userName') == 'admin') {
        //     redirect('supportteam');
        // }
    }

    public function index()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/homepage', $data);
    }
}
?>