<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mileposts extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'Mileposts';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/mileposts/main',$params);

    }
}
