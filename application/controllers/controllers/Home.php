<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title'] = 'Home';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/home/main',$params);
    }

}
