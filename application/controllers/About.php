<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'About Silverback Learning';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/about/main',$params);

    }
    
    public function our_story()
    {
        $this->page['title'] = 'Our Story';
        $this->page['description'] = 'A passionate teacher user group of thousands providing continuous collaboration and feedback in the tireless pursuit to make Silverback Learning better.';
        $this->page['section_url'] = '/about';
        $this->page['section_name'] = 'About Us';
        $params = array();
        $this->load->view('pages/about/our_story/main',$params);

    }
}
