<?php
require_once "functions.php";
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<!doctype html>
<html>

<?php require_once "headIncludes.php"; ?>

<body>

<?php require_once "headerIncludes.php"; ?>
  <div class="container">
    <h1> Présentation </h1>

    <div class="col-md-4">
      <div id="Carousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#Carousel" data-slide-to="0" class="active"></li>
          <li data-target="#Carousel" data-slide-to="1"></li>
          <li data-target="#Carousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
          <div class="item active">
            <img src="../images/menu.png" alt="Menu" class="img-responsive">
            <div class="carousel-caption">
              <h3>Menu</h3>
          </div>

            <div class="item">
              <img src="../images/capture1.png" alt="Musique binaurale" class="img-responsive ">
              <div class="carousel-caption">
                <h3>Lancement d'une musique binaurale</h3>
              </div>

              <div class="item">
                <img src="../images/capture2.png" alt="Choix de musique" class="img-responsive">
                <div class="carousel-caption">
                  <h3>Choix de musiques</h3>
                </div>
              </div>


            <a class="left carousel-control" href="#Carousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Précédent</span>
            </a>
            <a class="right carousel-control" href="#Carousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Suivant</span>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
    </div>
    <div class="col-md-12">
    L'application PHV est conçue pour organiser votre musique en fonction de ses effets sur votre état.
    Elle vous permet d'évaluer votre état émotionnel tout en écoutant les morceaux de musique de votre smartphone, et réorganise ensuite des listes de lecture basées sur les émotions que la musique génère.
    </div>

    
  </div>
  <?php require_once "footer.php"; ?>
  <?php require_once "scripts.php"; ?>
</body>

</html>

