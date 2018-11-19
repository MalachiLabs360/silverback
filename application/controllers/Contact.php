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
        $name = $_POST['name'];
        $district = $_POST['district'];
        $email = $_POST['email'];
        $position = $_POST['position'];
        $number = $_POST['number'];
        $referral = $_POST['referral'];
        $help = $_POST['help'];
        $products = $_POST['products'];

        $full_message =
            'Name: ' . $name . PHP_EOL .
            'District: ' . $district . PHP_EOL .
            'Email: ' . $email . PHP_EOL .
            'Position: ' . $position . PHP_EOL .
            'Number: ' . $number . PHP_EOL .
            'Referral: ' . $referral . PHP_EOL .
            'Help: ' . $help . PHP_EOL .
            'Products : ' . $products . PHP_EOL;

        mail("gainesagregory@gmail.com", "Sales Info", $full_message);
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
