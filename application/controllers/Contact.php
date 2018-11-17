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
        //$this->page['template'] = 'default_json.php';
        //$name = json_decode($this->input->post())
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

       // $message = $_POST[];
        //mail("gainesagregory@gmail.com", "Subject", "Message");
        /*$this->page['template'] = 'default_json.php';
        $form_values 	= json_decode($this->input->post('form_values',TRUE));
        $validate 		= FALSE;
        $message 			= 'Email and Password do not match';
        $redirect_url = '';

        if (!empty($form_values->mode)) {
            $client_id = $this->client_model->validate_login('admin',$form_values->email,$form_values->password);

            if (!empty($client_id)) {
                $this->session->set_userdata('admin_id', $client_id);
                $redirect_url = '/admin/general/?page=dashboard';
                $validate = TRUE;
                $message = '';
            }

        }

        $return['status'] 	= $validate;
        $return['url'] 			= $redirect_url;
        $return['message'] 	= $message;

        $this->load->view('elements_default/json', compact('return'));*/

    }
}
