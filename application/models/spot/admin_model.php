<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

    private $table = "admin";

    function __construct()
    {
        parent::__construct();
    }

    function get_admin($where ="", $select ="")
    {
        if (is_array($where))
        {
            if ($select != "")  // Where clause & Select exist
            {
                $this->db->select($select); // what columns to select
                $query = $this->db->get_where($this->table, $where);
                return $query->result_array();
            }
            else                // Only WHERE clause exists, SELECT *
            {
                $query = $this->db->get_where($this->table, $where);
                return $query->result_array();
            }
        }
        else
        {
            if ($select != "")  // SELECT exists, no Where clause
            {
                $this->db->select($select); // what columns to select
                $query = $this->db->get($this->table);
                return $query->result_array();
            }
            else                // SELECT * FROM temp_users, no condition.
            {
                $query = $this->db->get($this->table);
                return $query->result_array();
            }
        }
    }


}
?>