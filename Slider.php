<!DOCTYPE html>
<?php $title="Galerie";
$midle = '<div id="myCarousel" class="carousel slide vcenter" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item active">
    <img src="pictures/logo/logoblack.png" alt="Logo 1" class="imgCenter">
    <div class="carousel-caption">
    </div>
  </div>

  <div class="item">
    <img src="pictures/logo/logocaca.png" alt="Logo 2" class="imgCenter">
    <div class="carousel-caption">
    </div>
  </div>

  <div class="item">
    <img src="pictures/logo/logotoutbo.png" alt="Logo 3" class="imgCenter">
    <div class="carousel-caption">
    </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>';
require_once "template.php";
?>






