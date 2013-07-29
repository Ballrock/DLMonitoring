<?php
require(APPPATH.'libraries/REST_Controller.php'); 

class Cinema extends REST_Controller {

    function toto_get()
    {   
        $this->load->database();
        // lance la fonction a avec les parametres 10 et AAAA
        $this->db->invoke_function("test", $this->get('id'), $this->get('type'));
        $this->load->model("Cinemamodel");
        //Insert
        $this->Cinemamodel->insert($this->get('id'), $this->get('type'));
    }
}

