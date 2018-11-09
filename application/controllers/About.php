<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'About';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/about/main',$params);

    }
    
    public function our_story()
    {
        $params = array();
        $this->load->view('pages/about/our_story/main',$params);

    }
}
