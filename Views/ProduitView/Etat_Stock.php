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
  </head>
  <body>
  <?php if (empty($produits)): ?>
      <div class="panel-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>codepro</th><th>design</th><th>Pu</th><th>Stock</th><th>MODIFICATION</th><th>SUPPRESSION</th>
            </tr>
          </thead>
        </table>
      </div>
      <?php else: ?>
        <?php if($produits===false): ?>
          <p>
            erreur
          </p>
        <?php else: ?>
            <div class="panel panel-info">
                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>DESIGNATION</th><th>STOCK</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($produits as $produit): ?>
                              <tr>
                                <td><?= $produit->getDesign() ?></td>
                                <td><?= $produit->getStock() ?></td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
              </div>
            </div>      
          <?php endif; ?>
      <?php endif; ?>
   </body>
 </html>
