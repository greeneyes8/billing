<?php
session_start();
if(isset($_SESSION['name']) && $_SESSION['name']=="admin")
{
	
}
else{
	header('Location: ../../login/index.html');
	die();
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

 
  <link rel="stylesheet" href="../../css/sidebar-menu.css">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/style.css">
   
  <script src="../../js/jquery.min.js"></script> 
  <script src="../../js/bootstrap.min.js"></script> 
  <script src="../../js/angular.min.js"></script>
<script src="../../js/custom.js"></script>  



  
  <script>
    $(document).ready(function(){
	   
	});
  
  </script>
</head>

<body ng-app="roles">
<div class=" container-fluid" >
<div class="row" ng-controller="roles_controller" >
 <div ng-include="'../include/header.html'">
 </div>

<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 adjust-margin disp-dept-cont">
<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9">
		
 </div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"> 
		<button type="button" class="btn add-dep-btn font-12 adjust-add pull-right"  data-toggle = "modal" data-target = "#add_user" ><span><span><img src="../../icons/add.png" ></img></span class="font-12">&nbsp;&nbsp;<span>Add User</span></span></button>
 </div>
 </div>
 

<div class="row">

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
 
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">&nbsp;</div>  
 <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 disp-dept-cont" id="box">
 
	<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4  dept-tab tab-shadow tab-gap" ng-repeat="display in display_user">
 
		<div class="dept-tab-header row font-lato-18-reg adjust-spaces " >
 
 
				<div class="col-md-9 col-xs-9 col-lg-9 col-sm-9" style="padding: 0px 0px 0px 7px;">
					<span >{{display.type}}</span>
				</div>
				 <div class="col-md-3 col-xs-3 col-lg-3 col-sm-3 adjust-edit-delete" >
					 <div>
							  <a href="" style="padding: 6%;" ng-click="user_edit(display.user_id)" ><img  src="../../icons/roles/edit.png"data-toggle = "modal" data-target = "#edit_user" ></span></a>
							   <a href="" ng-click="delete_user(display.user_id)"><img  src="../../icons/roles/delete.png"></span></a>
								
						</div>
				  </div>
		
			<table class="row-space row font-14 dept-table">
						<tr id="mailalias">
						   <td>User Name :</td><td>{{display.username}}</td>
						</tr>
						<tr class=" " id="d_head">
						   <td>Email ID:</td><td>{{display.email}}</td>
						</tr>
						<tr class="" id="parent_id">
						   <td>Phone No :</td><td>{{display.phone}}</td>
						</tr>
           </table>	
	
 	</div>
 
</div>


 

 
 </div>
 


<!-- Add Dept Modal -->
<div class = "adjust-model modal fade" id = "add_user" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true" >
   
   <div class = "modal-dialog ">
      <div class = "modal-content model-size ">
         
         <div class = "modal-header">
		  
            <button type = "button" class = "close adjust-close" data-dismiss = "modal" aria-hidden = "true">
                    <img src="../../icons/close.png" ></img>
            </button>
            
            <h4 class = "modal-title align-model-header font-lato-18-bold" id = "myModalLabel">
                 Add User
            </h4>
         </div>
         
<div class = "modal-body body-size row model-bg">
	<form  novalidate class="form-horizontal" name="add_dept" id="add_dept" method="post">
		  
		  <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-padding" style="margin-top: 3%;" for="name">Name</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" ng-model="add_user.name"  placeholder="Enter User Name">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-padding" style="margin-top: 3%;" for="name">E-mail</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="email" class="form-control align-input-ele font-lato-12-bold" ng-model="add_user.email"  placeholder="Enter Mail Id">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-padding" style="margin-top: 3%;" for="name">Phone</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="number" class="form-control align-input-ele font-lato-12-bold " ng-model="add_user.phone"  placeholder="Phone Number">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class=" row form-group align-input-space font-lato-12-bold">
			
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-padding" style="margin-top: 3%;" for="name">Type of User</label>
			  
			   <div class=" col-sm-8 col-lg-8 col-xs-8 col-md-8" style="height: 100%;">
					  <div class=" radio-inline control-label col-sm-5 col-lg-5 col-xs-5 col-md-5 ">
					   <input type="radio" value="Reciptionist" ng-model="add_user.role"/>Reciptionist 
					  </div>
					  <div class=" radio-inline control-label col-sm-5 col-lg-5 col-xs-5 col-md-5">
					   <input type="radio" value="OP" ng-model="add_user.role"/>OP
					  </div>
					  <div class=" radio-inline control-label col-sm-5 col-lg-5 col-xs-5 col-md-5 " style="margin-left: -17%;">
					   <input type="radio" value="Lab" ng-model="add_user.role"/>Lab
					  </div>
					  <div class=" radio-inline control-label col-sm-5 col-lg-5 col-xs-5 col-md-5 " style="margin-left: 30%;">
					   <input type="radio" value="Ip/Lab" ng-model="add_user.role"/>Ip/Lab
					  </div>
					 
			</div>
		</div>	
	</div>
         <div class = "modal-footer">
            <a><span data-dismiss = "modal">
               Cancel or</span></a>
            <button type = "submit" class = "btn btn-primary align-submit"  ng-click="user_add()" >
               Add
            </button>
         </div>
		  </form>
         </div> 
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
<!--Edit Dept Model -->

<div class = "adjust-model modal fade" id = "edit_user" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true"  id="editmodal">
   
  <!-- /.modal-content -->
   <div class = "modal-dialog ">
      <div class = "modal-content model-size ">
         
         <div class = "modal-header">
		  
            <button type = "button" class = "close adjust-close" data-dismiss = "modal" aria-hidden = "true">
                    <img src="../../icons/close.png" ></img>
            </button>
            
            <h4 class = "modal-title align-model-header font-lato-18-bold" id = "myModalLabel">
                 Edit User
            </h4>
         </div>
         
<div class = "modal-body body-size row model-bg" >
<form class="form-horizontal" name="edit_dept"  >
		  <input type="hidden" class="form-control  align-input-ele font-lato-12-bold" ng-model="edit_user.user_id"   />
		  <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label" for="name">Name</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" readonly ng-model="edit_user.username"  placeholder="Enter User Name">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label" for="name">E-mail</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="email" class="form-control align-input-ele font-lato-12-bold" readonly ng-model="edit_user.email"  placeholder="Enter Mail Id">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label" for="name">Phone</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" ng-model="edit_user.phone"  placeholder="Phone Number">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class=" row form-group align-input-space font-lato-12-bold">
			
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label" for="name">Type of User</label>
			  
			   <div class=" col-sm-8 col-lg-8 col-xs-8 col-md-8" style="height: 100%;">
					  <label class=" radio-inline control-label col-sm-4 col-lg-4 col-xs-4 col-md-4 align-label">
					   <input type="radio" value="Reciptionist" ng-model="edit_user.type"/>
						Reciptionist 
					  
					  </label>
					  <label class=" radio-inline control-label col-sm-4 col-lg-4 col-xs-4 col-md-4 align-label">
					   <input type="radio" value="OP" ng-model="edit_user.type"/>
						OP
					  
					  </label>
					  
			  
			   </div>
			   <div class=" col-sm-1 col-lg-1 col-xs-1 col-md-1">
			  
			  </div>
			</div>
			
			
		   <div class=" row form-group align-input-space font-lato-12-bold">
			
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label" for="name"></label>
			  
			   <div class=" col-sm-8 col-lg-8 col-xs-8 col-md-8" style="height: 100%;margin-left: -9%">
					  <label class=" radio-inline control-label col-sm-4 col-lg-4 col-xs-4 col-md-4 align-label">
					   <input type="radio" value="Lab" ng-model="edit_user.type"/>
					     	Lab
					  
					  </label>
					  <label class=" radio-inline control-label col-sm-4 col-lg-4 col-xs-4 col-md-4 align-label" style="margin-left: 28%;">
					   <input type="radio" value="Ip/Lab" ng-model="edit_user.type"/>
					
					    Ip/Lab
					  </label>
					  
			  
			   </div>
			   <div class=" col-sm-1 col-lg-1 col-xs-1 col-md-1">
			  
			  </div>
			</div>
			
    </div>
         <div class = "modal-footer">
            <a><span data-dismiss = "modal">
               Cancel or</span></a>
            <button type = "submit" class = "btn btn-primary align-submit edit" id="" ng-click="update_user()" >
               Save
            </button>
         </div>
		  </form>
         </div> 
      </div>
	   
   </div> 
 

 
 
 
 
 </div>
 
 </div>
 </div> <!-- Row End -->
</div>  <!-- Container End -->
    <script src="../../js/rolesscript/rolesscript.js"></script>
</body> <!-- Body End -->

</html>
