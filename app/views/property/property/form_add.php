<?php
  $categoryid=isset($cate['categoryid'])?$cate['categoryid']:"";
  $m='';
  $p='';
  $storeid='';
  if(isset($store->storeid))
         $storeid=$store->storeid;
  if(isset($_GET['m'])){
      $m=$_GET['m'];
    }
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }

    if(isset($id))
    {
      $row = $this->db->query(" SELECT * FROM tblproperty as p left join tblpropertytype as pt on p.type_id = pt.typeid WHERE p.pid = '$id' ")->row();
    }
    $var = $this->session->all_userdata();
?>

<style type="text/css">
    table tbody tr td img{width: 20px; margin-right: 10px}
    ul,ol{
        margin-bottom: 0px !important;
    }
    a{
        cursor: pointer;
    }
    body.wait, body.wait *{
        cursor: wait !important;   
    }
    .datepicker {z-index: 9999;}
</style>

    <div id="content-header" class="mini">
        <h1>New Property</h1>
        <ul class="mini-stats box-3">
        </ul>
    </div>  
    <div id="breadcrumb">
      <a href="<?php echo base_url('/sys/dashboard')?>" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i>Home</a>
      <a href="<?php echo base_url("property/property/add?m=$m&p=$p")?>" title="Go to Store List" class="tip-bottom">Property</a>
      <a href='#' class="current"><?php if(isset($row->article_id)) echo 'Edit Property'; else echo 'New Property';?></a>
    </div>
    <div class="col-sm-6" style="text-align: center">
        <strong>
            <center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
        </strong>   
    </div>
   <!-- main content -->
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="widget-box">
              <div class="widget-title">
                <span class="icon">
                  <i class="fa fa-align-justify"></i>                 
                </span>
                <h5>Article Detail.</h5>
                <h5 class="result_text" style='color:red;'></h5>
            </div>

            <div class="widget-content nopadding">
                <form enctype="multipart/form-data" name="basic_validate" id="basic_validate" method="POST" action="" class="form-horizontal basic_validate">
                    
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Property Title</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm required" name="property_name" value='<?php echo isset($row->property_name)?"$row->property_name":""; ?>' id="property_name">
                                    <input type="text"  class="form-control input-sm hide" name="property_id" value='<?php echo isset($row->pid)?$row->pid:""; ?>' id="property_id">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Categories</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <select class="form-control" id="category_id">
                                        <option value="0">Please Select</option>
                                        <?php
                                        $locat=$this->db->query("SELECT * FROM tblpropertytype WHERE type_status = '1' ")->result();
                                            foreach ($locat as $me) {
                                                $se='';
                                                if(isset($row->type_id))
                                                    if($row->type_id==$me->typeid)
                                                        $se='selected';
                                                echo "<option value='$me->typeid' $se>$me->typename</option>";
                                            }
                                         ?>
                                    </select>
                                </div>                   
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Agent Name</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <select class="form-control" id="agent_id">
                                        <option value="0">Please Select</option>
                                        <?php
                                        $locat=$this->db->query("SELECT * FROM admin_user WHERE is_active='1'")->result();
                                            foreach ($locat as $me) {
                                                $se='';
                                                if($var['user_name'] == $me->user_name)
                                                    $se='selected';
                                                if(isset($row->agent_id))
                                                    if($row->agent_id==$me->userid)
                                                        $se='selected';
                                                echo "<option value='$me->userid' $se>$me->user_name</option>";
                                            }
                                         ?>
                                    </select>
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Property Type</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <select class="form-control" id="property_type">
                                        <option value="0">Please Select</option>
                                        <option value="1" <?php if(isset($row->p_type)){ if($row->p_type == 1) echo "selected"; }?> >Sale</option>
                                        <option value="2" <?php if(isset($row->p_type)){ if($row->p_type == 2) echo "selected"; }?> >Rent</option>
                                        <option value="3" <?php if(isset($row->p_type)){ if($row->p_type == 3) echo "selected"; }?> >Sale & Rent</option>
                                    </select>
                                </div>                   
                            </div>
                            
                        </div>
                         
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Price</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="price" value='<?php echo isset($row->price)?"$row->price":"" ?>' id="price">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Floor</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="floor" value='<?php echo isset($row->floor)?"$row->floor":""; ?>' id="floor">
                                </div>                   
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Size(House & Land)</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="house_size" value='<?php echo isset($row->housesize)?"$row->housesize":""; ?>' id="house_size">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label hide'>Land Size</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12 hide">
                                    <input type="text"  class="form-control input-sm" name="land_size" value='<?php echo isset($row->landsize)?"$row->landsize":""; ?>' id="land_size">
                                </div>                   
                            </div>
                        </div>

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Story</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="story" value='<?php echo isset($row->story)?"$row->story":""; ?>' id="story">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Pool</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="pool" value='<?php echo isset($row->pool)?"$row->pool":""; ?>' id="pool">
                                </div>                   
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Direction</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="direction" value='<?php echo isset($row->direction)?"$row->direction":""; ?>' id="direction">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Bedroom</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="bedroom" value='<?php echo isset($row->bedroom)?"$row->bedroom":""; ?>' id="bedroom">
                                </div>                   
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Bathroom</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="bathroom" value='<?php echo isset($row->bathroom)?"$row->bathroom":""; ?>' id="bathroom">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Living Room</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="living_room" value='<?php echo isset($row->livingroom)?"$row->livingroom":""; ?>' id="living_room">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Kitchen</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="kitchen" value='<?php echo isset($row->kitchen)?"$row->kitchen":""; ?>' id="kitchen">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Dining Room</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="dining_room" value='<?php echo isset($row->dinning_room)?"$row->dinning_room":""; ?>' id="dining_room">
                                  
                                </div>                   
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class='col-lg-2 control-label'>Is Active</label>
                            <div class=" col-lg-3"> 
                                <div class="col-md-2">
                                    <input type="checkbox"  class="form-control input-sm " name="is_active" id="is_active" <?php if (isset($row->is_active)){ if($row->is_active==1) echo 'checked'; }else{ echo "checked"; } ?>>
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Is Active</label>
                            <div class=" col-lg-3"> 
                                <div class="col-md-2">
                                    <input type="checkbox"  class="form-control input-sm " name="is_active" id="is_active" <?php if (isset($row->is_active)){ if($row->is_active==1) echo 'checked'; }else{ echo "checked"; } ?>>
                                </div>                   
                            </div>
                        </div> -->
                        
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Furniture</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="furniture" value='<?php echo isset($row->furniture)?"$row->furniture":""; ?>' id="furniture">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Airconditioner</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="aircon" value='<?php echo isset($row->air_conditional)?"$row->air_conditional":""; ?>' id="aircon">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Parking</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="parking" value='<?php echo isset($row->parking)?"$row->parking":""; ?>' id="parking">
                                  
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Steam & Sauna</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="st_sa" value='<?php echo isset($row->steamandsouna)?"$row->steamandsouna":""; ?>' id="st_sa">
                                  
                                </div>                   
                            </div>
                        </div>

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Garden</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="garden" value='<?php echo isset($row->garden)?"$row->garden":""; ?>' id="garden">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Balcony</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="balcony" value='<?php echo isset($row->balcony)?"$row->balcony":""; ?>' id="balcony">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Terrace</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="terrace" value='<?php echo isset($row->terrace)?"$row->terrace":""; ?>' id="terrace">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Elevator</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="elevator" value='<?php echo isset($row->elevator)?"$row->elevator":""; ?>' id="elevator">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Stairs</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="stairs" value='<?php echo isset($row->stairs)?"$row->stairs":""; ?>' id="stairs">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Title</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <select class="form-control" id="pro_title">
                                        <option value="0">Please Select</option>
                                        <option value="1" <?php if(isset($row->title)){ if($row->title == 1) echo "selected"; }?> >Soft Title</option>
                                        <option value="2" <?php if(isset($row->title)){ if($row->title == 2) echo "selected"; }?> >Hard Title</option>
                                    </select>
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Contract Allowed</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text" class="form-control input-sm" name="contract_allowed" value='<?php echo isset($row->contract)?"$row->contract":""; ?>' id="contract_allowed">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Commission</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="commission" value='<?php echo isset($row->commision)?"$row->commision":""; ?>' id="commission">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Urgent Sale</label>
                            <div class=" col-lg-4"> 
                                <div class="col-md-2">
                                    <input type="checkbox"  class="form-control input-sm " name="urgent" id="urgent" <?php if (isset($row->urgent)){ if($row->urgent==1) echo 'checked'; }else{ echo "checked"; } ?>>
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Service Provided</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="provider" value='<?php echo isset($row->service_provided)?"$row->service_provided":""; ?>' id="provider">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Gym</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="gym" value='<?php echo isset($row->gym)?"$row->gym":""; ?>' id="gym">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Advantage</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="advantage" value='<?php echo isset($row->advantage)?"$row->advantage":""; ?>' id="advantage">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Email Owner</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="email_owner" value='<?php echo isset($row->email_owner)?"$row->email_owner":""; ?>' id="email_owner">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Owner Name</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="owner_name" value='<?php echo isset($row->ownername)?"$row->ownername":""; ?>' id="owner_name">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Contact Owner</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="owner_contact" value='<?php echo isset($row->contact_owner)?"$row->contact_owner":""; ?>' id="owner_contact">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Available Property</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <select class="form-control" id="available_pro">
                                        <option value="1" <?php if(isset($row->available)){ if($row->available == 1) echo "selected"; }?> >Avialable</option>
                                        <option value="0" <?php if(isset($row->available)){ if($row->available == 0) echo "selected"; }?> >Unavialable</option>
                                    </select>
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Location(auto select)</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <select class="form-control select2-single" id="location_id">
                                        <option value="0">Please Select</option>
                                        <?php
                                            $location=$this->db->query("SELECT * FROM tblpropertylocation where status='1' ORDER BY lineage asc")->result();
                                            foreach ($location as $menu) {
                                                $sel='';
                                                if(isset($row->lp_id))
                                                if($row->lp_id==$menu->propertylocationid)
                                                $sel='selected';
                                        ?>
                                        <option value="<?php echo $menu->propertylocationid;?>" <?php echo $sel; ?>><?php echo str_repeat("---- &nbsp;",$menu->level).$menu->locationname;?></option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Address</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <textarea class="form-control" id="address"><?php echo isset($row->address)?"$row->address":""; ?></textarea>
                                </div>                   
                            </div>
                        </div>

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Start Date</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="start_date" value='<?php echo isset($row->add_date)?"$row->add_date":date('Y-m-d'); ?>' id="start_date">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>End Date</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="end_date" value='<?php echo isset($row->end_date)?"$row->end_date":date('Y-m-d'); ?>' id="end_date">
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Latitude</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="latitude" value='<?php echo isset($row->latitude)?"$row->latitude":""; ?>' id="latitude">
                                </div>                   
                            </div>
                            <label class='col-lg-2 control-label'>Longtitude</label>
                            <div class="col-lg-4"> 
                                <div class="col-md-12">
                                    <input type="text"  class="form-control input-sm" name="longtitude" value='<?php echo isset($row->longtitude)?"$row->longtitude":""; ?>' id="longtitude">
                                </div>                   
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Content</label>
                            <div class=" col-lg-10"> 
                                <div class="col-md-12">
                                    <!-- <div class="tabbable inline">
                                      <ul id="myTab" class="nav nav-tabs tab-bricky">
                                          <li id='first' class='active'>
                                              <a href="#english" data-toggle="tab" onclick="session_tab('english');"> English </a>
                                          </li>
                                      
                                           <li id='tp_inv' class=<?php if(isset($_SESSION["tab"])&&$_SESSION["tab"]=="khmer") {echo "active";} ?> >
                                              <a href="#khmer" data-toggle="tab" onclick="session_tab('khmer');"> Khmer </a>
                                          </li>
                                         
                                      </ul>
                                    </div> -->
                                    <!-- <div style="clear:both"></div> -->
                                    <div class="tab-content">
                                        <div id="english" class="tab-pane active">
                                            <div><textarea id='contents_pro' style="margin: 0px; width: 1010px; height: 275px;"><?php echo isset($row->description)?"$row->description":""; ?></textarea></div>
                                        </div>
                                        <div id="khmer" class="tab-pane ">
                                            <textarea id='contents_kh_pro'><?php echo isset($row->description_kh)?"$row->description_kh":""; ?></textarea>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                        </div>

                        <div class="form-group">
                            <label class='col-lg-2 control-label'>Images</label>
                            <div class=" col-lg-12"> 
                                <div class="col-md-12">
                                    <?php
                                    if(isset($row->pid)){
                                        $img=$this->db->query("SELECT * FROM tblgallery WHERE pid='$row->pid'")->result();
                                        foreach ($img as $img) {
                                     ?>
                                             <div class="saouy">
                                                  <div data-fileindex="0" id="preview-1441024963117-0" class="file-preview-frame" style="margin:20px 0px;" >
                                                     <img style="width:auto;height:160px;" alt="" title="" class="file-preview-image" src="<?php echo site_url('/assets/upload/property/thumb/'.$row->pid.'_'.$img->url) ?>">
                                                     <div class="file-thumbnail-footer">
                                                      <div class="file-caption-name" style="width: 250px;" title=""><p><?php echo $img->url; ?></p><div><span class="hide realname"><?php echo $value?></span></div></div>
                                                      <div class="file-actions">
                                                      <div class="file-footer-buttons">
                                                      <button title="Upload file" class="hide kv-file-upload btn btn-xs btn-default" type="button"><i class="glyphicon glyphicon-upload text-info"></i>
                                                      </button>
                                                      <button title="Remove file" class="kv-file-remove btn btn-xs btn-default" type="button" rel='<?php echo $img->gallery_id ?>'><i class="glyphicon glyphicon-trash text-danger"></i></button>
                                                          </div>
                                                          <div title="Not uploaded yet" tabindex="-1" class="file-upload-indicator"></div>
                                                          <div class="clearfix"></div>
                                                      </div>
                                                      </div>
                                                  </div>

                                            </div>
                                    <?php }
                                     }
                                    ?>
                                    <input id="file-4" type="file" name="userfile[]" class="file" multiple data-upload-url="#">
                                    <p><b>Note : <span style="color:red;">maximum size 960 x 600px</span></b></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label"></label>                      
                              <div class="col-md-10">
                                <div class="col-lg-1">
                                  <button id="save" name="save" type="submit" class="btn btn-primary">Save</button>
                                </div>
                                <div class="col-lg-1">
                                  <!-- <button id="cancel" name="cancel" type="button" class="btn btn-danger">Cancel</button> -->
                                </div>
                              </div>
                        </div>
                </form>                
              </div>
            </div>
          </div>
    </div>
 </div>
 
<script type="text/javascript">
    
    $(".select2-single").select2({
        allowClear:true,
        placeholder: 'Location'
    });
    
    function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
    } 
    $('.kv-file-remove').click(function(){
        var id=$(this).attr('rel');
        var url="<?php echo site_url('property/property/removeimg')?>";
        $.ajax({
                url:url,
                type:"POST",
                datatype:"Json",
                async:false,
                data:{id:id },
                success:function(data) {
                    // alert(data);
                }
              })
        $(this).closest('.saouy').remove();
    })
    function uploads(pid,formdata,msg){
        //alert(visitid+'/'+familyid);
        $.ajax({
            type:'POST',
            url:"<?PHP echo site_url('property/property/upload');?>/"+pid,
            data:formdata,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                toasmsg('success',msg);
                //location.reload();
                location.href="<?php echo site_url('property/property/index/?m='.$m.'&p='.$p) ?>";
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
                //location.reload();
                location.href="<?php echo site_url('property/property/index/?m='.$m.'&p='.$p) ?>";

            }
        });
       
    } 
    $('#cancel').click(function(){
        location.href="<?PHP echo site_url('store/store/index');?>?<?php echo 'm=$m&p=$p' ?>";
    }) 
    $("#menu_type").change(function(){
        if($(this).val()==1)
            $("#article_tap").removeClass("hide");
        else{
            $("#article_tap").addClass("hide");

        }
    })
    $(function(){       
    $('#article_date').datepicker({ dateFormat: "yy-mm-dd" });
    // Form Validation
    $("#basic_validate").submit(function(e){
      e.preventDefault();
    })
    .validate({
        rules:{
          required:{
            required:true
          },
          email:{
            required:true,
            email: true
          },
          date:{
            required:true,
            date: true
          },
          url:{
            required:true,
            url: true
          }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
          $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },        
        submitHandler: function(form) {

          var url="<?php echo site_url('property/property/save')?>";
          var is_active=0;
          if($('#is_active').is(':checked'))
                is_active=1;
          var is_marguee=0;
            if($('#is_marguee').is(':checked'))
              is_marguee=1;
          var urgent = 0;
            if($('#urgent').is(':checked'))
                urgent = 1;
          $("body").toggleClass("wait");
          setTimeout(function(){
              $.ajax({
                url:url,
                type:"POST",
                datatype:"Json",
                async:false,
                data:{
                    pro_id:$('#property_id').val(),
                    property_name:$("#property_name").val(),
                    category:$("#category_id").val(),
                    angent:$("#agent_id").val(),
                    type:$("#property_type").val(),
                    price:$("#price").val(),
                    floor:$("#floor").val(),
                    house_size:$("#house_size").val(),
                    land_size:$("#land_size").val(),
                    direction:$("#direction").val(),
                    bedroom:$("#bedroom").val(),
                    bathroom:$('#bathroom').val(),
                    livingroom:$('#living_room').val(),
                    kitchen: $('#kitchen').val(),
                    dining_room: $('#dining_room').val(),
                    funiture: $('#furniture').val(),
                    aircond: $('#aircon').val(),
                    parking: $('#parking').val(),
                    stam_suana: $('#st_sa').val(),
                    garden: $('#garden').val(),
                    balcony: $('#balcony').val(),
                    terrace: $('#terrace').val(),
                    elevator: $('#elevator').val(),
                    stair: $('#stairs').val(),
                    title: $('#pro_title').val(),
                    contract: $('#contract_allowed').val(),
                    commission: $('#commission').val(),
                    urgent: urgent,
                    service_pro: $('#provider').val(),
                    gym: $('#gym').val(),
                    advantage: $('#advantage').val(),
                    mail_owner: $('#email_owner').val(),
                    owner_name: $('#owner_name').val(),
                    contact_owner: $('#owner_contact').val(),
                    address: $('#address').val(),
                    location: $('#location_id').val(),
                    available: $('#available_pro').val(),
                    start_date: $('#start_date').val(),
                    end_date: $('#end_date').val(),
                    content: $('#contents_pro').val(),
                    content_kh: $('#contents_kh_pro').val(),
                    story: $('#story').val(),
                    pool: $('#pool').val(),
                    latitude: $('#latitude').val(), 
                    longtitude: $('#longtitude').val()
                },
                success:function(data) {
                    // $(".result_text").html(data.msg);
                    var formdata = new FormData(form);

                    if(data.pid!='' && data.pid!=null){
                        uploads(data.pid,formdata,data.msg);

                        // toasmsg('success',data.msg);
                        // location.href='<?php //echo site_url("article/index?m=".$m.'&p='.$p) ?>';
                    }else{
                        toasmsg('error',data.msg);
                    }
                    $('#basic_validate')[0].reset();
                }
              })
          }, 500);
        }
      });

    $("#is_active").on("click",function(){      
      if($(this).prop("checked")==true){
        $(this).val(1);
      }else{
        if(window.confirm("Are you sure ! Do you want to set Inactive for this category.")){
          $(this).val(0);
        }else{
          return false;
        }        
      }      
    });
    $("#is_marguee").on("click",function(){      
      if($(this).prop("checked")==true){
        $(this).val(1);
      }else{
        if(window.confirm("Are you sure ! Do you want to set Inactive for this category.")){
          $(this).val(0);
        }else{
          return false;
        }        
      }      
    });
    
});
</script>
    
        
    
