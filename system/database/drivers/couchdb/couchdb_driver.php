<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * MySQL Database Adapter Class
 *
 * Note: _DB is an extender class that the app controller
 * creates dynamically based on whether the active record
 * class is being used or not.
 *
 * @package		CodeIgniter
 * @subpackage	Drivers
 * @category	Database
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_couchdb_driver extends CI_DB {

	var $dbdriver = 'couchdb';

	// --------------------------------------------------------------------

	/**
	 * Persistent database connection
	 *
	 * @access	private called by the base class
	 * @return	resource
	 */
	function db_pconnect()
	{
            return new couchClient('http://'.$this->hostname.':'.$this->port.'/',$this->database);
	}
        
	// --------------------------------------------------------------------
	/**
	 * Select the database
	 *
	 * @access	private called by the base class
	 * @return	resource
	 */
	function db_select()
	{
            return true;
	}// --------------------------------------------------------------------

	/**
	 * Set client character set
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	resource
	 */
	function db_set_charset($charset, $collation)
	{
            return true;
	}
        
        /**
         * 
         * @return l'ensemble des documents de la bdd
         */
        function get_all(){
            return $this->conn_id->include_docs(true)->getAlldocs();
        }
        
        /**
         * @param $datas contient l'id du document a retourner
         * @return le document s'il existe, false sinon
         */
        function get($datas){
            try {
                $doc = $this->conn_id->getDoc($datas[0]);
                return $doc;
            } catch ( Exception $e ) {
                log_message("error", $e);
                return false;
            }
        }
       
	/**
	 * Close DB Connection
	 *
	 * @access	public
	 * @param	resource
	 * @return	void
	 */
	function _close($conn_id)
	{
            $conn_id = null;
	}
        
        /**
         * Mise à jour des donnees
         * @param $datas les donnees a inserer en bdd
         * @return boolean true si la mise a jour
         * a ete effectue avec succes, false sinon
         */
        function update($datas) {
            $doc = $this->get(array($datas[0]->id));
            if ($doc === false) {
                return false;
            }
            foreach($datas[0] as $cle => $valeur) {
                if( $cle !== 'id') {
                    $doc->$cle = empty($valeur) ? null : $valeur;
                }
            }
            try {
                $this->conn_id->storeDoc($doc);
            } catch (Exception $e) {
                log_message("error", $e);
                return false;
            }
            return $doc;
        }
        
        /**
         * Insertion des donnees
         * @param $datas les donnees a inserer en bdd
         * @return boolean true si l'a mise a jour l'insertion
         * a ete effectue avec succes, false sinon
         */
        function insert($datas) {
            $doc = new couchDocument($this->conn_id);
            foreach($datas[0] as $cle => $valeur) {
                if( $cle !== 'id') {
                    $doc->$cle = empty($valeur) ? null : $valeur;
                }
            }
            return $doc;
        }
        
        /**
         * @param $datas contient l'id du document a retourner
         * @return true si la suppression réussit, false sinon
         */
        function delete($datas){
            try {
                $doc = $this->conn_id->getDoc($datas[0]);
                print_r($doc);
                if($doc === false){
                    return false;
                }
                $this->conn_id->deleteDoc($doc);
                return true;
            } catch ( Exception $e ) {
                log_message("error", $e);
                return false;
            }
        }
}


/* End of file couchdb_driver.php */
/* Location: ./system/database/drivers/couchdb/couchdb_driver.php */