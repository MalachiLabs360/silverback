<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EdifyAssess extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'EdifyAssess';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/edifyassess/main',$params);

    }
}
