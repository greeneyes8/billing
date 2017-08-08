<?php
session_start();
if(isset($_SESSION['name']) && $_SESSION['name']=="Reciptionist")
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
  <link href='../../css/fullcalendar.css' rel='stylesheet' />
<link href='../../css/fullcalendar.print.css' rel='stylesheet' media='print' />
  <link rel="stylesheet" href="../../css/datepicker/jquery-ui.css" >
   
  <script src="../../js/jquery.min.js"></script> 
  <script src="../../js/bootstrap.min.js"></script> 
  <script src="../../js/angular.min.js"></script>
<script src="../../js/custom.js"></script>  



  
  <script>
    $(document).ready(function(){
	   
	});
  
  </script>
</head>

<body ng-app="patient">
<div class=" container-fluid" ng-controller="patient_controller" >
<div class="row"  >
 <div ng-include="'../../reception/include/header.html'">
 </div>

<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 adjust-margin disp-dept-cont">
<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9">
		
 </div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"> 
		<button type="button" class="btn add-dep-btn font-12 adjust-add pull-right" data-toggle = "modal" data-target = "#add_patient" ><span><span><img src="../../icons/add.png" ></img></span class="font-12">&nbsp;&nbsp;<span>Register</span></span></button>
 </div>
 </div>
 

<div class="">

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
		
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">&nbsp;</div>  


 <div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 disp-dept-cont" id="box">
   
	      <div class="group col-md-6 col-sm-6 col-lg-6"> 
					<div class="col-md-12 col-sm-12 col-lg-12">	
						  <input type="text" required class="module-input " ng-model="patient_id">
					  <span class="bar"></span>
					  <label class="label-text">Enter Patient ID/Mail ID/Phone No</label>
					  </div>
					</div>
					<div class="group col-md-6 col-sm-6 col-lg-6"> 
					<div class="col-md-12 col-sm-12 col-lg-12">	
						  <input type="text" required class="module-input " ng-model="search">
					  <span class="bar"></span>
					  <label class="label-text">Search Doctor's Name/Specification </label>
					  </div>
					</div>
					
					
		
			
						
			<!--	<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4  doct-tab tab-shadow tab-gap" style="margin-top: 10px;overflow-x:auto;" data-toggle = "modal" data-target = "#displaydetails" ng-repeat="spe in display_specialization | filter:search ">
			 -->
					<div class="col-md-9 col-lg-9 col-xs-9 col-sm-9 table-top-space">
					
					  
						 <table id="tbl"  class="table tble-size  table-condensed tbl-shadow " cellpadding="10"  cellspacing="10">
									<thead>
									  <tr class=" font-14 font-os-semibold border-btm" >
										<th class=" left-padding" >Sl No</th>
										<th >Doctor Name</th>
										<th >Experience</th>
										<th >Phone</th>
										<th >Specilization</th>
										<th >Price</th>
										<th  ></th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="border-data-btm" ng-repeat="spe in display_specialization | filter:search "> <!-- ng-repeat=" employee in empdata |  filter:searchbox" --> 
										
										<td class=" left-padding">{{$index+1}}</td>
										<td> {{spe.doctor_name}}</td>
										<td >{{spe.experience}}</td>
										<td >{{spe.phone}}</td>
										<td>{{spe.specialization}}</td>
										<td>{{spe.fee}}</td>
										
										<td  >
											<a href="#" class="adjustedit" data-toggle = "modal" data-target = "#select_doctor"  ng-click="take_op_appoint(spe.doctor_id,patient_id)"  >Select</a> 
											
										</td>
									  </tr>
									 
									  
								
									</tbody>
					  </table>
					  
					  <div class="calender-size hidden"  id="cal" >
							<div id='calendar' class="inner-calender" ></div>
					  </div>
					  
					  
					 
					 
		</div>
	
			 
			</div>
				
				
			
 </div>
 


<!-- Add Dept Modal -->
<div class = "adjust-model modal fade" id = "add_patient" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true" >
   
   <div class = "modal-dialog ">
      <div class = "modal-content model-size ">
         
         <div class = "modal-header">
		  
            <button type = "button" class = "close adjust-close" data-dismiss = "modal" aria-hidden = "true">
                    <img src="../../icons/close.png" ></img>
            </button>
            
            <h4 class = "modal-title align-model-header font-lato-18-bold" id = "myModalLabel">
                 Add Patient
            </h4>
         </div>
         
<div class = "modal-body body-size row model-bg">
	<form  novalidate class="form-horizontal" name="add_dept" id="add_dept" method="post">
		  
		  <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name"> Name</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" ng-model="patient_add.patient_name"  placeholder="Enter Patient Name">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
			
			  <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name"> Date of Birth</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control  align-input-ele font-lato-12-bold calender-input" ng-model="patient_add.date_of_birth"  placeholder="Enter Date of Birth" >
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			   
			  </div>
			</div>
			
			
			 <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Age</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="number" class="form-control  align-input-ele font-lato-12-bold " ng-model="patient_add.age"  placeholder="Enter Age">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Gender</label>
			   <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;text-align: left;" >
					  
								 <label class="radio-inline">
										<input type="radio" name="gender" value="Male" checked ng-model="patient_add.gender">Male
								</label>
								<label class="radio-inline">
								  <input type="radio" name="gender" value="Female" ng-model="patient_add.gender">Female
								</label>				
					  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Address</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" ng-model="patient_add.address"  placeholder="Enter Address">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
			
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Phone</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="number" class="form-control align-input-ele font-lato-12-bold" maxlength="10" ng-model="patient_add.phone"  placeholder="Enter Pnone No">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Email Id</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="email" class="form-control align-input-ele font-lato-12-bold" ng-model="patient_add.email"  placeholder="Enter Email">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
		
			
		
    </div>	
         <div class = "modal-footer">
            <a><span data-dismiss = "modal">
               Cancel or</span></a>
            <button type = "submit" class = "btn btn-primary align-submit"  ng-click="add_patient(patient_add.date_of_birth)" >
               Add
            </button>
         </div>
		  </form>
         </div> 
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  


 
   <!--display Modal -->
<div class = "adjust-model modal fade" id = "select_doctor" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true" >
   
   <div class = "modal-dialog ">
      <div class = "modal-content model-size ">
         
         <div class = "modal-header">
		  
            <button type = "button" class = "close adjust-close" data-dismiss = "modal" aria-hidden = "true">
                    <img src="../../icons/close.png" ></img>
            </button>
            
            <h4 class = "modal-title align-model-header font-lato-18-bold" id = "myModalLabel">
                 Display Details
            </h4>
         </div>
         
<div class = "modal-body body-size row model-bg">
	<form  novalidate class="form-horizontal" name="add_dept" id="add_dept" method="post">
		  <input type="hidden" class="form-control align-input-ele font-lato-12-bold" ng-model="select_doctor.doctor_id"  placeholder="Enter Doctor Name">
		  <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name"> Doctor</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" readonly ng-model="select_doctor.doctor_name"  placeholder="Enter Doctor Name">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			  <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name"> Patient ID</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control  align-input-ele font-lato-12-bold" readonly ng-model="select_doctor.patient_id"  placeholder="Enter Patient ID">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			 <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Patient Name</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control  align-input-ele font-lato-12-bold " readonly ng-model="select_doctor.patient_name"  placeholder="Enter Name">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
			<div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Consultation Fees</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control align-input-ele font-lato-12-bold" readonly ng-model="select_doctor.fee"  placeholder="Enter Consultation Fees">
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			 <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name">Age</label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;">
				<input type="text" class="form-control  align-input-ele font-lato-12-bold calender-input" ng-model="select_doctor.age"  readonly >
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>	
			 <div class="form-group align-input-space font-lato-12-bold">
			  <label class="control-label col-sm-3 col-lg-3 col-xs-12 col-md-3 align-label lable-add-input" for="name"> Payment Mode </label>
			  <div class=" col-sm-8 col-lg-8 col-xs-12 col-md-8" style="height: 100%;margin-top: 10px;" >
				 <input type="radio" name="payment" value="cash" checked style="margin-left: -14%;" ng-model="select_doctor.payment" > Cash
				<input type="radio" name="payment" value="card" style="margin-left: 11%;" ng-model="select_doctor.payment" > Card
			  </div>
			  <div class=" col-sm-1 col-lg-1 col-xs-12 col-md-1">
			  
			  </div>
			</div>
			
			
		
			
		
    </div>	
         <div class = "modal-footer">
            <a><span data-dismiss = "modal">
               Cancel or</span></a>
            <button type = "submit" class = "btn btn-primary align-submit"  ng-click="print_receipt(patient_id)" >
               Print
            </button>
         </div>
		  </form>
         </div> 
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
 
 
 
 
 </div>
 
  <div class=" hidden col-md-12 col-lg-12 col-sm-12 col-xs-12" id="printsection">
	        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  >
	              <img src="../../icons/letterhead_header.jpg" alt="Lakshmi Hospitals" style="width:100%;height:150px;">
              </div>
				
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
						<center><p style="font-size: 40px;">Invoice:</p></center>
						<img src="print_barcode.php?barcode_to_print={{screen_print.barcode}}"/>
					</div>
			
	         
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-left:100px"> 	
			
				<div class="col-md-6 col-sm-6 col-xs-6" style="width:300px;">
					<table cellpadding="10">
						<tr>
							<td >Patient Id </td>
							<td>{{screen_print.patient_id}}</td>
							
						</tr>
						<tr>
							<td >Patient Name  </td>
							<td>{{screen_print.patient_name}}</td>
							
						</tr>
						<tr>
							<td >Contact number : &nbsp;</td>
							<td>{{screen_print.phone}}</td>
								
						</tr>
						<tr>
							<td >Gender : &nbsp;</td>
							<td>{{screen_print.gender}}</td>
						</tr>
						<tr>
							<td >Age : &nbsp;</td>
							<td>{{screen_print.age}}</td>
								
						</tr>
					</table>
				</div>
			
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" style="width:350px;margin-top:-170px;margin-left:400px;" >
					<table cellpadding="10" >
					    <tr>
							<td >Consulted To : &nbsp;</td>
							<td>{{screen_print.doctor_name}}</td>
						</tr>
						<tr>
							<td >Date</td>
							<td>{{screen_print.date}}</td>
						</tr>
						<tr>
							<td >Bill Number</td>
							<td>{{screen_print.slno}}</td>
						</tr>
						<tr>
							<td ></td>
							<td></td>
						</tr>
					</table>	
				</div>
		  </div> 
		  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">&nbsp;</div>
		  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"> 	
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">&nbsp;</div>
			<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12" style="margin-left:100px;">
				<table style="border:1px solid black;width:82%;">
					<tr style="height: 58px;">
						<th style="border-right:1px solid black;border-bottom:1px solid black;padding-left:5px;width:10%;">Sl.no</th>
						<th style="border-right:1px solid black;border-bottom:1px solid black;padding-left:5px;width:65%">Discription</th>
						<th style="border-right:1px solid black;border-bottom:1px solid black;padding-left:5px;width:10%">Payment</th>
						<th style="border-right:1px solid black;border-bottom:1px solid black;padding-left:5px;">Amount</th>
					</tr>
					<tr style="height: 250px;">
						<td style="border-right:1px solid black;padding-left:5px;padding:14px;">1</td>
						<td style="border-right:1px solid black;padding-left:5px;">Consultation Fee ({{screen_print.doctor_name}})</td>
						<td style="border-right:1px solid black;padding-left:5px;">Cash</td>
						<td style="border-right:1px solid black;padding-left:5px;">{{screen_print.fee}}</td>
					</tr>
					
					<tr>
						<td colspan="3" style="border-right:1px solid black;border-top:1px solid black;padding-left:5px;text-align:right;padding: 10px;">Sub Total</td>
						<td style="border-right:1px solid black;padding-left:5px;border-top:1px solid black;">{{screen_print.fee}}</td>
					</tr>
					<tr>
						<td colspan="3" style="border-right:1px solid black;padding-left:5px;text-align:right;padding: 10px;">Tax</td>
						<td style="border-right:1px solid black;padding-left:5px;">-</td>
					</tr>
					
					<tr>
						<td colspan="3" style="border-right:1px solid black;padding-left:5px;text-align:right;padding: 10px;">Total Amount</td>
						<td style="border-right:1px solid black;padding-left:5px;">{{screen_print.fee}}</td>
					</tr>
					
					
				</table>
				
				<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12" style="padding-top:60px;" >
				<div style=" width:80px ;border-top:1px solid black;margin-left:500px ">
				 Signature 
				</div>
				
				</div>
				</div>
		
		  </div>
		  
	
	</div>
 
 
 
 </div>
 </div> <!-- Row End -->
</div>  <!-- Container End -->
<script src="../../js/datepicker/jquery.js"></script>
<script src="../../js/datepicker/jquery-ui.js"></script>

<script>
   $("#dob").datepicker({
	inline: true
   });


</script>

<script type="text/javascript" src="../op-user/opbilling.js"></script>
</body> <!-- Body End -->

</html>
