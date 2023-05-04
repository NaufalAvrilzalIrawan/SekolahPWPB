<?php 

namespace App\Controllers;

use App\Models\model_db;

class akun extends BaseController{
    public function index(){
        $datamodel = new model_db;
        $alldatamodel = $datamodel->findAll();
        return view('viewakun' , ['alldatamodel' => $alldatamodel]);
    }

    public function create(){
        return view('formcreate');
    }

    public function createdata(){
        $datamodel = new model_db;
        $datamodel->insert($this->request->getPost());
        return redirect()->to(base_url('viewakun'));
    }

    public function update($id = false){
        $datamodel = new model_db;
        $dataakun = $datamodel->find($id);
        return view('formupdate', ['dataakun' => $dataakun]);
    }

    public function updatedata(){
        $datamodel = new model_db;
        $datamodel->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('viewakun'));
    }

    public function delete($id = false){
        $datamodel = new model_db;
        $datamodel->delete($id);
        return redirect()->to(base_url('viewakun'));
    }
}