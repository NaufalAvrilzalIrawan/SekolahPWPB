<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = __CLASS__;
        $data['maker'] = 'Iwadmin';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}