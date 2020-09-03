<?php

class About extends Controller
{
    public function index()
    {
        //$data['judul'] = 'Home';

        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header');
        $this->view('about/index');
        $this->view('templates/footer');
    }
}