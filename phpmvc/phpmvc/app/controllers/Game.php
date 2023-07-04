<?php

class Game extends Controller {
    public function index(){
        $data['judul'] = __CLASS__;
        $data['maker'] = 'Iwadmin';
        $data['games'] = $this->model('Game_model')->getAllGames();
        
        $this->view('templates/header', $data);
        $this->view('game/index', $data);
        $this->view('templates/footer', $data);
    }

}