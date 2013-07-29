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

    function __construct()
    {
        parent::__construct();
    }
    
    function insert($id, $type){
        $doc = new couchDocument($this->db->conn_id);
        $doc->id1=$id;
        $doc->type=$type;
    }
}

?>
