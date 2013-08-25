<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controlleur Biblio
 *
 * @author Antoine 'Ballrock' Précigout
 */
class NewsBiblio extends CI_Controller {

	
	public function index()
	{
		$this->load->library('layout');
                $this->layout->afficher('news_biblio_view');
	}
}

