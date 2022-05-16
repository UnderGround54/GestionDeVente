  <?php
    require_once'../../Controleurs/FournisseurControleur/readAllFrsControleur.php';
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>
        Gestion De Vente | FOURNISSEURS
      </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php require_once'../../assets/include/Entete.php'; ?>
<!--  -->
<!--  -->
<!--  -->
<section id="mainContent">
      <div class="content_middle">
       <div class="col-lg-12">
        <div class="content_bottom_middle">
            <div class="single_category wow fadeInDown">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"><div class="glyphicon glyphicon-user"></div> FOURNISSEURS</a> </h2>
          <div class="well">
          <fieldset>
              <!-- liste -->
            <legend>LISTE DES FOURNISSEURS</legend>
            <!-- AJOUT FOURNISSEURS -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="content_middle_leftbar">
                  <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">ajouter un fournisseur</div> </h2>
                    <div id="html">
                    <button data-toggle="modal" data-backdrop="false" href="#formulaire" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-plus"></div> Ajouter</button>
                     </div>

                     <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text"><div class="glyphicon glyphicon-usd"></div> Chiffre d'affaire</div> </h2>
                    <div>
                      <a href="readAllFrs.php#chiffre"><button href="" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-hand-down"></div> Voir</button></a>
                     </div>

                     <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">Approvisionnement</div> </h2>
                    <div>
                      <a href="readAllFrs.php#liste"><button href="" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-hand-down"></div> Voir</button></a>
                     </div>
                     
                  </div>
                </div>
              </div>
              <!--  -->
           <!--  -->
        <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="content_middle_middle ">
          <div class="slick_slider2">
            <div class="single_featured_slide"> <img src="../../assets/images/reussir-une-vente-en-face-a-face-700x423.jpg" alt="">
    
            </div>
            <div class="single_featured_slide"> <img src="../../assets/images/poignee-de-main.jpg" alt="">
              
            </div>
            <div class="single_featured_slide"><img src="../../assets/images/adult-bag-beautiful-935759-1.jpg" alt="">
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
                          <input type="text" name="resultats" id="resultats" placeholder="recherche . . . " class="form-control input-lg"">
                      </div>
                      <div id="nom">
                          <input type="text" name="nom" id="nom" placeholder="nom . . ." class="form-control input-lg"">
                      </div>
                      <div id="numero">
                          <input type="text" name="numero" id="numero" placeholder="numero . . ." class="form-control input-lg"">
                      </div>
                      <div id="adresse">
                          <input type="text" name="adresse" id="adresse" placeholder="adresse . . ." class="form-control input-lg"">
                      </div>
                        <span class="input-group-addon">
                          <a href="readAllFrs.php#tables">
                          <button type="submit" class="btn btn-primary btn-xs" >
                                <span class="glyphicon glyphicon-search"></span>
                          </button>
                          </a>
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
      <?php if (empty($fournisseurs)): ?>
      <div class="col-lg-12 col-md-12 col-sm-12"> 
        <div class="single_category wow fadeInDown"> 
              <div class="panel-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        <div class="glyphicon glyphicon-user"></div> NUMERO
                      </th>
                      <th><div class="glyphicon glyphicon-user"></div> NOM
                        </th>
                      <th><div class="glyphicon glyphicon-home"></div> ADRESSE
                        </th>
                      <th><div class="glyphicon glyphicon-cog fa-spin"></div> MODIFICATION
                        </th>
                      <th><div class="glyphicon glyphicon-cog fa-spin"></div> SUPPRESSION
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>      
          </div>
        </div>      
              <?php else: ?>
                <?php if($fournisseurs===false): ?>
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
                                  <th><div class="glyphicon glyphicon-user"></div> NUMERO</th><th><div class="glyphicon glyphicon-user"></div> NOM</th><th><div class="glyphicon glyphicon-home"></div> ADRESSE</th><th><div class="glyphicon glyphicon-cog fa-spin"></div> MODIFICATION</th><th><div class="glyphicon glyphicon-cog fa-spin"></div> SUPPRESSION</th>
                                </tr>
                              </thead>
                              
                                <tbody>
                                <?php foreach ($fournisseurs as $fournisseur): ?>
                                <tr>
                                  <td><?= $fournisseur->getCodeFrs() ?></td>
                                  <td><?= $fournisseur->getNomFrs() ?></td>
                                  <td><?= $fournisseur->getAdresseFrs() ?> </td>
                                  <td><a href="formUpdateFrs.php?codefrs=<?=$fournisseur->getCodeFrs() ?>"><span class="glyphicon glyphicon-edit"></span> Modifier </a></td>
                                  <td>
                                  <a href="../../Controleurs/FournisseurControleur/deleteFournisseur.php?codefrs=<?=$fournisseur->getCodeFrs() ?>"><span class="glyphicon glyphicon-trash"></span> supprimer </a></td>
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
          <?php require_once'../Lignecommandfrs/listeFrsCA.php'; ?>
          </a>
        </div>
      </div>
      
      <!-- liste approvisionner -->
      <div class="col-lg-6">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
          <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">approvisonnement</div> </h2>           
          </div>
          <a name="liste">
          <?php require_once'../FournisseurView/formListeAppro.php';?>
        </div>
      </div>
 </section>
 <!-- Modal bootstrap-->
<div class="col-md-6 col-xs-12 col-md-offset-3">
  <div class="modal fade" id="formulaire">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color: red;">x</button>
          <h4 class="modal-title"><div class="glyphicon glyphicon-plus"></div><div class="glyphicon glyphicon-plus"></div> Ajouter</h4>
        </div>
        <div class="modal-body">
          <form action="../../Controleurs/FournisseurControleur/AjoutFournisseur.php" id="modalForm" method="post">
            <div class="form-group">

                 <label for="" class="control-label">CodeFournisseur:</label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" required="" name="codefrs" value="" class="form-control " placeholder="codefrs">
                    </div>

                    <label for="" class="control-label"> Nomfrs :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" required="" name="nomfrs" value="" class="form-control" placeholder="nomfrs">
                    </div>

                    <label for="" class="control-label">Adressefrs :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" required="" name="adressefrs" value="" class="form-control" placeholder="adressefrs">
                    </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success" style="margin-top: 10px;"><div class="glyphicon glyphicon-plus"></div> AJOUTER <span class="glyphicon glyphicon-send"></span></button>
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
<!--  -->
<!--  -->
<!--  -->
      <?php require_once'../../assets/include/footer.php'; ?>
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
              });
        </script>
        <script type="text/javascript">
       $("#modalForm").validate({
                  rules: {
                    codefrs : {
                      required : true;
                    },
                    nomfrs : {
                      required : true;
                    },
                    adressefrs : {
                        required :true;
                    }
          },
        });
     </script>
     </body>
</html>
