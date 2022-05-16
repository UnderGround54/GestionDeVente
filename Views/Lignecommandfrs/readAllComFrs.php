<!DOCTYPE html>
<html>
<head>
<title>Gestion De Vente | COMMANDE</title>
</script>
</head>
<body>
<?php require_once'../../assets/include/Entete.php'; ?>
  <section id="mainContent" style="min-height: 507px;">
    <div class="content_middle">
      <div class="col-lg-12">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"><div class="glyphicon glyphicon-book"></div> COmmande Fournisseur</a> </h2>
				  <fieldset>
					<legend>LIGNES DES COMMANDES ET COMMANDES</legend>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="content_middle_leftbar">
              <div class="single_category wow fadeInDown">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">COMMANDE</div> </h2>
                <?php require_once'../Commandefrs/readAllcomFrs.php'; ?>
              </div>
            </div>
          </div>  
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="content_middle_rightbar">
              <div class="single_category wow fadeInDown">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <div href="" class="title_text">ligne de commande</div> </h2>
                <?php require_once'readAllLComFrs.php';?>              
              </div>
            </div>
          </div>
			  </fieldset>
      </div>
    </div>
  </div>
</div>
</section>
<?php require_once'../../assets/include/footer.php'; ?>
</body>
</html>
