<?php
require_once "functions.php";
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<!doctype html>
<html>

<?php require_once "headIncludes.php"; ?>

<body>
    <div class="container">
        <h1> Présentation </h1>

    
 <div id="Carousel" class="carousel slide" "col-md-4" data-ride="carousel">

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
      <img src="../images/capture1.png" alt="Musique binaurale" class="img-responsive">
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

<!-->
  <div class="col-md-4">
    <div class="thumbnail">
        <a href="../images/menu.png">
        <img src="../images/menu.png" alt="Menu" style="width:50%" class="img-responsive">
        <div class="caption">
          <p>Menu de l'application</p>
        </div>
        </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
    <a href="../images/capture1.png">
        <img src="../images/capture1.png" alt="Musique binaurale" style="width:50%" class="img-responsive">
        <div class="caption">
          <p>Lancement d'une musique binaural</p>
        </div>
        </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
    <a href="../images/capture2.png">
        <img src="../images/capture2.png" alt="Choix de musiques" style="width:50%" class="img-responsive">
        <div class="caption">
          <p>Choix de musiques</p>
        </div>
        </a>
    </div>
  </div>
</div>
<!-->

L'application PHV est conçue pour organiser votre musique en fonction de ses effets sur votre état.
Elle vous permet d'évaluer votre état émotionnel tout en écoutant les morceaux de musique de votre smartphone, et réorganise ensuite des listes de lecture basées sur les émotions que la musique génère.


        <?php require_once "footer.php"; ?>
    </div>

    <?php require_once "scripts.php"; ?>
</body>

</html>

