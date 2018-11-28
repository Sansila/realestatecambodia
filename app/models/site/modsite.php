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
                $result = $this->getSubItem(0,$cat);
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
                        $html.= '<label><input type="checkbox" name="location" value="location:'.'>'.$menu['items'][$itemId]->locationname.'" data-checkbox-changer="" data-target-field="#id_location_autocomplete" data-target-value="location:'.$menu['items'][$itemId]->locationname.'">'.$menu['items'][$itemId]->locationname.'</label>';
                    }
                    if (isset($menu['parents'][$itemId])) {
                        $html.= '<li>';
                        $html.= '<label><input type="checkbox" name="location" value="location:'.$menu['items'][$itemId]->locationname.'" data-checkbox-changer="" data-target-field="#id_location_autocomplete" data-target-value="location:'.$menu['items'][$itemId]->locationname.'">'.$menu['items'][$itemId]->locationname.'</label>';
                        $html.= '<ul></ul>';
                        $html.= $this->getSubItem($itemId,$menu);
                        $html.= '</li>';
                    }
                }
                $html.= '</ul>';
            }
            return $html;
        }
}