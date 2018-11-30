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
        $data['type'] = $this->site->getPropertyType();
        $data['location'] = $this->site->getPropertyLocation();
        $data['data'] = $this->site->getItemLocation();
		$this->load->view('site/contain/header',$datas);
        $this->load->view('site/index',$data);
        $this->load->view('site/contain/footer',$datas);
    }
    function detail($pid)
    {
    	$datas['profile'] = $this->site->getSiteprofile();
    	$data['detail'] = $this->site->getPropertyByID($pid);
		$data['image'] = $this->site->getImageByID($pid);
        $data['type'] = $this->site->getPropertyType();
        $data['location'] = $this->site->getPropertyLocation();
    	$this->load->view('site/contain/header',$datas);
        $this->load->view('site/detail',$data);
        $this->load->view('site/contain/footer',$datas);
    }
    function search()
    {
    	$datas['profile'] = $this->site->getSiteprofile();
        $data['type'] = $this->site->getPropertyType();
        $data['location'] = $this->site->getPropertyLocation();
        $data['data'] = $this->site->getItemLocation();

        $status = ''; $location = ''; $category = ''; $firstprice = ''; $lastprice = ''; $available = '';
        if(isset($_GET['status']))
            $status = $_GET['status'];
        if(isset($_GET['q']))
            $location = $_GET['q'];
        if(isset($_GET['categories']))
            $category = $_GET['categories'];
        if(isset($_GET['price__gte']))
            $firstprice = $_GET['price__gte'];
        if(isset($_GET['price__lte']))
            $lastprice = $_GET['price__lte'];
        if(isset($_GET['available']))
            $available = $_GET['available'];

        $data['result'] = $this->site->getResultSearch($status,$location,$category,$firstprice,$lastprice,$available);
		$this->load->view('site/contain/header',$datas);
        $this->load->view('site/search',$data);
        $this->load->view('site/contain/footer',$datas);
    }
    function getlocation()
    {
        $data = $this->site->getItemLocation();
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    // function test()
    // {
    //     $items  = $this->site->get_items();
    //     $menu   = $this->site->generateTree($items); 
    //     $data = array(
    //         $menu,
    //     );

    //     header('Content-Type: application/json');
    //     echo json_encode($menu);
    // }
}
?>