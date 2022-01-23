<?php

class Staff extends CI_Controller
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
        $this->sitelayout->loadTemplate('pages/staff/staffmainpage', $data);
    }

    public function registerpatient()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/staff/staffregisterpatient', $data);
    }

    public function viewpatient()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/staff/staffviewpatient', $data);
    }

    public function individualview()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/staff/staffindividualview', $data);
    }

    public function individualupdate()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/staff/staffindividualupdate', $data);
    }

    public function viewconsultations()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/staff/staffviewconsultations', $data);
    }

    public function viewdiagnosis()
    {
        $data['navbar'] = 'homepage';
        $this->sitelayout->loadTemplate('pages/staff/staffviewdiagnosis', $data);
    }
}
?>