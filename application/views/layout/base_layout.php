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
        
        <!-- AngularJS 
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script> -->
        <!-- JQuery -->
         <script src="//codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
         
       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/cosmo/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <style type="text/css">
            body {
                padding-top: 50px;
            }
        </style>
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
          <a class="navbar-brand" href="/" style="font-family: 'Cabin',Arial,sans-serif;">DLMonitor</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Médias
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">À voir</a></li>
                  <li><a href="#">Critiques</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Bibliothèque</li>
                  <li><a href="/newsbiblio">Tableau de bord</a></li>
                  <li><a href="/biblio">Contenus</a></li>
                </ul>
              </li>
            <li><a href="#config">Configuration</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <button type="submit" class="btn">Connexion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <?php echo $body ?>   
    <footer>
        <div class="container">
            <hr />
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2013 DLMonitor &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </div> <!-- /container -->
    </footer>
   
</body>
</html>