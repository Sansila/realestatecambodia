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
    }