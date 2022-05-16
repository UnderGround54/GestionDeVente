<?php
  require_once'../../Controleurs/ProduitControleur/readAllproduitControleur.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      liste des Produits
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body style="min-width: 560px;">
  <?php require_once'../../assets/include/Entete.php'; ?>
<!--  -->
<!--  -->
<!--  -->
<section id="mainContent">
  <div class="content_middle">
    <div class="col-lg-12">
      <div class="content_bottom_middle">
        <div class="single_category wow fadeInDown">
              <h2>
                <span class="bold_line"><span></span>
                </span>
                <span class="solid_line">
                </span> <a class="title_text" href="#"><div class="glyphicon glyphicon-tree-deciduous"></div> PRODUITS</a>
              </h2>
          <div class="well">
          <fieldset >
              <!-- liste -->
            <legend>LISTE DES PRODUITS</legend>
            <!-- AJOUT PRODUITS -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="content_middle_leftbar">
                  <div class="single_category wow fadeInDown">
                    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">ajouter un produit</div> </h2>
                    <div id="html">
                      <button data-toggle="modal" data-backdrop="false" href="#formulaire" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-plus"></div> Ajouter</button>
                     </div>

                     <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">Etat de stock</div> </h2>
                    <div>
                      <a href="readAllPro.php#stock"><button href="" class="btn btn-primary btn-lg btn-block"><div class="glyphicon glyphicon-hand-down"></div> Voir</button></a>
                     </div>

                  </div>
                </div>
              </div>
              <!--  -->
           <!--  -->
        <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="content_middle_middle ">
          <div class="slick_slider2">
            <div class="single_featured_slide"> <img src="../../assets/images/face_au_risque_de_vente_du_riz_819712879_marche2-696x392.jpg" alt="">
            </div>
            <div class="single_featured_slide"> <img src="../../assets/images/20181019102838.jpg" alt="">
            </div>
            <div class="single_featured_slide"><img src="../../assets/images/image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <!-- RECHERCHE BEGIN -->
      <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top: 30px;">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2>
              <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">recherche</div>
            </h2>
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
                            <option value="codepro">
                              codepro
                            </option>
                            <option class="form-control" value="design">
                              design
                            </option>
                            <option value="pu">
                              pu
                            </option>
                        </select>
                      <div class="input-group">
                      <div id="resultats">
                          <input type="text" name="resultats" id="resultats" placeholder="recherche . . . " class="form-control input-lg">
                      </div>
                      <div id="design">
                          <input type="text" name="design" id="design" placeholder="design . . ." class="form-control input-lg">
                      </div>
                      <div id="codepro">
                          <input type="text" name="codepro" id="codepro" placeholder="codepro . . ." class="form-control input-lg">
                      </div>
                      <div id="pu">
                          <input type="text" name="pu" id="pu" placeholder="pu . . ." class="form-control input-lg">
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
      <?php if (empty($produits)): ?>
      <div class="col-lg-12 col-md-12 col-sm-12"> 
        <div class="single_category wow fadeInDown"> 
              <div class="panel-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        <div class="glyphicon glyphicon-tree-deciduous"></div> CODEPRO
                      </th>
                      <th>
                        <div class="glyphicon glyphicon-book"></div> DESIGNATION
                      </th>
                      <th><div class="glyphicon glyphicon-usd"></div> PU
                        </th>
                      <th><div class="glyphicon glyphicon-stats"></div> STOCK
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
              <?php if($produits===false): ?>
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
                                  <th><div class="glyphicon glyphicon-tree-deciduous"></div> CODE PRODUIT</th>
                                  <th><div class="glyphicon glyphicon-book"></div> DESIGNATION</th>
                                  <th><div class="glyphicon glyphicon-usd"></div> PU</th><th><div class="glyphicon glyphicon-stats"></div> STOCK</th><th><div class="glyphicon glyphicon-cog fa-spin"></div> MODIFICATION</th><th><div class="glyphicon glyphicon-cog fa-spin"></div> SUPPRESSION</th>
                                </tr>
                              </thead>
                          <tbody>
                            <?php foreach ($produits as $produit): ?>
                            <tr>
                                    <td><?= $produit->getCodePro() ?></td>
                                    <td><?= $produit->getDesign() ?></td>
                                    <td><?= $produit->getPu() ?> FMG</td>
                                    <td><?= $produit->getStock()?> KG</td>
                                    <td><a href="formUpdatePro.php?codepro=<?=$produit->getCodePro() ?>"><span class="glyphicon glyphicon-edit"></span> Modifier </a></td>
                                    <td>
                                    <a href="../../Controleurs/ProduitControleur/deleteProduit.php?codepro=<?=$produit->getCodePro() ?>"><span class="glyphicon glyphicon-trash"></span> supprimer </a></td>
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

   <div class="col-lg-6">
        <div class="content_middle_leftbar">
          <div class="single_category wow fadeInDown">
          <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">etat de stock</div> </h2>
          </div>
          <a href="#" name="stock">
          <?php require_once'Etat_Stock.php'; ?>
          </a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
          <img src="../../assets/images/vente.jpg" alt="" width="100%" height="100%">
        </div>
    </div>

</section>
 <!-- Modal bootstrap-->
<div class="col-md-6 col-xs-6 col-md-offset-6">
  <div class="modal fade" id="formulaire">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color: red;">x</button>
          <h4 class="modal-title"><div class="glyphicon glyphicon-plus"></div> Ajouter</h4>
        </div>
        <div class="modal-body">
          <form action="../../Controleurs/ProduitControleur/ajoutProduit.php" id="modalForm" method="post">
            <div class="form-group">
                 <label for="" class="control-label">Code Produit :</label>
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tree-deciduous"></i></span>
                        <input type="text" required="" name="codepro" value="" class="form-control " placeholder="codepro">
                    </div>

                    <label for="" class="control-label"> Designation :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                        <input required="" type="text" name="design" value="" class="form-control" placeholder="design">
                    </div>

                    <label for="" class="control-label">Pu :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                        <input required="" type="text" name="pu" value="" class="form-control" placeholder="pu">
                    </div>
                    <label for="" class="control-label">stock :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                        <input required="" type="text" name="stock" value="" class="form-control" placeholder="stock en KG">
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
                $('#design').hide();
                $('#codepro').hide();
                $('#pu').hide();
                $(document).on('change','.sel',function(){
                    var val = $('.sel').val();
                    if(val=='tous'){
                        $('#resultats').show();
                        $('#design').hide();
                        $('#codepro').hide();
                        $('#pu').hide();

                    }
                    else if(val=='design'){
                        $('#resultats').hide();
                        $('#design').show();
                        $('#codepro').hide();
                        $('#pu').hide();

                    }
                    else if(val=='codepro'){
                        $('#resultats').hide();
                        $('#design').hide();
                        $('#codepro').show();
                        $('#pu').hide();


                    }
                    else if(val=='pu'){
                      $('#resultats').hide();
                        $('#design').hide();
                        $('#codepro').hide();
                        $('#pu').show();
                    }
            });
      });

    </script>
    <script type="text/javascript">
       $("#modalForm").validate({
                  rules: {
                    codepro : {
                      required : true;
                    },
                    design : {
                      required : true;
                    },
                    pu : {
                        required :true;
                    }
                    stock : {
                        required :true;
                    }
          },
        });
     </script>
  </body>
</html>
