<?php

/**
 * Description of biblio_view
 *
 * @author Antoine 'Ballrock' Précigout
 */

?>
<div class="container"> 
    <h1>Liste des médias</h1>
    <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-8"></div>
                                    <div class="col-xs-6 col-sm-6 col-md-4" style="vertical-align:center;"><input type="search" class="form-control" id="search" placeholder="Rechercher"></div>
                            </div><br />

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Statut</th>
                <th>Informations</th>
                <th style="width:80px;"></th>
            </tr>
        </thead>
        <tbody>
            <tr rel="popover" data-placement="bottom" onClick="" id="kaamelott">
                <td>1</td>
                    <td>Kaamelott</td>
                    <td>Série</td>
                    <td>
                    <span class="label label-success">Visionné</span>&nbsp;
                    <span class="label label-success">Possédé</span>
                </td>
                <td>
                    <span class="label label-primary">Saison 4</span>&nbsp;
                    <span class="label label-info">720p</span>&nbsp;
                    <span class="label label-info">Complet</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                                                <span class="glyphicon glyphicon-edit"></span>&nbsp;
                                                <span class="glyphicon glyphicon-remove"></span>
                </td>
            </tr>
            <tr rel="popover" data-placement="bottom" onClick="" id="herocorp">
                <td>2</td>
                <td>Hero Corp</td>
                <td>Série</td>
                <td>
                    <span class="label label-success">Visionné</span>&nbsp;
                    <span class="label label-warning">À télécharger</span>
                </td>
                <td>
                    <span class="label label-primary">Saison 3</span>&nbsp;
                    <span class="label label-info">1080p</span>&nbsp;
                    <span class="label label-danger">Incomplet</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                                                <span class="glyphicon glyphicon-edit"></span>&nbsp;
                                                <span class="glyphicon glyphicon-remove"></span>
                </td>
            </tr>
            <tr rel="popover" data-placement="bottom" onClick="" id="avengers">
                <td>3</td>
                <td>Avengers</td>
                <td>Film</td>
                <td>
                    <span class="label label-danger">À voir</span>
                </td>
                <td></td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;
                    <span class="glyphicon glyphicon-remove"></span>
                </td>
            </tr>
            <tr rel="popover" data-placement="bottom" onClick="" id="trueblood">
                <td>4</td>
                <td>True Blood</td>
                <td>Série</td>
                <td>
                    <span class="label label-danger">À voir</span>
                </td>
                <td>
                    <span class="label label-primary">Saison 5</span>&nbsp;
                    <span class="label label-info">DVD-Rip</span>&nbsp;
                    <span class="label label-info">Complet</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;
                    <span class="glyphicon glyphicon-remove"></span>
                </td>
            </tr>
            <tr rel="popover" data-placement="bottom" onClick="" id="matrix">
                <td>5</td>
                <td>Matrix</td>
                <td>Film</td>
                <td>
                    <span class="label label-success">Visionné</span>&nbsp;
                    <span class="label label-success">Possédé</span>
                </td>
                <td>
                    <span class="label label-info">720p</span>&nbsp;
                    <span class="label label-info">VOSTFR</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;
                    <span class="glyphicon glyphicon-remove"></span>
                </td>
            </tr>
            <tr rel="popover" data-placement="bottom" onClick="" id="ryse">
                <td>6</td>
                <td>Ryse : Son of Rome</td>
                <td>Jeux Vidéo</td>
                <td>
                    <span class="label label-danger">Pas fini</span>&nbsp;
                    <span class="label label-warning">Prété</span>
                </td>
                <td>
                    <span class="label label-success">Xbox One</span>&nbsp;
                    <span class="label label-primary">Action</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;
                    <span class="glyphicon glyphicon-remove"></span>
                </td>
            </tr>
            <tr rel="popover" data-placement="bottom" onClick="" id="finalfantasy">
                <td>7</td>
                <td>Final Fantasy XV</td>
                <td>Jeux Vidéo</td>
                <td>
                    <span class="label label-success">Fini</span>&nbsp;
                    <span class="label label-success">Possedé</span>
                </td>
                <td>
                    <span class="label label-primary">Playstation 4</span>&nbsp;
                    <span class="label label-primary">RPG</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                    <span class="glyphicon glyphicon-edit"></span>&nbsp;
                    <span class="glyphicon glyphicon-remove"></span>
                </td>
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
    <a data-toggle="modal" href="#newmedia" class="btn btn-primary">Ajouter un média</a>
    <div class="modal fade" id="newmedia">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Ajout de média</h4>
                </div>
                <div class="modal-body">
                  <p> 
                      <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="typemedia" class="col-xs-6 col-sm-6 col-md-4 control-label">Type de média</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                <select class="form-control">
                                  <option>Film</option>
                                  <option>Série</option>
                                  <option>Jeux Vidéo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mediatitle" class="col-xs-6 col-sm-6 col-md-4 control-label">Titre</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                              <div class="input-group">
                                <input type="text" class="form-control" id="mediatitle" placeholder="Titre du média">
                                <div class="input-group-btn">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Trouver <span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                  <li class="dropdown-header">Film / Séries</li>
                                  <li><a href="#">Allociné</a></li>
                                  <li><a href="#">IMDB</a></li>
                                  <li class="divider"></li>
                                  <li class="dropdown-header">Jeux vidéos</li>
                                  <li><a href="#">JV.com</a></li>
                                  <li><a href="#">jeuxvideo.fr</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mediatitle" class="col-xs-6 col-sm-6 col-md-4 control-label">Statut</label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                              <div class="input-group">
                                <select class="form-control">
                                  <option>Visionné</option>
                                  <option>Possédé</option>
                                  <option>Pas fini</option>
                                  <option>À voir</option>
                                  <option>À télécharger</option>
                                  <option>Prété</option>
                                </select>
                                <div class="input-group-btn">
                                <button type="button" class="btn btn-primary">Ajouter</button>
                              </div><!-- /btn-group -->
                             </div><!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mediatitle" class="col-xs-6 col-sm-6 col-md-4 control-label"></label>
                            <div class="col-xs-12 col-sm-6 col-md-8">
                                  <h4>
                                       <span class="label label-danger">Pas fini <span class="glyphicon glyphicon-remove"></span></span>&nbsp;
                                <span class="label label-warning">Prété <span class="glyphicon glyphicon-remove"></span></span></h4>
                            </div>
                         </div>
                      </form>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <button type="button" class="btn btn-primary">Sauvegarder</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script language="javascript">
        $(function (){
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#kaamelott").popover({title:"Kaamelott", content: img, html:true, trigger: "hover" });    
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#herocorp").popover({title:"Hero Corp", content: img, html:true, trigger: "hover" });
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#avengers").popover({title:"Avengers", content: img, html:true, trigger: "hover" });    
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#trueblood").popover({title:"True Blood", content: img, html:true, trigger: "hover" });
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#matrix").popover({title:"Matrix", content: img, html:true, trigger: "hover" });
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#ryse").popover({title:"Ryse : Son of Rome", content: img, html:true, trigger: "hover" });       
            var img = '<img src="img/herocorp.jpg" alt="" class="img-thumbnail" />';
            $("#finalfantasy").popover({title:"Final Fantasy XV", content: img, html:true, trigger: "hover" });       
        });
    </script>
</div>
