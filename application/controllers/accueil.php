<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controlleur Accueil
 *
 * @author Antoine 'Ballrock' Précigout
 */
class Accueil extends CI_Controller {

	
	public function index()
	{
		$this->load->library('layout');
                $this->layout->afficher('accueil_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */