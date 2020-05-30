<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topic extends CI_Controller
{
    /**
     * Topic constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('topic_model');
    }

    function index()
    {
        $topics = $this->topic_model->gets();
        $this->load->view('head');
        $this->load->view('topic_list', array('topics' => $topics));
        $this->load->view('main');
        $this->load->view('footer');
    }

    function get($id)
    {
        $topics = $this->topic_model->gets();
        $this->load->view('head');
        $this->load->view('topic_list', array('topics' => $topics));
        $topic = $this->topic_model->get($id);
        $this->load->view('get', array('topic' => $topic));
        $this->load->view('footer');
    }
}
