<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accueil_biblio_view
 *
 * @author Antoine 'Ballrock' Précigout
 */
?>
<!-- Carousel
    ================================================== -->
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8"><div id="myCarousel" class="carousel slide" style="background-color:#555555; height:550px; padding:10px; border:1px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <div class="container" style="text-align: center;">
              <img src="http://fr.web.img2.acsta.net/r_640_600/b_1_d6d6d6/pictures/210/240/21024000_20130801181356196.jpg" alt="First slide" class="img-thumbnail" style="height:530px;" />
              <div class="carousel-caption" style="background-color:rgba(0,0,0,0.5); border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px; padding-left: 20px; padding-right: 20px;">
                <h3>Thor : Le Monde des ténèbres</h3>
                <p>Ajouté le : 24/08/2013</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container" style="text-align: center;">
               <img src="http://fr.web.img4.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/85/31/58/20042068.jpg" alt="Second slide" class="img-thumbnail" style="height:530px;" />
              <div class="carousel-caption" style="background-color:rgba(0,0,0,0.5); border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px; padding-left: 20px; padding-right: 20px;">
                <h3>Avengers</h3>
                <p>Ajouté le : 24/08/2013</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container" style="text-align: center;">
              <img src="http://fr.web.img6.acsta.net/r_640_600/b_1_d6d6d6/medias/nmedia/18/91/08/37/20508296.jpg" alt="Third slide" class="img-thumbnail" style="height:530px;" />
              <div class="carousel-caption" style="background-color:rgba(0,0,0,0.5); border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px; padding-left: 20px; padding-right: 20px;">
                <h3>Iron Man 3</h3>
                <p>Ajouté le : 24/08/2013</p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
  </div>
  <div class="col-xs-6 col-sm-6 col-md-4">.col-xs-6 .col-sm-6 .col-md-4</div>
</div>
<script>
$(function (){
    $('.myCarousel').carousel({
    interval: 2000  
    });
});  
</script>

