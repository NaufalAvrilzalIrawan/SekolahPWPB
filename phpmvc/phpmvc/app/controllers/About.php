<?php

class About extends Controller {

    public function index($nama = 'Tamu', $kerja = 'Pengunjung') {
        $data['judul'] = __CLASS__;
        $data['maker'] = 'Iwadmin';
        $data['nama'] = $nama;
        $data['kerja'] = $kerja;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page() {
        $data['judul'] = __FUNCTION__;
        $data['maker'] = 'Iwadmin';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer', $data);
    }
}