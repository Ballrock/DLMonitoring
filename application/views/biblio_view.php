<?php

/**
 * Description of biblio_view
 *
 * @author Antoine 'Ballrock' Précigout
 */

?>
<h1>Liste des médias</h1>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Statut</th>
            <th>Informations</th>
            <th style="width:2px;"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Kaamelott</td>
            <td>Série</td>
            <td><span class="label label-success">Visionné</span>&nbsp;<span class="label label-success">Stocké</span></td>
            <td><span class="label label-primary">Saison 4</span>&nbsp;<span class="label label-info">720p</span>&nbsp;<span class="label label-info">Complet</span></td>
            <td><span class="glyphicon glyphicon-eye-open">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit">&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Hero Corp</td>
            <td>Série</td>
            <td><span class="label label-success">Visionné</span>&nbsp;<span class="label label-warning">À télécharger</span></td>
            <td><span class="label label-primary">Saison 3</span>&nbsp;<span class="label label-info">1080p</span>&nbsp;<span class="label label-danger">Incomplet</span></td>
            <td><span class="glyphicon glyphicon-eye-open">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit">&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Avengers</td>
            <td>Film</td>
            <td><span class="label label-danger">À voir</span></td>
            <td></td>
            <td><span class="glyphicon glyphicon-eye-open">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit">&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        <tr>
            <td>4</td>
            <td>True Blood</td>
            <td>Série</td>
            <td><span class="label label-danger">À voir</span></td>
            <td><span class="label label-primary">Saison 5</span>&nbsp;<span class="label label-info">DVD-Rip</span>&nbsp;<span class="label label-info">Complet</span></td>
            <td><span class="glyphicon glyphicon-eye-open">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit">&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Matrix</td>
            <td>Film</td>
            <td><span class="label label-success">Visionné</span>&nbsp;<span class="label label-success">Stocké</span></td>
            <td><span class="label label-info">720p</span>&nbsp;<span class="label label-info">VOSTFR</span></td>
            <td><span class="glyphicon glyphicon-eye-open">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit">&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span></td>
        </tr>
    </tbody>
</table>
<div style="text-align: center;">
    <ul class="pagination pagination-sm">
        <li class="disabled"><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
    </ul>
</div>
<a class="btn btn-primary" href="#">Ajouter un média</a>

