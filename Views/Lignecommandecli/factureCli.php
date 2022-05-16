<?php
  require_once'../../Controleurs/ClientControleur/ctrlListClient.php';
  $TOTAL = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>liste  des produit approvisionne </title>
  <script type="text/javascript" src="../../assets/js/nombre_en_lettre.js" ></script>
</head>
<body>
  <?php if (empty($codeclis)): ?>
  <div class="col-lg-12 col-xs-12 col-md-12">
    <div class="panel panel-info">
      NOM CLIENT :
      <div class="panel-body">
        <table class="table table-striped" border="1">
          <thead>
            <tr>
              <th>DESIGNATION</th><th>PU</th><th>QUANTITE</th><th>MONTANT</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
      <?php else: ?>
        <?php if($codeclis===false): ?>
          <p>
            erreur*
          </p>
        <?php else: ?>
        <center>
          <div class="col-lg-12 col-xs-12 col-md-12">
            <div class="panel panel-info">
              <div style="text-transform: uppercase;">
              <?php foreach ($codeclis as $cli): ?>
               
                <?php endforeach; ?>
                CLIENT NUMERO : <?= $cli['codeCli']?> <br>
                NOM : 
                <?= $cli['nomCli']?>
              </div>
              <br>
                <div class="panel-body">
                    <table class="table table-striped" border="1">
                      <thead>
                        <tr>
                          <th>DESIGNATION</th><th>PU</th><th>QUANTITE</th><th>MONTANT</th>
                        </tr>
                      </thead>
                        <tbody name="tbody">
                            <?php foreach ($codeclis as $cli): ?>
                              <tr>
                                <td><?= $cli['design']?></td>
                                <td><?= $cli['pu'] ?></td>
                                <td><?= $cli['QteCom']?> </td>
                                <td><?= $cli['QteCom']*$cli['pu']?> </td>                         
                              </tr>
                            <?php endforeach; ?>
                              <tr>
                                <td></td>
                                <td></td>
                                <td>TOTAL</td>
                                <?php foreach ($codeclis as $cli): ?><?php $TOTAL+=$cli['QteCom']*$cli['pu']?><?php endforeach; ?>
                                <td id="total"><?= $TOTAL ?></td>                         
                              </tr>
                            
                        </tbody>
                    </table><br>
                    <br>
                    <br>
                    <div id="result"></div>
                    <p>
                      <script type="text/javascript">
                        var a1 =  document.getElementById('total');
                         var x =a1.innerText;
                        document.getElementById('result').innerText ="ARRETEE LA PRESENTE FACTURE A LA SOMME DE : " + NumberToLetter(x).toUpperCase()+" FMG";
                      </script>  
                    </p>      
              </div>
            </div>
          </div>
        </center>
        <?php endif; ?>
      <?php endif; ?>
</body>
</html>
