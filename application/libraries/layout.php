<!--
 * Bibliothèque de gestion des layouts
 *
 * @author Antoine 'Ballrock' Précigout
 */
-->
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
    private $CI;
    private $content = array();
     
/*
|===============================================================================
| Constructeur
|===============================================================================
*/
     
    public function __construct()
    {
        $this->CI = get_instance();
        $this->content['body'] = '';
        $this->content['title'] = 'DLMonitor';
    }
     
/*
|===============================================================================
| Méthodes pour charger les vues
|   . view
|   . views
|===============================================================================
*/
     
    public function afficher($name, $data = array())
    {
        $this->content['body'] .= $this->CI->load->view($name, $data, true);
         
        $this->CI->load->view('../views/layout/base_layout.php', $this->content);
    }
    
}
 
/* End of file layout.php */
/* Location: ./application/libraries/layout.php */
?>
