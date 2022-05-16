<?php
  namespace View;
  require_once'../../Controleurs/ClientControleur/readAllClientControleur.php';
  require_once'tableau.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Gestion De Vente | CLIENTS
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../../assets/js/jsErreur.js"></script> 
    <script type="text/javascript">
      function IsExisteDeja(champ)
      {
        var code = champ.value;
        var clientList = "<?php foreach ($clients as $client): ?><?=$client->getCodeCli()."/"?><?php endforeach; ?>";
        var tableau = clientList.split("/");
        var i=0,trouve=false;
        for (i;i<tableau.length-1;i++)
        {  
          if (code==tableau[i])
          {
            alert('Codeclient existe deja');
            trouve=true;
           }
          }
        return trouve;
      }
      function verifCode(f)
      { 
        if (IsExisteDeja(f.codecli.value)){
          alert('Codeclient existe deja');
        }
      }
    </script>  
</head>
  <body>
  <?php require_once'../../assets/include/Entete.php'; ?>
    <section id="mainContent">
      <div class="content_middle">
       <div class="col-lg-12">
        <div class="content_bottom_middle">
            <div class="single_category wow fadeInDown">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"><div class="glyphicon glyphicon-user"></div> CLIENT</a> </h2>
          <div class="well">
          <fieldset >
  						<!-- liste -->
  					<legend>LISTE DES CLIENTS</legend>
            <!-- AJOUT CLIENT -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="content_middle_leftbar">
                  <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">ajouter un client</div> </h2>
                    <div id="html">
                    <button data-toggle="modal" data-backdrop="false" href="#formulaire" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-plus"></div> Ajouter</button>
                     </div>

                     <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text"><div class="glyphicon glyphicon-usd"></div> Chiffre d'affaire</div> </h2>
                    <div>
                      <a href="readAllClient.php#chiffre"><button href="" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-hand-down"></div> Voir</button></a>
                     </div>
                     
                  </div>
                </div>
              </div>
              <!--  -->
           <!--  -->
        <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="content_middle_middle ">
          <div class="slick_slider2">
            <div class="single_featured_slide"> <img src="../../assets/images/Comment-accroitre-trafic-dans-son-point-vente-T.jpg" alt="">
    
            </div>
            <div class="single_featured_slide"> <img src="../../assets/images/adult-agreement-beard-541522-748-px.jpg" alt="">         
            </div>
            <div class="single_featured_slide"><img src="../../assets/images/ecommerce-2140604_640.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <!-- RECHERCHE BEGIN -->
      <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 30px;">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">recherche</div> </h2>
            <ul class="catg1_nav">
              <div class="panel panel-default">
                    <div class="panel-heading">
                        <div><p class="box-title">Recherche par</p></div>
                    </div>
                    <div class="box-body">
                      <form action="#" method="get">
                        <select class="sel form-control" name="select">
                            <option class="form-control" value="tous" selected="">
                              tous
                            </option>
                            <option value="numero">
                              numero
                            </option>
                            <option class="form-control" value="nom">
                              nom
                            </option>
                            <option value="adresse">
                              adresse
                            </option>
                        </select>
                    <div class="input-group">
                       <div id="resultats">
                            <input type="text" name="resultats" id="resultats" placeholder="recherche . . . " class="form-control input-lg">
                            </div>
                            <div id="nom">
                                <input type="text" name="nom" id="nom" placeholder="nom . . ." class="form-control input-lg">
                            </div>
                            <div id="numero">
                                <input type="text" name="numero" id="numero" placeholder="numero . . ." class="form-control input-lg">
                            </div>
                            <div id="adresse">
                                <input type="text" name="adresse" id="adresse" placeholder="adresse . . ." class="form-control input-lg">
                            </div>
                        <span class="input-group-addon">
                          <button type="submit" class="btn btn-primary btn-xs" >
                                <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                    </div>
                      </form>
                    </div>
                </div>
            </ul>
          </div>
        </div>
      </div>
      <!-- END -->
      <?php if (empty($clients)): ?>
        <?php require_once'tableau.php'; ?>
              <?php else: ?>
                <?php if($clients===false): ?>
                  <p>
                    erreur
                  </p>
                <?php else: ?>
              <div class="col-lg-12 col-md-12 col-sm-12"> 
                <div class="single_category wow fadeInDown">
                    <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th ><div class="glyphicon glyphicon-user"></div> NUMERO</th><th><div class="glyphicon glyphicon-user"></div> NOM</th><th><div class="glyphicon glyphicon-home"></div> ADRESSE</th><th><div class="glyphicon glyphicon-cog fa-spin"></div> MODIFICATION</th><th><div class="glyphicon glyphicon-cog fa-spin"></div> SUPPRESSION</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php foreach ($clients as $client): ?>
                                      <tr>
                                        <td><?= $client->getCodeCli() ?></td>
                                        <td><?= $client->getNomCli() ?></td>
                                        <td><?= $client->getAdresseCli() ?> </td>
                                        <td><a href="formUpdateClient.php?codecli=<?=$client->getCodeCli() ?>"><span class="glyphicon glyphicon-edit"></span> Modifier </a></td>
                                        <td>
                                        <a href="../../Controleurs/ClientControleur/deleteClient.php?codecli=<?=$client->getCodeCli() ?>"><span class="glyphicon glyphicon-trash"></span> supprimer </a></td>
                                      </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                      </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endif; ?>
  				</fieldset>
          </div>
  			<!--  -->
          </div>
        </div>
      </div>
      </div>
      <!-- chiffre d'affaire -->
      <div class="col-lg-6">
        <div class="content_middle_leftbar">
          <div class="single_category wow fadeInDown">
          <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text"><div class="glyphicon glyphicon-usd"></div> chiffre d'affaire</div> </h2>           
          </div>
          <a href="#" name="chiffre">
          <?php require_once'../Lignecommandecli/listes.php'; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content_middle-righttbar">
          <div class="single_category wow fadeInDown">
            <img src="../../assets/images/poignee-de-main.jpg" alt="" width="100%" height="100%">
          </div>
        </div>
      </div>
 </section>
 <!-- Modal ajout bootstrap-->
<div class="col-md-6 col-xs-12 col-md-offset-3">
  <div class="modal fade" id="formulaire">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color: red;">x</button>
          <h4 class="modal-title"><div class="glyphicon glyphicon-plus"></div> Ajouter</h4>
        </div>
        <div class="modal-body">
          <form action="../../Controleurs/ClientControleur/ajoutClient.php" name="f" id="modalForm" method="post" onsubmit=" return verifForm(this)">
            <div class="form-group">

              <label for="" class="control-label">CODE CLIENT :</label>
              <div class="input-group" >
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input style="text-transform: uppercase;" value="CL" type="text" name="codecli" class="form-control " required="" onblur="IsExisteDeja(this)" placeholder="codecli">
              </div>

              <label for="" class="control-label"> NOM CLIENT :</label>
               <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" required="" name="nomcli" value="" class="form-control" placeholder="nomcli">
              </div>

              <label for="" class="control-label">ADRESSE CLIENT :</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" required="" name="adressecli" value="" class="form-control" placeholder="adressecli" >
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success" onclick="verifCode(this)" style="margin-top: 10px;"> <div class="glyphicon glyphicon-plus"></div> AJOUTER <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php require_once'../../assets/include/footer.php';?>
     <script type="text/javascript">
           $(document).ready(function(){
               $('.sel').val(['tous']);
               $('#resultats').show();
               $('#nom').hide();
               $('#numero').hide();
               $('#adresse').hide();
               $(document).on('change','.sel',function(){
                   var val = $('.sel').val();
                   if(val=='tous'){
                       $('#resultats').show();
                       $('#nom').hide();
                       $('#numero').hide();
                       $('#adresse').hide();
                   }
                   else if(val=='nom'){
                       $('#resultats').hide();
                       $('#nom').show();
                       $('#numero').hide();
                       $('#adresse').hide();
                   }
                   else if(val=='numero'){
                       $('#resultats').hide();
                       $('#nom').hide();
                       $('#numero').show();
                       $('#adresse').hide();

                   }
                   else if(val=='adresse'){
                     $('#resultats').hide();
                       $('#nom').hide();
                       $('#numero').hide();
                       $('#adresse').show();
                   }
           });

        $("modalForm").submit(function(e) {
        e.preventDefault();
        var $modalForm = $(this);
        $.post($modalForm.attr("action"), $modalForm.serialize())
            .done(function(data) {
                $("#html").html(data);
                $("#formulaire").modal("hide");
                $("table").load('readAllLcomCli.php table' ,function () {
              });
            })
          });
        });
     </script>
     <script type="text/javascript">
       $("#modalForm").validate({
                  rules: {
                    codecli : {
                      required : true
                    },
                    nomcli : {
                      required : true
                    },
                    adressecli : {
                        required :true
                    }
          },
        });
     </script>
  
   </body>
 </html>
