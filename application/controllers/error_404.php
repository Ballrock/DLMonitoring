<?php
/**
 * Description of 404
 *
 * @author Antoine 'Ballrock' Précigout
 */

class error_404 extends CI_Controller {

	
	public function index()
	{
		$this->load->library('layout');
                $this->layout->afficher('layout/404_view.php');
	}
}
?>
