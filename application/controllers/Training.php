<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'Training';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/training/main',$params);
    }

    public function sendTrainingInfo() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $title = $_POST['position'];
        $district = $_POST['district'];
        $number = $_POST['number'];
        $message = $_POST['message'];

        $full_message =
            'Name: ' . $name . PHP_EOL .
            'Email: ' . $email . PHP_EOL .
            'Title: ' . $title . PHP_EOL .
            'District: ' . $district . PHP_EOL .
            'Number: ' . $number . PHP_EOL .
            'Message: ' . $message . PHP_EOL;

        mail("info@hamulti.com", "Training", $full_message);
    }
}
