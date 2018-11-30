<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->library('pagination');
        $this->load->library('encrypt');
		$this->load->helper(array('form', 'url'));
		$this->load->model("site/modsite","site");	
	}
	public function index()
	{	
		$datas['profile'] = $this->site->getSiteprofile();
        $data['type'] = $this->site->getPropertyType();
        $data['location'] = $this->site->getPropertyLocation();
        $data['data'] = $this->site->getItemLocation();

        $page = 0;
        if(isset($_GET['per_page']))
            $page = $_GET['per_page'];
        $config['base_url'] = site_url('?a=link');
        $config['per_page'] = 8;
        $config['num_link'] = 3;
        $config['page_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $query = " SELECT * FROM tblproperty as p
        		left join tblpropertytype as pt on p.type_id = pt.typeid 
        		left join tblgallery as g on p.pid = g.pid
        		WHERE p.p_status = 1 GROUP bY p.pid
        		";

        $config['total_rows'] = count($this->db->query($query)->result());
        $this->pagination->initialize($config);
        $limit = " LIMIT ".$config['per_page'];
        if($page >0)
            $limit = " LIMIT $page, ".$config['per_page'];
        $query.= " {$limit}";
        $data['lists'] = $this->db->query($query)->result();

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

        $status = ''; $location = ''; $category = ''; $firstprice = ''; $lastprice = ''; 
        $available = ''; $order =''; $sort=''; $return_cat = ""; $return_loc = ""; $list_type = '';
        
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
        if(isset($_GET['order']))
            $order = $_GET['order'];
        if(isset($_GET['sort']))
            $short = $_GET['sort'];
        if(isset($_GET['list_type']))
            $list_type = $_GET['list_type'];

        if($location != "")
        {
            $location = trim($location, ';');
            $arr = explode(';', $location);
            $num = count($arr);$i=0;
            foreach ($arr as $arr) {
                $comma = urlencode(";");
                if(++$i == $num)
                {
                    $comma = "";
                }
                $return_loc.= $arr.''.$comma;
            }
        }

        if($category !="")
        {
            foreach ($category as $cat) {
                $return_cat .= "categories[]=".$cat."&";
            }
        }else{
            $return_cat .= "&";
        }

        $page = 0;
        if(isset($_GET['per_page']))
            $page = $_GET['per_page'];
        $config['base_url'] = site_url('site/site/search?available='.$available.'&status='.$status.'&'.$return_cat.'price__lte='.$lastprice.'&price__gte='.$firstprice.'&q='.$return_loc.'&list_type='.$list_type.'&order='.$order.'&sort='.$sort);
        $config['per_page'] = 8;
        $config['num_link'] = 3;
        $config['page_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $where = ""; $order_by = ""; $return_cat = ""; $return_loc = ""; $limit="";

        if($status !="" || $location !="" || $category !="" || $firstprice !="" ||$lastprice !="")
        {
                $where.= "AND (p.remark LIKE '%$available%' ";
            if($firstprice !="" && $lastprice !=""){
                $where.= " OR p.price BETWEEN $firstprice AND $lastprice";
            }else if($firstprice !=""){
                $where.= " OR p.price BETWEEN 0 AND $firstprice";
            }else if($lastprice !=""){
                $where.= " OR p.price BETWEEN 0 AND $lastprice";
            }
            if($status !="")
            {
                if($status == "rent")
                    $where.= " OR p.p_type = 2 ";
                if($status == "sale")
                    $where.= " OR p.p_type = 1 ";
                if($status == "both")
                    $where.= " OR p.p_type = 3 ";
                if($status == "all")
                    $where.= " OR p.p_type <> 0 ";
            }
            if($location != "")
            {
                $location = trim($location, ';');
                $arr = explode(';', $location);
                foreach ($arr as $arr) {
                    $where.= " OR lp.locationname = '$arr'";
                }
            }
            if($category !="")
            {
                foreach ($category as $cat) {
                    $where.= " OR pt.typename = '$cat'";
                    $return_cat .= "categories[]=".$cat."&";
                }
            }else{
                $return_cat .= "&";
            }

            $where.= ")";
        }else{
            $where.= "";
        }

        // ============= Order by =============//

        if($order != "" && $sort == null)
        {
            $order_by.= " ORDER BY p.pid $order";
        }else if($sort !="" && $order != ""){
            if($sort == "Name")
                $order_by.= " ORDER BY p.property_name $order ";
            if($sort == "Area")
                $order_by.= " ORDER BY p.housesize $order ";
            if($sort == "Date")
                $order_by.= " ORDER BY p.create_date $order ";
        }

        // ============ configure pagination =====//

        $query = "SELECT * FROM tblproperty as p
                                    LEFT JOIN tblpropertylocation as lp 
                                    ON p.lp_id = lp.propertylocationid
                                    LEFT JOIN tblpropertytype as pt
                                    ON p.type_id = pt.typeid
                                    LEFT JOIN tblgallery as g 
                                    on p.pid = g.pid
                                    WHERE p.p_status = 1 {$where} GROUP BY p.pid {$order_by}
            ";

        $config['total_rows'] = count($this->db->query($query)->result());
        $this->pagination->initialize($config);
        $limit = " LIMIT ".$config['per_page'];
        if($page >0)
            $limit = " LIMIT $page, ".$config['per_page'];
        $query.= " {$limit}";
        $data['result'] = $this->db->query($query)->result();
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
}
?>