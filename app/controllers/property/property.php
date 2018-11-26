<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {
	
	protected $thead;
	protected $idfield;
	protected $searchrow;	
	function __construct(){
		parent::__construct();
		//$this->lang->load('stock', 'english');
		$this->load->model("property/modproperty","pro");			
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
		echo "add new property";
    }
    function add()
    {
		$data['page_header']="New Property";			
		$this->parser->parse('greenadmin/header', $data);
		$this->parser->parse('property/property/form_add',$data);
		$this->parser->parse('greenadmin/footer', $data);
	}
	function save()
	{
		$pro_id=$this->input->post('pro_id');
		$title=$this->input->post('property_name');

		$data = array(
			'address'=> $this->input->post('address'),
			'advantage'=> $this->input->post('advantage'),
			'add_date'=> $this->input->post('start_date'),
			'agent_id'=> $this->input->post('angent'),
			'air_conditional'=> $this->input->post('aircond'),
			'balcony'=> $this->input->post('balcony'),
			'bathroom'=> $this->input->post('bathroom'),
			'bedroom'=> $this->input->post('bedroom'),
			'commision'=> $this->input->post('commission'),
			'contact_owner'=> $this->input->post('contact_owner'),
			'contract'=> $this->input->post('contract'),
			'description'=> $this->input->post('content'),
			'description_kh'=> $this->input->post('content_kh'),
			'dinning_room'=> $this->input->post('dining_room'),
			'direction'=> $this->input->post('direction'),
			'elevator'=> $this->input->post('elevator'),
			'end_date'=> $this->input->post('end_date'),
			'email_owner'=> $this->input->post('mail_owner'),
			'floor'=> $this->input->post('floor'),
			'furniture'=> $this->input->post('funiture'),
			'garden'=> $this->input->post('garden'),
			'gym'=> $this->input->post('gym'),
			'housesize'=> $this->input->post('house_size'),
			'kitchen'=> $this->input->post('kitchen'),
			'landsize'=> $this->input->post('land_size'),
			'livingroom'=> $this->input->post('livingroom'),
			'lp_id'=> $this->input->post('location'),
			'ownername'=> $this->input->post('owner_name'),
			'parking'=> $this->input->post('parking'),
			'pool'=> $this->input->post('pool'),
			'price'=> $this->input->post('price'),
			'property_name'=> $this->input->post('property_name'),
			'p_status'=> $this->input->post('available'),
			'p_type'=> $this->input->post('type'),
			'service_provided'=> $this->input->post('service_pro'),
			'stairs'=> $this->input->post('stair'),
			'steamandsouna'=> $this->input->post('stam_suana'),
			'story'=> $this->input->post('story'),
			'terrace'=> $this->input->post('terrace'),
			'title'=> $this->input->post('title'),
			'type_id'=> $this->input->post('category'),
		);

		$msg='';
		$count = $this->pro->vaidate($title,$pro_id);

		if($pro_id > 0){
			$this->db->where('pid',$pro_id)->update('tblproperty', $data);
			$msg = "Property Has Update...!";
		}else{ 

			if($count > 0) {
				$msg = "Property Is already Exist...!";
			} else {
				$pro_id = $this->pro->save($data, $pro_id);
				$msg="Property Has Created...!";
			}

		}
		$arr=array('msg'=>$msg,'pid'=>$pro_id);
		header("Content-type:text/x-json");
		echo json_encode($arr);
	}
	function upload($pid)
	{       
	    $this->load->library('upload');
	    $orders=$this->input->post('order');
	    $updimg=$this->input->post('updimg');
	    // $this->unlinkpic($productid);
	    // print_r($updimg);
	    $files = $_FILES;
	    $cpt = count($_FILES['userfile']['name']);
	    for($i=0; $i<$cpt; $i++)
	    {         
	    	
	        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
	        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
	        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
	        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
	        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

	        $this->upload->initialize($this->set_upload_options($pid,$_FILES['userfile']['name']));
	        // $this->upload->do_upload();
	        if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());			
			}else{	
				$this->creatthumb($pid,$_FILES['userfile']['name'],$orders[$i]);
			}
	    }
	}
	
	function creatthumb($pid,$imagename,$order){
			$data = array('upload_data' => $this->upload->data());
		 	$config2['image_library'] = 'gd2';
            $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
            $config2['new_image'] = './assets/upload/property/thumb';
            $config2['maintain_ratio'] = false;
            $config2['create_thumb'] = "$pid".'_'."$imagename";
            $config2['thumb_marker'] = false;
            $config2['height'] = 280;
            $config2['width'] = 380;
            $this->load->library('image_lib');
            $this->image_lib->initialize($config2); 
            if ( ! $this->image_lib->resize()){
            	echo $this->image_lib->display_errors();
			}else{
				$this->saveimg($pid,$imagename);
			}
		
	}
	private function set_upload_options($pid,$imagename)
	{   
	    //upload an image options
	    if(!file_exists('./assets/upload/property/')){
		    if(mkdir('./assets/upload/property/',0755,true)){
		        return true;
		    }
	    	if(mkdir('./assets/upload/property/thumb',0755,true)){
		                return true;
		    }
		}
	    $config = array();
	    $config['upload_path'] = './assets/upload/property/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
	    $config['max_size']      = '0';
	    $config['file_name']  	 = "$pid".'_'."$imagename";
		$config['overwrite']	 = true;

	    return $config;
	}
	function saveimg($pid,$imagename){
		$date=date('Y-m-d H:i:s');
		$user=$this->session->userdata('user_name');
		$count=$this->db->query("SELECT count(*) as count FROM tblgallery where pid='$pid' AND url='$imagename'")->row()->count;
		if($count==0){
			$data=array('pid'=>$pid,
						'url'=>$imagename,
						'gallery_type'=>'0');
			$this->db->insert('tblgallery',$data);
		}
	}
	
}