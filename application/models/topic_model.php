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

    public function get($topic_id)
    {
        $this->db->select('id');
        $this->db->select('title');
        $this->db->select('description');
        $this->db->select('UNIX_TIMESTAMP(created) as created');

        return $this->db->get_where('topic', array('id'=>$topic_id))->row();
    }

    public function add($title, $description)
    {
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('topic', array(
            'title'=>$title,
            'description'=>$description
        ));
//        echo $this->db->last_query();
        return $this->db->insert_id();
    }
}