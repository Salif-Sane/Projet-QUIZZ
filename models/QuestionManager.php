<?php

class QuestionManager extends Manager{
   
    function __construct(){
        $this->className="Question";
    }



    public function create($objet){
        $sql="INSERT INTO question (`id`, `question`, `type`, `reponses`, `nbrePoint`) VALUES (NULL, '".$objet->getQuestion()."', '".$objet->getType()."', '".$objet->getReponses()."', '".$objet->getNbrePoint()."')";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;

    }
    public function update($objet){
        
        $sql="UPDATE user SET  fullname=[.$objet->getFullname($fullName).],login=[.$objet->setLogin($login).],pwd=[.$objet->setPwd($pwd).],profil=[.$objet->setProfil($profil).],score=[.$objet->getScore($score).] WHERE id=$id";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;

    }
    public  function delete($id){
      $sql="DELETE FROM question WHERE id='$id' ";

      return $this->ExecuteUpdate($sql)!=0;
    }
    public function findAll(){

        $sql="select reponses from `question`";
        

        return $this-> ExecuteSelect($sql);
         }

    public function findById($id){

        $sql="select score,question,repones,nbrePoint from question where id='$id'";
        
       return $this-> ExecuteSelect($sql);

    }   
}