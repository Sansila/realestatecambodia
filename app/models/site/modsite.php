<?php
    class Modsite extends CI_Model {
    	
        
        function getPropertyLists()
        {
        	$sql = $this->db->query(" SELECT * FROM tblproperty as p
        		left join tblpropertytype as pt on p.type_id = pt.typeid 
        		left join tblgallery as g on p.pid = g.pid
        		WHERE p.p_status = 1 GROUP bY p.pid
        		")->result();
        	return $sql;
        }
        function getPropertyByID($pid)
        {
            $sql = $this->db->query(" SELECT * FROM tblproperty as p
                left join tblpropertytype as pt on p.type_id = pt.typeid
                WHERE p.p_status = 1 AND p.pid = '$pid' ")->row();
            return $sql;
        }
        function getImageByID($pid)
        {
            $sql = $this->db->query("SELECT * FROM tblgallery as g 
                                    right join tblproperty as p on p.pid = g.pid
                                    WHERE p.pid = '$pid' AND p.p_status = 1 ")->result();
            return $sql;
        }
        function getSiteprofile()
        {
            $sql = $this->db->query("SELECT * FROM site_profile")->row();
            return $sql;
        }
        function getPropertyType()
        {
            $sql = $this->db->query("SELECT * FROM tblpropertytype where type_status = 1 ")->result();
            return $sql;
        }
        function getPropertyLocation()
        {
            $sql = $this->db->query("SELECT * FROM tblpropertylocation where status='1' ORDER BY lineage asc")->result();
            return $sql;
        }
        function getItemLocation()
        {
            $query = $this->db->query("SELECT * FROM tblpropertylocation where status='1' ORDER BY lineage asc");
            
            $cat = array(
                'items' => array(),
                'parents' => array()
            );

            foreach ($query->result() as $cats) {
                $cat['items'][$cats->propertylocationid] = $cats;
                $cat['parents'][$cats->parent_id][] = $cats->propertylocationid;
            }

            if ($cat) {
                $result = $this->getSubItem(null,$cat);
                return $result;
            } else {
                return FALSE;
            }
        }
        function getSubItem($parent,$menu)
        {
            $html = "";
            $title = ""; $gettitle = "";
            if (isset($menu['parents'][$parent])) {
                $html.= '<ul>';
                foreach ($menu['parents'][$parent] as $itemId) {
                    if (!isset($menu['parents'][$itemId])) {
                        $html.= '<label><input type="checkbox" name="location" value="'.$menu['items'][$itemId]->locationname.'" data-checkbox-changer="" data-target-field="#id_location_autocomplete" data-target-value="'.$menu['items'][$itemId]->locationname.'">'.$menu['items'][$itemId]->locationname.'</label>';
                    }
                    if (isset($menu['parents'][$itemId])) {
                        $html.= '<li>';
                        $html.= '<label><input type="checkbox" name="location" value="'.$menu['items'][$itemId]->locationname.'" data-checkbox-changer="" data-target-field="#id_location_autocomplete" data-target-value="'.$menu['items'][$itemId]->locationname.'">'.$menu['items'][$itemId]->locationname.'</label>';
                        $html.= '<ul></ul>';
                        $html.= $this->getSubItem($itemId,$menu);
                        $html.= '</li>';
                    }
                }
                $html.= '</ul>';
            }
            return $html;
        }
        // function get_items()
        // {
        //     $this->db->select('*');
        //     $this->db->from('tblpropertylocation');
        //     $this->db->order_by('lineage');
        //     $query = $this->db->get();
        //     return $query->result_array();
        // }
        // function generateTree($items = array(), $parent_id = null)
        // {
        //     $tree = array();
        //     for($i=0, $ni=count($items); $i < $ni; $i++){
        //         if($items[$i]['parent_id'] == $parent_id){

        //             $tree[]= $items[$i]['locationname'];
        //             $tree[]= $this->generateTree($items, $items[$i]['propertylocationid']);
        //         }
        //     }
        //     return $tree;
        // }
        function getResultSearch($status,$location,$category,$firstprice,$lastprice,$available,$order,$short)
        {
            $where = ""; $order_by = "";

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
                    }
                }

                $where.= ")";
            }else{
                $where.= "";
            }

            // ============= Order by =============//

            if($order != "" && $short == null)
            {
                $order_by.= " ORDER BY p.pid $order";
            }else if($short !="" && $order != ""){
                if($short == "Name")
                    $order_by.= " ORDER BY p.property_name $order ";
                if($short == "Area")
                    $order_by.= " ORDER BY p.housesize $order ";
                if($short == "Date")
                    $order_by.= " ORDER BY p.create_date $order ";
            }

            $query = $this->db->query("SELECT * FROM tblproperty as p
                                       LEFT JOIN tblpropertylocation as lp 
                                        ON p.lp_id = lp.propertylocationid
                                       LEFT JOIN tblpropertytype as pt
                                        ON p.type_id = pt.typeid
                                       LEFT JOIN tblgallery as g 
                                        on p.pid = g.pid
                                       WHERE p.p_status = 1 {$where} GROUP BY p.pid {$order_by}
                ")->result();

            return $query;
        }
}