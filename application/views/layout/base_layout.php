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
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        
        <style type="text/css"></style>
</head>
<body>
    <!-- Barre de navigation -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">DLMonitor</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <?php echo $body ?>
</body>
</html>