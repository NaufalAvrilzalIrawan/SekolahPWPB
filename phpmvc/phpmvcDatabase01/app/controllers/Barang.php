<?php

class Barang extends Controller {
    public function index(){
        $data['judul'] = __CLASS__;
        $data['maker'] = 'Iwadmin';
        $data['barangs'] = $this->model('Barang_model')->getAllBarangs();
        
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer', $data);
    }

}