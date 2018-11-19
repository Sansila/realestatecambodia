<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PropertyLocation extends CI_Controller {
	
	protected $thead;
	protected $idfield;
	protected $searchrow;	
	function __construct(){
		parent::__construct();
		//$this->lang->load('stock', 'english');
		$this->load->model("modproduct","pro");			
		$this->thead=array("No"=>'no',
							"Images"=>'image',
							 "Product Name"=>'name',
							 "Visibled"=>'visibled',
							 "Action"=>'Action'							 	
							);
		$this->idfield="categoryid";
		
	}
	
	function index()
	{
		echo "add new property location";
    }
    function add()
    {
		$data['page_header']="New Property";			
		$this->parser->parse('greenadmin/header', $data);
		$this->parser->parse('property/propertylocation/form_add',$data);
		$this->parser->parse('greenadmin/footer', $data);
    }
	
}