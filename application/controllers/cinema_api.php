<?php
require(APPPATH.'libraries/REST_Controller.php'); 

class Cinema_API extends REST_Controller {

    // Recuperer les informations de l'entree dont l'identifant est donne en parametre
    function cinema_get()
    {   
        $id = $this->get('id');
        
        // l'identifiant est vide ?
        // On retourne une reponse vide
        if(empty($id)) {
            $this->response(array('erreur' => 'Entree invalide.'), 404);
        }
        
        //Retourne l'entree demande
        $this->load->database();
        $this->load->model("Cinemamodel");
        $reponse = $this->Cinemamodel->get($this->get('id'));
        if($reponse === false) {
            $this->response(array('erreur' => 'Entree non trouvee.'), 404);
        }
        else {
            $this->response($reponse, 200);
        }
    }
    
    function cinemas_get() {
        $this->load->database();
        $this->load->model("Cinemamodel");
        $this->response($this->Cinemamodel->get_all(), 200);
    }
    
    //Insere une entree
    function cinema_put() {
        $this->load->database();
        $this->remplir_cinema("put");
        $reponse = $this->Cinemamodel->insert();
        if($reponse === false) {
            $this->response(array('erreur' => 'Erreur rencontree lors de l\'insertion.'), 404);
        }
        else {
            $this->response($reponse, 200);
        }
    }
    
    function cinema_post() {
        $this->load->database();
        $this->remplir_cinema("post");
        if(empty($this->Cinemamodel->id)) {
            $this->response(array('erreur' => 'Entree incorrecte'), 404);
        } else {
            $reponse = $this->Cinemamodel->update();
            if($reponse === false) {
                $this->response(array('erreur' => 'Entree non trouvee.'), 404);
            }
            else {
                $this->response($reponse, 200);
            }
        }
    }
    
    function cinema_delete() {
        $id = $this->get('id');
        
        // l'identifiant est vide ?
        // On retourne une reponse vide
        if(empty($id)) {
            $this->response(array('erreur' => 'Entree invalide.'), 404);
        }
        
        $this->load->database();
        $this->load->model("Cinemamodel");
        $reponse = $this->Cinemamodel->delete($id);
        if($reponse === false) {
            $this->response(array('erreur' => 'Entree non trouvee.'), 404);
        }
        else {
            $this->response(array('message' => 'Suppression effectuee avec succes.'), 200);
        }
    }
    
    private function remplir_cinema($type){
        $this->load->model("Cinemamodel");
        
        $this->Cinemamodel->id = $this->get_single_value($type, 'id');
        $this->Cinemamodel->nom = $this->get_single_value($type, 'nom');
        $this->Cinemamodel->genre = $this->get_single_value($type, 'genre');
        $this->Cinemamodel->saison = $this->get_single_value($type, 'saison');
        $this->Cinemamodel->etat = $this->get_single_value($type, 'etat');
        $this->Cinemamodel->vu = $this->get_single_value($type, 'vu');
        $this->Cinemamodel->note = $this->get_single_value($type, 'note');
        $this->Cinemamodel->id_allocine= $this->get_single_value($type, 'id_allocine');
    }
    
    private function get_single_value($type, $cle) {
        $valeur = $this->$type($cle);
        return $valeur;
    }
    
    // allocine api exemple : http://api.allocine.fr/rest/v3/search?partner=YW5kcm9pZC12Mg&filter=movie,theater,person,news,tvseries&count=5&page=1&q=avatar&format=json
}

