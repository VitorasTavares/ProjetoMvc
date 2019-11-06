<?php

class homeController{
    public function acao($acao){
        switch($acao){
            case "home":
                $this->viewHome();
            break;
            default:
                $this->viewHome();
                break;
        }
    }



    public function viewHome(){
        include "views/home.php";
    }
}