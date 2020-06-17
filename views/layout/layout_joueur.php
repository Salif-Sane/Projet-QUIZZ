<?php require_once('./views/layout/inc/header.inc.php')?>
      <form class="container mt-1 " style="background-color:#f8fdfd; width:1600px;" >
      <div style="background-color: #51bfd0; height: 80px;padding-top: 5px; width: 1141px; margin: 0px -25px 0px -15px; display: flex;align-items: center;">
        <div class="left-deux" style="margin: 9px 0px 5px 8px;">
            <img src="avatar.png" class="rounded-circle" style="border:solid white 1px ;height: 58px; width: 58px;margin: 6px 0px 0px 0px; ;">
            <div style="margin: -4px 0px 5px 8px;font-size: 12px; color: #f8fdfd;"> AAA BBB </div>
        </div>
        <p style="color: #f8fdfd; margin: 10px 2px 7px 210px ; font-size: 25px ;text-align: center;font-family: bold;"> Bienvenue sur la plateforme de jeu de Quizz    Jouer et tester votre niveau de culture generale</p>
        <a name="c" type="submit" class="btn col-2 ml-5 pt-2" href="<?=WEBROOT?>/security/seDeconnecter" style=" width:200px; background-color:#3addd6 ; color: #f8fdfd;margin: 10px 7px 0px 0px" role="button" >Deconnexion</a>
        </div>
        <div class="containterbottom" style="display: flex;flex-direct;">
       
        <?php echo  $content_for_layout?>
        
        <div style="width: 576px;height: 300px ;border-radius: 10px;margin: 44px -13px 0px 12px;">
          
          
          <div class="tabs">
            <input name="tabs" type="radio" id="tab-1" checked="checked" class="input"/>
            <label for="tab-1" class="label">Top scores</label>
            <div class="panel">
              <table  style="color: #000000;font-size: 28px;">
              <tbody>
                <tr>
                  <td scope="row">Ibou DIATTA</td>
                  
                  <td style="border-bottom:solid 3px  #51bfd0 ;">1022pts</td>
                </tr>
                <tr>
                  <td scope="row">Aly NIANG</td>
                  
                  <td style="border-bottom:solid 3px #3addd6;">963pts</td>
                </tr>
                <tr>
                  <td scope="row">Saliou MBAYE</td>
                  
                  <td style="border-bottom:solid 3px yellow;">877pts</td>
                </tr>
                <tr>
                  <td scope="row">Khady DIOUF</td>
                  
                  <td style="border-bottom:solid 3px #e49216;">875pts</td>
                </tr>
                <tr>
                  <td scope="row">Moussa SOW</td>
                
                  <td style="border-bottom:solid 3px #818181;">870pts</td>
                </tr>
              </tbody>
              </table>
            </div>
          
            <input name="tabs" type="radio" id="tab-2" class="input"/>
            <label for="tab-2" class="label">Mon meilleur score</label>
            <div class="panel">
                      <h2>26 points</h2>
            </div>
        
          
        </div>
        <a role="button" href="<?=WEBROOT?>/security/seDeconnecter"ctype="submit" style=" width:200px; background-color:#3addd6 ; color: #f8fdfd;">Quitter la partie</a>
    </div>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <?php require_once('./views/layout/inc/footer.inc.php')?>