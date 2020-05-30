<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends CI_Controller
{

    /**
     * Module constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function get($id)
    {
        echo $id;
    }
}
