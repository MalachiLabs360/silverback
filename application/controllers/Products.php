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
		$this->page['title']	= 'Silverback Mileposts';
 		$params = array();
 		$this->load->view('pages/products/mileposts/main',$params);
 	}
	 
	 public function edifyassess()
	 {
		$this->page['title']	= 'EdifyAssess';
		$params = array();
		$this->load->view('pages/products/edifyassess/main',$params);
	 }
	 
	 public function teachervitae()
	 {
		$this->page['title']	= 'Teacher Vitae';
		$params = array();
		$this->load->view('pages/products/teachervitae/main',$params);
	 }
}
