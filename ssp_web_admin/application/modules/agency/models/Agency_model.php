<?php  defined('BASEPATH') OR exit('No direct script access allowed');


class Agency_model extends CI_Model{
    
    function __construct() 
    {
        parent::__construct();
		$this->load->database();
    }
	


       
	
	
	function check_login($username,$password)
	{
		$this->db->select('*');		
		$this->db->where("username",$username);				
        $this->db->from('jp_users');        
        $query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->row_array();
		}else{return false;}
	}
	
	function check_username($username)
	{
		$this->db->select('id');	
		$this->db->where('username',$username);			
		$query 	=	$this->db->get('jp_users');
		if($query->num_rows() > 0)
		{
			return 1;
		}
		else
		{
			return 0;
		}	
	}
	
	function insert_signup($params)
	{
		    $reg_data['password']	=   $params['password'];
			$reg_data['username']	=   $params['username'];            
            $reg_data['name']		=   $params['name'];						
			 
		       if($this->db->insert('jp_users',$reg_data))
		       {
                  return true;  				  
               }else{return false;}
	}
	
	
	
	
}

