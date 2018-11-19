<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'Contact';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/contact/main',$params);
    }

    public function sendSalesInfo(){
        $product = $_POST['message'];

        mail("gainesagregory@gmail.com", "Subject", $product);
    }

    public function sendSupportInfo(){
        $name = $_POST['name'];
        $location = $_POST['location'];
        $district = $_POST['district'];
        $email = $_POST['email'];
        $product = $_POST['product'];
        $problem = $_POST['message'];

        $full_message =
            'Name: ' . $name . PHP_EOL .
            'Location: ' . $location . PHP_EOL .
            'District: ' . $district . PHP_EOL .
            'Email: ' . $email . PHP_EOL .
            'Product: ' . $product . PHP_EOL .
            'Problem: ' . $problem . PHP_EOL;


        mail("gainesagregory@gmail.com", "Customer Support", $full_message);
        //mail("destiny.sage@gmail.com", "Customer Support", $full_message);

        /*$this->load->library('email');

        $this->email->from('mayhemg@yahoo.com', 'SilverBack');
        $this->email->to('gainesagregory@gmail.com');

        $this->email->subject('Customer Support');
        $this->email->message($full_message);

        $this->email->send();*/
    }
}
