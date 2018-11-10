<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_Vitae extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'Teacher Vitae';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/teacher_vitae/main',$params);

    }
}
