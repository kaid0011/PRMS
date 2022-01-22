<?php

class Admin extends CI_Controller
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
        $this->sitelayout->loadTemplate('pages/admin/adminmainpage', $data);
    }

    public function staffrecords()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/admin/adminstaffrecords', $data);
    }
    
    public function registerstaff()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/admin/adminregisterstaff', $data);
    }
    
    public function viewstaff()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/admin/adminviewstaff', $data);
    }
    
    public function individualview()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/admin/adminindividualview', $data);
    }

    public function individualupdate()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/admin/adminindividualupdate', $data);
    }
}
?>