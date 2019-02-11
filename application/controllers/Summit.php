<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summit extends ME_Controller {

    function __construct()
    {
        parent::__construct();
        $this->page['template']	= 'default_html.php';
        $this->page['title']	= 'Summit 2019 - Silverback Learning';
    }

    public function index()
    {
        $params = array();
        $this->load->view('pages/summit/main',$params);
    }

    public function sendSummitInfo() {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $presenter1FirstName = $_POST['presenter1FirstName'];
        $presenter1LastName = $_POST['presenter1LastName'];
        $presenter1Title = $_POST['presenter1Title'];
        $presenter1SchoolDiscrict = $_POST['presenter1SchoolDistrict'];
        $presenter1Email = $_POST['presenter11Email'];
        $presenter1Phone = $_POST['presenter1Phone'];
        $presenter2FirstName = $_POST['presenter2FirstName'];
        $presenter2LastName = $_POST['presenter2LastName'];
        $presenter2Title = $_POST['presenter2Title'];
        $presenter2Email = $_POST['presenter2Email'];
        $presenter2Phone = $_POST['presenter2Phone'];
        $recordAgree = $_POST['recordAgree'];
        $sendCopy = $_POST['sendCopy'];

        if ($sendCopy == "") {
            $sendCopy = "no";
        }

        $full_message =
            'Title: ' . $title . PHP_EOL .
            'Description: ' . $description . PHP_EOL .
            'Presenter 1 First Name: ' . $presenter1FirstName . PHP_EOL .
            'Presenter 1 Last Name: ' . $presenter1LastName . PHP_EOL .
            'Presenter 1 Title: ' . $presenter1Title . PHP_EOL .
            'Presenter 1 School District: ' . $presenter1SchoolDiscrict . PHP_EOL .
            'Presenter 1 Email: ' . $presenter1Email . PHP_EOL .
            'Presenter 1 Phone: ' . $presenter1Phone . PHP_EOL .
            'Presenter 2 First Name: ' . $presenter2FirstName . PHP_EOL .
            'Presenter 2 Last Name: ' . $presenter2LastName . PHP_EOL .
            'Presenter 2 Title: ' . $presenter2Title . PHP_EOL .
            'Presenter 2 Email: ' . $presenter2Email . PHP_EOL .
            'Presenter 2 Phone: ' . $presenter2Phone . PHP_EOL .
            'Agree To Record: ' . $recordAgree . PHP_EOL .
            'Send Copy Of Responses: ' . $sendCopy . PHP_EOL;

        mail("info@hamulti.com", "Summit", $full_message);
        //mail("gainesagregory@gmail.com", "Summit", $full_message);
    }
}
