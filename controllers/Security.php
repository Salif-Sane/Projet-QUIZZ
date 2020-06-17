<?php
   
  class Security extends Controller {

    public function __construct(){
       //Appel au constructeur de la classe Mere
        parent::__construct();

        $this->dirname="security";
        $this->layout="layout_connexion"; 
        $this->manager=new UserManager();
        
      
       
    }

   public function loadViewInscription(){
      $this->views="inscription";
      $this->render();  
   }
    public function index(){
       $this->views="connexion";
       $this->render();
      
    }
    public function seConnecter(){
     
      //extract permet d'extraire les valeurs d'un tableau associatif sur ces clés
       if(isset($_POST['btn_connexion'])){
          //Passer par le Formulaire de Connexion
            extract($_POST);
            
            $this->validator->is_empty($login,'login',"Login Obligatoire");
            $this->validator->is_empty($password,'password',"Password Obligatoire");
         if($this->validator->is_valid()) {
            //Connexion a la Base Donnée
            $user=null;
            $user=$this->manager->getUserByLoginAndPwd($login,$password);
             if(!empty($user)) {
                //Login et Mot de Passe Correct
                    $this->data['userConnect']=$user;
                    $_SESSION['userConnect']=$user;
                   
                      if($user->getProfil()==="admin"){
                        $this->layout="layout_admin";
                        $this->views="inscription";
                        $this->render();
                      }else{
                        $this->layout="layout_joueur";
                        $this->views="../jeu/intJoueur";
                        $this->render();
                      }
                      
                   
                  
             }else{
                  //Login ou Mot de Passe InCorrect
                        $this->data['err_login']="Login ou Mot de Passe Incorect";
                        $this->views="connexion";
                        $this->render();
             }
           
         }else{
            //Champs non remplis=>Erreur
            $erreurs= $this->validator->getErrors();
            $this->data['erreurs']=$erreurs;
            $this->views="connexion";
            $this->render();
         }

       }else{
          //Passer par URL
          $this->views="connexion";
          $this->render();
       }
       

       
    }

    public function seDeconnecter(){

      $this->layout="layout_connexion"; 
      $this->views="connexion";
      $this->render();
      session_destroy();
         
    }
    public function creerUtlisateur(){
        
    }

    public function upload(){
      $target_dir = "./assets/upload/";
      $target_file = $target_dir . basename($_FILES["imgUser"]["name"]);
      var_dump($_FILES["imgUser"]);
      die();
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imgUser"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }
      
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      
      // Allow certain file formats
      if($imageFileType != "png" && $imageFileType != "jpeg" ) {
        echo "Sorry, only JPEG & PNG files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["imgUser"]["tmp_name"], $target_file)) {
           echo "The file ". basename( $_FILES["imgUser"]["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
        if(isset($_SESSION['userConnect'])){
        $this->layout="layout_admin";
        $this->views="inscription";
        $this->render(); 

        }else {
         $this->layout="layout_connexion";
         $this->views="connexion";
         $this->render(); 
        }


        
      }
    }




   }
