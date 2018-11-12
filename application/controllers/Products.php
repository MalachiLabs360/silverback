<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends ME_Controller {

	function __construct()
  {
    parent::__construct();
    $this->page['template']	= 'default_html.php';
  }

	public function index()
	{
		$params = array();
		$this->load->view('pages/products/main',$params);
	 }

	public function mileposts()
 	{
 		$params = array();
 		$this->load->view('pages/products/mileposts/main',$params);
 	 }
	 
	 public function edifyassess()
	 {
			 $params = array();
			 $this->load->view('pages/products/edifyassess/main',$params);

	 }
	 
	 public function teachervitae()
	 {
			 $params = array();
			 $this->load->view('pages/products/teachervitae/main',$params);

	 }
}
