<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

	public function __construct() 
    {
        parent::__construct();
    }
	
	function valid_user($username, $password)
	{
		$query = $this->db->get_where('usuarios', array('usuario'=>$username,'pass'=>$password), 1);

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}
}
/* End of file
*/ 
