<?php

class Register extends Controller
{
    public function index()
    {
        //$data['judul'] = 'Home';

        //$data['user'] = $this->model('Register_model')->getAllUser();

        $this->view('backend/auth/register');
    }

    public function tambah()
    {
        if ($this->model('Register_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('Berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/register');
            exit;
        } else {
            Flasher::setFlash('Gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/register');
            exit;
        }
    }
}