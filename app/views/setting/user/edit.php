<?php
	
    $pict_path=base_url('assets/upload/no_image.jpg');
    if(file_exists(FCPATH."/assets/upload/".$query->userid."_thumb.png")){       
        $pict_path=base_url("assets/upload/".$query->userid."_thumb.png");
    }
   
?>

<div id="content-header" class="mini">
	<h1>User Management</h1>
	<ul class="mini-stats box-3">
		<li class="hide">
			<div class="left sparkline_bar_good"><span>2,4,9,7,12,10,12</span>+10%</div>
			<div class="right">
				<strong>36094</strong>
				Visits
			</div>
		</li>
		
	</ul>
</div>
<div id="breadcrumb">
	<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
	<a href="#" class="current">User Managment</a>
</div><br>
<div class="row">
<div class="row">
	<div class="col-sm-12">
	    <div class="panel panel-default">
	      	<div class="panel-body">
		        <div class="table-responsive" id="tab_print">
						<form enctype="multipart/form-data" accept-charset="utf-8" method='post' id="defaultform" action='<?php echo site_url('setting/user/update');?>'>
							<input type='text' id='txtuserid' style='display:none;' name='txtuserid' value="<?php echo $query->userid;?>">
							<table align='center' width="900">
								<tr>
									<td><label for="emailField">First Name</label></td>
									<td> : </td>
									<td><input  type='text' class="form-control" name='txtf_name' value="<?php echo $query->first_name;?>" id='txtf_name' required data-parsley-required-message="Enter First Name" placeholder="your First name"/>
									</td>
									<td><label for="emailField">last name</label></td>
									<td> : </td>
									<td><input type='text' class="form-control" name='txtl_name' value="<?php echo $query->last_name;?>" id='txtl_name' required data-parsley-required-message="Enter Last Name" placeholder="your Last name"/>
									</td>
									<td rowspan='4' style='border:0px solid #CCCCCC; text-align:center; width:200px'>
										<img src="<?php echo $pict_path?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px'>
										<input id="uploadImage" type="file" accept="image/gif, image/jpeg, image/jpg, image/png" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
										<input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
									</td>
								</tr>
								<tr>
									<td><label for="emailField">User Name</label></td>
									<td> : </td>
									<td><input type='text' class="form-control" name='txtu_name' value="<?php echo $query->user_name;?>" id='txtu_name' required data-parsley-required-message="Enter User Name" placeholder="your User name"/></td>
									<td><label for="emailField">Password</label></td>
									<td> : </td>
									<td><input type='password' class="form-control" name='txtpwd' id='txtpwd' value="<?php echo $query->password;?>" required data-parsley-required-message="Enter Password" placeholder="your Password"/></td>

								</tr>
								<tr>
									<td><label for="emailField">Email address</label></td>
									<td> : </td>
									<td class='control-group'><input type='text' class="form-control" value="<?php echo $query->email;?>" name='txtemail' id='txtemail' required data-parsley-required-message="Enter Email" placeholder="your Email Address"/></td>
									<td><label for="emailField">Role</label></td>
									<td> : </td>
									<td>
										<select name='cborole' id='cborole' class="form-control ">
											<?php
											foreach ($this->role->getallrole() as $role_row) {?>
												<option value='<?php echo $role_row->roleid; ?>' <?php if($query->roleid==$role_row->roleid) echo 'selected';?>> <?php echo $role_row->role ; ?></option>
											<?php }
											?>
										</select>
									</td>
									
								</tr>
								
								<tr>
									<td></td>
									<td></td>
									<td colspan='2'>
										<input type='submit' class="btn btn-primary" name='btnsubmit' id='btnsubmit' value='Save User'>
										<input type='reset' class="btn btn-warning" name='btnreset' id='btnreset'>
										<button type="button" class="btn btn-danger" id='btncancel'>Cancel</button>
									</td>
									
									<td></td>
									<td></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<script type="text/javascript">
		function PreviewImage() {
		        var oFReader = new FileReader();
		        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

		        oFReader.onload = function (oFREvent) {
		            document.getElementById("uploadPreview").src = oFREvent.target.result;
		            document.getElementById("uploadPreview").style.backgroundImage = "none";
		        };
		    };
		    $(function(){
				$('#defaultform').parsley();				
			})
		$(document).ready(function() {
			
				$('#btncancel').click(function(){
					var r = confirm("Are you sure to cancel !");
					if (r == true) {
						location.href="<?PHP echo site_url('setting/user/');?>";
					} else {
					   
					}
				})
			
       });
	</script>