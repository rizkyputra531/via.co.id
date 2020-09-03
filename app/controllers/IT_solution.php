<?php

class IT_solution extends Controller {
    public function index()
    {   
        //$data['judul'] = 'Home';

        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header');
        $this->view('pages/it_solution');
        $this->view('templates/footer');

    }
}