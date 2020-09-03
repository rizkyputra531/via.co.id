<?php

class Artikel extends Controller
{
    public function index()
    {
        //$data['judul'] = 'Home';

        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header');
        $this->view('artikel/artikel');
        $this->view('templates/footer');
    }
}