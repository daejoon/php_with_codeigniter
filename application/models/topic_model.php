<?php

class Topic_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function gets()
    {
        return $this->db->query('SELECT * FROM topic')->result();
    }
}