<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class StoreModel extends CI_Model{
	
        public function __construct()
        {
            parent::__construct();
        }

        /*
	public function getMessageFields()
	{
		$this->db->select("first_name,last_name,email,phone,message,date,rd,reply");
                $this->db->order_by("date","desc");
		$query = $this->db->get('visitor_message');
		return $query;
	}
        */
	

}

?>

