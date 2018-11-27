<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
		$this->load->model("site/modsite","site");	
	}
	public function index()
	{	
		$datas['profile'] = $this->site->getSiteprofile();
		$data['lists'] = $this->site->getPropertyLists();
		$this->load->view('site/contain/header',$datas);
        $this->load->view('site/index',$data);
        $this->load->view('site/contain/footer',$datas);
    }
    function detail($pid)
    {
    	$datas['profile'] = $this->site->getSiteprofile();
    	$data['detail'] = $this->site->getPropertyByID($pid);
		$data['image'] = $this->site->getImageByID($pid);
    	$this->load->view('site/contain/header',$datas);
        $this->load->view('site/detail',$data);
        $this->load->view('site/contain/footer',$datas);
    }
}
?>