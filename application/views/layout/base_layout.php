<?php

/**
 * Layout de base
 *
 * @author Antoine 'Ballrock' Précigout
 */

?>
<!DOCTYPE html>
<html lang="fr" ng-app>
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
        <!--
        <script src="/views/js/angular.min.js"></script>
        <script src="/views/js/bootstrap.min.js"></script>
        <link href="/views/css/bootstrap-combined.min.css" rel="stylesheet">
        -->
        
        <!-- AngularJS -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/amelia/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>

        <!-- Latest Glyphicons minified CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css" rel="stylesheet">
        <style type="text/css"></style>
</head>
<body>
    <!-- Barre de navigation -->
    <div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="font-family: 'Cabin',Arial,sans-serif;">DLMonitor</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#biblio">Bibliothéque</a></li>
            <li><a href="#config">Configuration</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <button type="submit" class="btn">Connexion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="container" style="margin-top: 80px;">     
        <?php echo $body ?>   
    </div> <!-- /container -->
    <div class="container">
        <hr>
        <footer>
            <p>2013 - DLMonitor.</p>
        </footer>
    </div> <!-- /container -->
</body>
</html>