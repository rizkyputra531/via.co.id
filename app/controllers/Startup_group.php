<?php

class Startup_group extends Controller
{
    public function index()
    {
        //$data['judul'] = 'Home';

        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header2');
        $this->view('pages/startup_group');
        $this->view('templates/footer');
    }
}