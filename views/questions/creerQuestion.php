
<div class="container right" style="width: 650px; height:auto; display:flex;flex-direction:column; margin-top:21px">
            <h3 style="color: #51bfd0;">PARAMETRER VOTRE QUESTION  </h3>
            <form method="post" onsubmit="return Submit1();" action="<?=WEBROOT?>/questions/creerQuestion" id="question">
            <div class="right-deux" style="border:solid 1px #3addd6; height: auto;border-radius: 10px; padding-top: 10px;">
              <div style="display: flex; margin-bottom: 20px;">
       <p >Questions </p>
          <input type="text" error="error_quest" name="quest" class="form-control  ml-2 pt-2" style="border:solid 1px #3addd6; height: 80px; width:450px;margin-top:10px;" id="exampleInputEmail1" >
          <small  class="text-danger" id="error_quest"></small>
                      <?php
                           if(isset($err_Quest)){
                        ?>
                         <small id="helpId" class="text-danger"><?=$err_Quest?></small>
                         <?php
                          }
                        ?>
              </div>
              <div style="display: flex;margin-bottom: 20px;">
                <p>Nbre de Points </p>
                <input type="text" id="nbreP" error="error_nbre" name="nbreP" class="form-control  ml-2 pt-2" style="border:solid 1px #3addd6;height: 40px; width:80px;margin-top:10px;"  >
                <small  class="text-danger" id="error_nbre"></small>
                <?php
                           if(isset($err_NbrPoint)){
                        ?>
                         <small id="helpId" class="text-danger"><?=$err_NbrPoint?></small>
                         <?php
                          }
                        ?>
                
                </div>
              <div style="display: flex;margin-bottom: 20px;">
                <p>Type de Reponse </p>
                <select id="type" error="error_select" name="type" class="form-control  ml-2 pt-2 " style="border:solid 1px #3addd6;height: 40px; width:300px;margin-top:10px;margin-right: 5px;" >
                <option value="">Donnez le type de reponse</option>
                <option value="cm" >Choix multiple</option>
                <option value="cs" >Choix simple</option>
                <option value="ct" >Choix texte</option>
                </select>
                 <span id="ligne[1]"></br></span> 
              <span id="leschamps[2]"><button type="submit" style="width:38px;height:38px; border-radius:1px;border:none; margin-left:2px;" onclick="create_champ(2);"><img style=" margin-top:-2px; margin-left:-7px;" src="<?=WEBROOT?>/assets/img/ic-ajout-réponse.png"/></button></span>
              <small class="text-danger" id="error_select"></small>
            </div>
            
            <div id="dM4"></div>
            <div id="dM5">
              </div>
              
              <button type="submit" class="btn pt-2" name="enregistQuest" style=" width:100px;height:40px ; background-color:#3addd6 ; color: #f8fdfd;margin: 160px 7px 9px 500px" > Enregistrer </button>
           </div>
           </form>
         
            </div>

            <?php 
if (isset($erreurs)) {
  var_dump($erreurs);
}
 ?>
        



        <script>
        
        const inputs= document.getElementsByTagName("input")
        const select= document.getElementById("type")  
               for(let input of  inputs){
                       input.addEventListener("keyup",function(event){
                       if(event.target.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=event.target.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText=""
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                  })

                }

                select.addEventListener("click",function(event){
                       if(event.target.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=event.target.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText=""
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                  })




               document.getElementById("question").addEventListener("submit",function(event){
                   let valid=true;
                  for(let input of  inputs){
                      if(!input.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(input.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=input.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText="Champ Obligatoire"
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                            
                         }
                            
                  }


                  if(!select.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(select.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=select.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText="Champ Obligatoire"
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                            
                         }


                  if(valid==false){
                            event.preventDefault();
                             return false;
                   }
              });



  function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("nbreP").value;

  // If x is Not a Number or less than one or greater than 10
  if (x<1) {
    text = "Valeur doit être supérieur à 1";
    document.getElementById("error_nbre").innerHTML = text;

  } 
  
}


document.getElementById("type").addEventListener("click", create_champ(i));
function create_champ(i) {
  var choix = document.getElementById('type').value;
  if(choix =="cs"){
    var i2 = i + 1;
    document.getElementById('leschamps['+i+']').innerHTML = 
    '<span id="ligne['+i+']" style="display: flex;margin-top: 83px;margin-left: -266px;margin-right: 52px;">REP'+(i-1)+'<input style="width:400px; height:30px" type="text" name="fichier['+i+']" id="fichier['+i+']"><input type="radio" name="fich" id="fichier1['+i+']" value="'+(i-1)+'" style="margin-top: 4px;margin-left: 3px;height: 20px;width: 20px;"><button type=submit style="width: 20px;height:20px;margin-top: 4px;margin-left: 8px;" onclick="suppr('+i+')"><img style="margin-top: -16px;width: 18px;margin-left: 22px;border:none;" src="../assets/img/ic-supprimer.png"/></button><br/></span>'; 
    document.getElementById('leschamps['+i+']').innerHTML +=
    '<span id="leschamps['+i2+']"><button type=submit style="width:38px;height:38px;border-radius:1px;border:none; margin-left:2px;" onclick="create_champ('+i2+');"><img style=" margin-top: 8px;margin-left: 171px;" src="../assets/img/ic-ajout-réponse.png"/></button></span>';
  } 
  if(choix =="cm"){
    var i2 = i + 1;
    document.getElementById('leschamps['+i+']').innerHTML = 
    '<span id="ligne['+i+']" style="display: flex;margin-top: 83px;margin-left: -266px;margin-right: 52px;">REP'+(i-1)+'<input style="width:400px; height:30px" type="text" name="fichier1['+i+']" id="fichier['+i+']"><input type="checkbox" name="fich1['+i+']" id="fichier1['+i+']" value="'+(i-1)+'" style="margin-top: 4px;margin-left: 3px;height: 20px;width: 20px;"><button type=submit style="width: 20px;height:20px;margin-top: 4px;margin-left: 8px;" onclick="suppr('+i+')"><img style="margin-top: -16px;width: 18px;margin-left: 22px;border:none;" src="../assets/img/ic-supprimer.png"/></button><br /></span>'; 
    document.getElementById('leschamps['+i+']').innerHTML +=
    '<span id="leschamps['+i2+']"><button type=submit style="width:38px;height:38px;border-radius:1px;border:none; margin-left:2px;" onclick="create_champ('+i2+');"><img style=" margin-top: 8px;margin-left: 171px;" src="../assets/img/ic-ajout-réponse.png"/></button></span>'; 
  }
  if(choix =="ct"){
    var i2 = i + 1;
    document.getElementById('leschamps['+i+']').innerHTML = 
    '<span id="ligne['+i+']" style="display: flex;margin-top: 83px;margin-left: -266px;margin-right: 52px;">REP<input style="width:400px; height:100px" type="text" name="fichierT" id="fichierT['+i+']"><button type=submit style="width: 20px;height:20px;margin-top: 4px;margin-left: 8px;" onclick="suppr('+i+')"><img style="margin-top: -16px;width: 18px;margin-left: 22px;border:none;" src="../assets/img/ic-supprimer.png"/></button><br /></span>'; 
  }
}
function suppr(i){ 
  document.getElementById("ligne["+i+"]").innerHTML="";
} 
</script>