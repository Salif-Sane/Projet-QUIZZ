<?php
   
  class Jeu extends Controller {

    public function __construct(){
        
      parent::__construct();
      
        $this->dirname="jeu"; 
        $this->layout="layout_joueur"; 
        $this->manager=new UserManager();
        session_start();
    }

    public function listerJoueur(){
       $this->layout="layout_joeur_int";
       $this->views="listeJoueur";
       $this->render();
      
    }
    public function jouer(){

      
    }
    public function selectReponse(){
        return null;
  
    }

    public function afficheScore(){
         return 0; 
    }

   }
