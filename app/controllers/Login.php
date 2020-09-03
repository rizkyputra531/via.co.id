<?php

class Login extends Controller
{
    public function index()
    {
        //$data['judul'] = 'Home';

        //$data['nama'] = $this->model('User_model')->getUser();

        $this->view('backend/auth/login');
    }
}