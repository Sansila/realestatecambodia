<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{	
        $this->load->view('site/index');
    }
}
?>