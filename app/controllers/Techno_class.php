<?php

class Techno_class extends Controller
{
    public function index()
    {
        //$data['judul'] = 'Home';

        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header2');
        $this->view('pages/techno_class');
        $this->view('templates/footer');
    }
}