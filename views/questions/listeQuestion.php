

<div class="container right" style="width: 700px; height:auto;border-radius: 10px; border: solid #818181 1px; display:flex;flex-direction:column; margin-top:21px">
      <form action="<?=WEBROOT?>/questions/listeQuestion" method="post">
        <div class="right-one" style="display: flex; align-content: center; ">
            
            <p style="margin: 11px 0px 0px 331px; width: auto;">Nbre de question/Jeu </p>
            <input type="text" name="nbreQ" error="error_NQ" class="form-control  ml-2 pt-2 " style="height: 30px; width:40px;margin-top:10px;" value="<?= $_SESSION['nbreQ'.$_SESSION['id']]  ?>" id="nbreQ" />
            <button type="submit" onclick="myFunction()" name="btn_submitNbre" class="btn  pt-2" style=" width:60px;height:40px ; background-color:#3addd6 ; color: #f8fdfd;margin: 5px 7px 0px 6px" >OK</button>
            <small  class="text-danger" id="error_NQ"><?php //$err_NbrQ ?></small>
            
        </div>
        </form>
        <div class="right-deux" style="border:solid 1px #818181; height: auto;border-radius: 10px;">
        <ol > <li style="color: #818181">Les languages du web</li> 
          
           <input type="checkbox" name="" id="" checked>
           <label for="">HTML</label> <br/>
           <input type="checkbox" name="" id="">
           <label for="">R</label>  <br/>
          <input type="checkbox" name="" id="">
          <label for=""> JAVA</label>
          
          <li style="color: #818181">D'ou vient le corona ?</li> 
          
          <input type="radio" name="" id="">
          <label for="">ITALIE </label><br/>

          <input type="radio" name="" id="" checked>
          <label for="">CHINE</label>
          
          <li style="color: #818181"> Quel terme déﬁnit langage qui s’adapte sur     Androïd et sur Ios</li> 
          <input type="email" class="form-control  pt-2 " style="height: 30px; width:150px" placeholder="portable" id="exampleInputEmail1" disabled>
          <li style="color: #818181">Quelle est la première école de codage gratuite  au Sénégal</li> 
          
          <input type="radio" name="" id="">
          <label for="">Simplon</label><br/>
          <input type="radio" name="" id="" checked>
          <label for="">Orange Digitale Center</label>
        
          <li style="color: #818181">Les précurseurs de la révolution digitale</li> 
        
          <input type="radio" name="" id="" checked>
          <label for=""> GAFAM </label><br/>
          <input type="radio" name="" id="">
          <label for="">CIA-FBI</label>
        
        </ol> 
        
      </div>
      <button type="submit" class="btn   pt-2" style=" width:100px;height:40px ; background-color:#3addd6 ; color: #f8fdfd;margin: 4px 7px 0px 525px" > Suivant </button>
        </div>
    </div>


<script>

/*function myFunction() {
  let valid=true;
  var x, text;
  const nbreQu= document.getElementById("nbreQ")

  // Get the value of the input field with id="numb"
  x = nbreQu.value;


  nbreQu.addEventListener("keyup",function(event){
                       if(event.target.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=event.target.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText=""
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                  })

  // If x is Not a Number or less than one or greater than 10
  if (x<5) {
    valid=false
    text = "Valeur doit être supérieur ou égal à 5";
    document.getElementById("error_NQ").innerHTML = text;

  } 


  if(valid==false){
         event.preventDefault();
          return false;
                   }


}
  console.log();*/



</script>
 
    
  
 
