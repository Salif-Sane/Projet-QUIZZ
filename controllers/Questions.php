<?php
   
  class Questions extends Controller {

    public function __construct(){
      parent::__construct();

        $this->dirname="questions";
        $this->layout="layout_admin";
        $this->manager=new QuestionManager();
        
    }

    public function listeQuestion(){

       $this->views="listeQuestion";
       $this->render();
       if (isset($_POST['btn_submitNbre'])) {
       
         extract($_POST);

            $this->validator->is_empty($nbreQ,'nbreQ',"nombre de question Obligatoire");

            if ($this->validator->is_valid()) {

              $this->validator->is_positif($nbreQ,'nbreQ',"nombre de question Obligatoire");

              if ($this->validator->is_valid()) {
                

                $id= $_SESSION['id'];
                $id++;
                $_SESSION['nbreQ'.$id]=$nbreQ;
                $_SESSION['id']=$id;

              }else {
                $erreurs= $this->validator->getErrors();
              $this->data['err_NbrQ']=$erreurs['nbreQ'];
              $this->render();
              }

            }else {
              $erreurs= $this->validator->getErrors();
              $this->data['err_NbrQ']=$erreurs['nbreQ'];
              $this->render();
            }
           
         
       }
      
    }
    public function creerQuestion(){
        $this->layout="layout_admin";
        $this->views="creerQuestion";
        $this->render();
        if(isset($_POST['enregistQuest'])){

          extract($_POST);
          /*
          var_dump($_POST);
          $fichier1[] => tous nos réponses
          $fich1[] => nos reponses vrais

          */
          
          $this->validator->is_empty($quest,'quest',"Question Obligatoire");
          $this->validator->is_empty($nbreP,'nbreP',"Nombre de point Obligatoire");
          $this->validator->is_empty($type,'type',"Type Obligatoire");

          if($this->validator->is_valid()) {
            $this->validator->is_positif($nbreP,'nbreP',"Nombre de point Obligatoire");
            if($this->validator->is_valid()) {

            //Connexion a la Base Donnée

          
            $answer=new Question();
            $answer->setQuestion($quest);
            $answer->setNbrePoint($nbreP);
            $answer->setType($type);
            switch ($answer->getType($type)) {
              case 'cs':
                for ($i=2; $i < count($fichier)+2 ; $i++) { 
                  $answer->setReponses($fichier[$i]);
                  $result=$this->manager->create($answer);
                }
                break;
              case 'cm':
                
                for ($j=2; $j < count($fichier1)+2 ; $j++) { 
                  $answer->setReponses($fichier1[$j]);
                  $result=$this->manager->create($answer);
                }
                
                  break;

              case 'ct':
                $answer->setReponses($fichierT);
                $result=$this->manager->create($answer);
                    break;
              
              default:
                # code...
                break;
            }
            
          
            

            $listQ=$this->manager->findAll();
           
            if ($result==True) {
              echo("Question crée avec succés");
            }else{
              echo("Il y a erreur");
            }


            


             

      }else{
            $erreurs= $this->validator->getErrors();
            $this->data['err_NbrPoint']=$erreurs['nbreP'];
            $this->views="creerQuestion";
            $this->render();
      }
        
  }else{
    //Champs non remplis=>Erreur
    $erreurs= $this->validator->getErrors();
    $this->data['erreurs']=$erreurs;
    $this->views="creerQuestion";
    $this->render();
 }

}
    }

    public function passerQuestion(){
         echo 0; 
    }

   }
