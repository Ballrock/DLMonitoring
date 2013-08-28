<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author Nebulis
 */
class Cinemamodel extends CI_Model {

    public $id;
    public $nom;
    public $genre;
    public $saison;
    public $etat;
    public $vu; //boolean
    public $note;
    public $id_allocine;
    
    function __construct()
    {
        parent::__construct();
    }
    
    function get($id) {
        $doc = $this->db->invoke_function("get", $id);
        if($doc === false){
            return false;
        }
        else {
            return $this->get_cinema_from_row($doc);
        }
    }
    
    function get_all() {
        $all_docs = $this->db->invoke_function("get_all");
        $cinemas = array();
        foreach ($all_docs->rows as $row ) {
            $cinema = $this->get_cinema_from_row($row->doc);
            array_push($cinemas, $cinema);
        }
        return $cinemas;
    }
    
    function insert(){
        $doc = $this->db->invoke_function("insert", $this);
        if($doc === false){
            return false;
        }
        else {
            return $this->get_cinema_from_row($doc);
        }
    }
    
    function update(){
        $doc = $this->db->invoke_function("update", $this);
        if($doc === false){
            return false;
        }
        else {
            return $this->get_cinema_from_row($doc);
        }
    }
    
    function delete($id) {
        return $this->db->invoke_function("delete", $id);
    }
    
    private function get_cinema_from_row($row){
        $cinema = new Cinemamodel();
        if($row == null) {
            return $cinema;
        }
        $cinema->id = isset($row->_id) ? $row->_id : null;
        isset($row->nom) ? $cinema->nom = $row->nom : $cinema->nom = null;
        isset($row->genre) ? $cinema->genre = $row->genre : $cinema->genre = null;
        isset($row->saison) ? $cinema->saison = $row->saison : $cinema->saison = null;
        isset($row->etat) ? $cinema->etat = $row->etat : $cinema->etat = null;
        isset($row->vu) ? $cinema->vu = $row->vu : $cinema->vu = null;
        isset($row->note) ? $cinema->note = $row->note : $cinema->note = null;
        isset($row->id_allocine) ? $cinema->id_allocine = $row->id_allocine : $cinema->id_allocine = null;
        return $cinema;
    }
}

?>
