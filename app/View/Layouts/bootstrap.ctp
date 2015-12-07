<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
	<?php
	  if($this->params['action']=="login")
         {
         echo "Prodigy OMS";
         }
         else
         {
	 echo $title_for_layout;
         }

	  ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot;?>css/bootstap-theme.css" rel="stylesheet">
<link href="<?php echo $this->webroot;?>css/jquery.timepicker.css" rel="stylesheet">

    
	<!-- Latest compiled and minified JavaScript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('select2');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('font-awesome');
		echo $this->Html->script('select2');
    echo $this->Html->script('jquery.timepicker.js');
    echo $this->Html->script('jquery.timepicker.min.js');
		
    echo $this->Html->script('smooth-scroll');

echo $this->Html->script('circle-progress');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
<?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
// Writes cached scripts
?>
  	<!-- Latest compiled and minified CSS -->
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



    <style type="text/css">

		.col-md-9 {
       
    overflow: auto;
    }
.select2-container, .select2-drop, .select2-search, .select2-search input
{
padding:0px;
}
.radio label, .checkbox label {
padding-top: 10px;
}
.radio input[type=radio], .radio-inline input[type=radio], .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox] {
margin-left: 0px;
}
           .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:;
}
  
footer {
  margin-top:20px;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#efefef;
}

/* count indicator near icons */
.nav>li .count {
  position: absolute;
  bottom: 12px;
  right: 6px;
  font-size: 9px;
  background: rgba(51,200,51,0.55);
  color: rgba(255,255,255,0.9);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

/* indent 2nd level */
.list-unstyled li > ul > li {
   margin-left:10px;
   padding:8px;
}
html, body { overflow-x: hidden;}
.page-header {
padding-bottom: 9px;
margin: 20px 0 20px;
border-bottom: 1px solid #eee;
}
.label,.glyphicon { margin-right:5px; }

form .required label:after {
 color: #e32;
 content: '*';
 display: inline;
 }
.error-message{
  color: red;
}
 #star label:after {
 color: #e32;
 content: '*';
 display: inline;
 }

 .radio + .radio, .checkbox + .checkbox {
  margin-top: 1px;
  }
 .radio input[type=radio], .radio-inline input[type=radio], .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox] {
 margin-top: 10px;
 margin-top: 4px;
 margin-left: 0px;
 }
 .radio label, .checkbox label {
 padding-top: 0px;
 padding-bottom: 0px;
 margin-left: 5px;
 margin-top: 0px;
 }
 .radio, .checkbox {
 position: relative;
 display: block;
 margin-top: 10x;
 margin-bottom: 13px;
 }

label {

margin-right: 10px;

}
.searchpad
{

padding-top:5px;
}

.ui-datepicker-inline
{
margin:auto;
width:100%;
   font-size: 1em;
}
.ui-widget {
    font-size: 1em;
  }
  .ui-datepicker table {
    font-size: 1em;
  }

@media (max-width: 1150px)
{
.ui-widget {
    font-size: .9em;
  }
  .ui-datepicker table {
    font-size: .9em;
  }
  .btn
  {
    padding: 8px 5px !important;
  }
}
@media (max-width: 767px)
{
.ui-widget {
    font-size: 1.3em;
  }
  .ui-datepicker table {
    font-size: 1.3em;
  }
}
@media (max-width: 500px)
{
.ui-widget {
    font-size: 1em;
  }
  .ui-datepicker table {
    font-size: 1em;
  }
}
.Highlighted a{
	   background-color : #DD4814 !important;
	   background-image :none !important;
	   color: White !important;
	   font-weight:bold !important;
	   font-size: 12pt;
}
.container-fluid {
margin-right: auto;
margin-left: auto;
padding-left: 20px;
padding-right: 20px;
     <?php
        if($this->params['action']=="login")
        {

        }
        else
        {
        echo "max-width:1366px;";
        }
     ?>
}

@media (min-width: 767px) {
.container-fluid {
margin-right: auto;
margin-left: auto;
padding-left: 50px;
padding-right: 50px;
}
}
.message
{
color: #A94442;
background-color: #F2DEDE;
border-color: #EBCCD1;
padding: 10px;
width:85%;
margin-left:auto;
margin-right:auto;
margin-bottom: 20px;
border: 1px solid transparent;
border-radius: 4px;
}
.nav-form
{
padding-top:10px;
}
.high
{
min-height: 325px;

}

@media (min-width: 990px)
{
.high
{
  min-height: 325px;
  max-height: 325px;
}
.high2
{
  min-height: 352px;
  max-height: 352px;
}
}

.navbar-brand {
float: left;
padding: 15px 15px;
font-size: 20px;
}
.row
{
margin-left:0px;
margin-right:0px;
}
.select2-container .select2-choice {
display: block;
height: 38px;
padding: 5px 0 0 10px;
}
.badge{
  position: absolute;
  bottom: 70%;
  right: 25px;
  width: 29px;
  height: 29px;
  text-align: center;
  padding: 7px;
  margin: 0;
  vertical-align: middle !important;
  display: block;
  min-width: 10px;
  line-height: 1;
  white-space: nowrap;
  background-color: #ddd !important;
  color:#222 !important;
  font-size:15px;
  border-radius: 10px;
}
.loader
{
  display:none;
  width:200px;
}
.dashicon {
  padding:7px;
  font-size: 35px;
  color:#bf3e11;
}
.dashtext {
  font-size: 16px; 
  color:#bf3e11;
  margin-top: 6px;
}
.dashbox
{
  height:115px;
  background-color: #f2f2f2 !important;    
  border-color: #bf3e11 !important; 
  border-width:medium;
}
    </style>

  </head>

  <body>
  <?php
    if($this->params['action']=="login")
    {
    echo $this->Element('login-nav');
    }
    else
    {
    echo $this->Element('navigation');
    }

     ?>
    <div class="container-fluid">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

    <div id="footer"><center>© Prodigy Numbers - 2015 - All rights reserved<br><br><center></div>

<script>


$(document).ready(function() {
    $("#Icd10CodeIcd10Code,#Icd9CodeIcd9Code").select2({
	minimumInputLength: 2,
	maximumSelectionSize: 5, 
  
	});           
});
$(document).ready(function() {
    $("#CustomerBirthCountry,#CustomerBirthState,#VacationCalenderEmployeeId").select2({
  minimumInputLength: 2,
 
  
  });           
});
$(document).ready(function() {
    $("#EmployeeStateId,#DriverLogPrimaryDriverName").select2({
  minimumInputLength: 2,
 
  
  });           
});

$(document).ready(function() {
    $("#print_par,#BillingCustomers,#CustomerStateId,#InsuranceStateId,#CustomerCityId,#CustomerIcd9CodesId,#CustomerIcd10CodesId,#DoctorStateId,#CompanyStateId,#rattendance,#DriverLogCustomerId").select2({
  minimumInputLength: 2,
  });           
});
 

//$('#ActivityTime,#ActivityTime1').timepicker({ 'forceRoundTime': true });; 

//for(a=0;a<31;a++){
//$('#Activity'+a+'Time1').timepicker({ 'forceRoundTime': true });; 
//}
//for(a=0;a<31;a++){
//$('#Activity'+a+'Time').timepicker({ 'forceRoundTime': true });; 
//}
//for(a=0;a<31;a++){
//$('#Activity'+a+'Date').datepicker({
  //dateFormat:'M-dd-yy'
//});;
//}

$('#ActivityTime,#ActivityTime1').timepicker({ 'forceRoundTime': false, 'minTime':'6:00', 'maxTime':'23:00' });; 

for(a=0;a<31;a++){
$('#Activity'+a+'Time1').timepicker({ 'forceRoundTime': false, 'minTime':'6:00', 'maxTime':'23:00' });; 
}
for(a=0;a<31;a++){
$('#Activity'+a+'Time').timepicker({ 'forceRoundTime': false, 'minTime':'6:00', 'maxTime':'23:00' });; 
}
for(a=0;a<31;a++){
$('#Activity'+a+'Date').datepicker({
  dateFormat:'M-dd-yy'
});;
}


$(document).ready(function() {
$('#CustomerApplicationDate,#ChargeEndDate').datepicker(
{
dateFormat: 'M-dd-yy',
changeMonth: true,
      changeYear: true,
       maxDate: 0,
}
);
$('#url,#CustomerDischargeDate,#ChargeStartDate,#WaterLogDate,#QualityReportDate').datepicker(
{
         dateFormat: 'M-dd-yy',
         changeMonth: true,
               changeYear: true,
                maxDate: 0,
}
);
$('#Activity0Date,#ActivityDate,#datedaytrack').datepicker(
{
         dateFormat: 'M-dd-yy',
         
}
);

$('#TodoDate').datepicker(
{
 dateFormat: 'M-dd-yy',
        changeMonth: true,
              changeYear: true,
               minDate: 0,

}
  );

    $(document).ready(function () {
    
        $('#from').datepicker({
           dateFormat: 'M-dd-yy',
            maxDate:0,
            onSelect: function (date) {
                var date2 = $('#from').datepicker('getDate');
                date2.setDate(date2.getDate());
                $('#to').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#to').datepicker('option', 'minDate', date2);
            }
        });
        $('#to').datepicker({
           dateFormat: 'M-dd-yy',
            maxDate:0,
            onClose: function () {
                var dt1 = $('#from').datepicker('getDate');
                console.log(from);
                var to = $('#to').datepicker('getDate');
                if (to <= from) {
                    var minDate = $('#to').datepicker('option', 'minDate');
                    $('#to').datepicker('setDate', minDate);
                }
            }
        });
    });

 $(document).ready(function () {
    
        $('#BillingFromDate').datepicker({
            dateFormat: 'M-dd-yy',
            maxDate:0,
            onSelect: function (date) {
                var date2 = $('#BillingFromDate').datepicker('getDate');
                date2.setDate(date2.getDate());
                $('#BillingTillDate').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#BillingTillDate').datepicker('option', 'minDate', date2);
            }
        });
        $('#BillingTillDate').datepicker({
            dateFormat: 'M-dd-yy',
            maxDate:0,
            onClose: function () {
                var dt1 = $('#BillingFromDate').datepicker('getDate');
                console.log(from);
                var to = $('#BillingTillDate').datepicker('getDate');
                if (to <= from) {
                    var minDate = $('#BillingTillDate').datepicker('option', 'minDate');
                    $('#BillingTillDate').datepicker('setDate', minDate);
                }
            }
        });
    });





$('#editurl,#ActivityRegistrationDateOfRegistration,#ActivityDate,#CustomerAdmissionDate').datepicker(
{
        dateFormat: 'M-dd-yy',
        changeMonth: true,
              changeYear: true,
               maxDate: 0,
}
);
$('#CustomerAttendance').datepicker(
{
	// Code edited for Search Customer Attendance
       dateFormat: 'M-dd-yy',
       changeMonth: true,
             changeYear: true,
              maxDate: 0,
}
 );
$('#EventEventDate,#CustomerAuthExpiry,#EmployeeHireDate,#VacationCalenderVacationFrom').datepicker(
{
       dateFormat: 'M-dd-yy',
       changeMonth: true,
             changeYear: true,
              yearRange: '1980:2015'
}
 );
$('#VendorMasterSetupDate,#EmployeeDateOfBirth,#VacationCalenderVacationTo').datepicker(
{
       dateFormat: 'M-dd-yy',
       changeMonth: true,
             changeYear: true,
              yearRange: '1980:2015'
}
 );
$('#EmployeeTerminationDate,#VehicleNextInspectionDate').datepicker(
{
       dateFormat: 'M-dd-yy',
       changeMonth: true,
             changeYear: true,
}
 );
$('#EmployeeLastDayWorked,#VehicleRegistrationExpiryDate').datepicker(
{
       dateFormat: 'M-dd-yy',
       changeMonth: true,
             changeYear: true,
}
 );

$('#Date').datepicker({
      dateFormat: 'M-dd-yy',
      changeMonth: true,
            changeYear: true,
             maxDate: 0,

});
$('#CustomerDateOfBirth').datepicker({
      dateFormat: 'M-dd-yy',
      changeMonth: true,
            changeYear: true,
        yearRange: "-120:-40",
          defaultDate: '-40Y'
});

$('#EmployeeDateOfBirth').datepicker({
      dateFormat: 'M-dd-yy',
      changeMonth: true,
            changeYear: true,
        yearRange: "-120:-50",
          defaultDate: '-50Y'
});

$('.feat').smoothScroll();

$("#datedaytrack,#url,#VehicleRegistrationExpiryDate,#CustomerDischargeDate,#CustomerApplicationDate,#BillingFromDate,#EventEventDate,#CustomerAuthExpiry,#TodoDate,#from,#EmployeeDateOfBirth").focusin(function() {
   $("#datedaytrack,#url,#VehicleRegistrationExpiryDate,#CustomerDischargeDate,#CustomerApplicationDate,#BillingFromDate,#EventEventDate,#CustomerAuthExpiry,#TodoDate,#from,#EmployeeDateOfBirth").attr("readonly", true);  
});
$("#datedaytrack,#url,#VehicleRegistrationExpiryDate,#CustomerDischargeDate,#CustomerApplicationDate,#BillingFromDate,#EventEventDate,#CustomerAuthExpiry,#TodoDate,#from,#EmployeeDateOfBirth").focusout(function() {
   $("#datedaytrack,#url,#VehicleRegistrationExpiryDate,#CustomerDischargeDate,#CustomerApplicationDate,#BillingFromDate,#EventEventDate,#CustomerAuthExpiry,#TodoDate,#from,#EmployeeDateOfBirth").attr("readonly", false);
});
$("#ActivityRegistrationDateOfRegistration,#VehicleNextInspectionDate,#CustomerAdmissionDate,#BillingTillDate,#ChargeEndDate,#to,#EmployeeHireDate").focusin(function() {
   $("#ActivityRegistrationDateOfRegistration,#VehicleNextInspectionDate,#CustomerAdmissionDate,#BillingTillDate,#ChargeEndDate,#to,#EmployeeHireDate").attr("readonly", true);  
});
$("#ActivityRegistrationDateOfRegistration,#VehicleNextInspectionDate,#CustomerAdmissionDate,#BillingTillDate,#ChargeEndDate,#to,#EmployeeHireDate").focusout(function() {
   $("#ActivityRegistrationDateOfRegistration,#VehicleNextInspectionDate,#CustomerAdmissionDate,#BillingTillDate,#ChargeEndDate,#to,#EmployeeHireDate").attr("readonly", false);
});
$("#CustomerAttendance,#VendorMasterSetupDate,#EmployeeLastDayWorked,#VacationCalenderVacationFrom").focusin(function() {
    $("#CustomerAttendance,#VendorMasterSetupDate,#EmployeeLastDayWorked,#VacationCalenderVacationFrom").attr("readonly", true);
 });
 $("#CustomerAttendance,#VendorMasterSetupDate,#EmployeeLastDayWorked,#VacationCalenderVacationFrom").focusout(function() {
    $("#CustomerAttendance,#VendorMasterSetupDate,#EmployeeLastDayWorked,#VacationCalenderVacationFrom").attr("readonly", false);
 });
$("#CustomerDateOfBirth,#EmployeeDateOfBirth,#ChargeStartDate,#WaterLogDate,#QualityReportDate,#EmployeeTerminationDate,#VacationCalenderVacationTo").focusin(function() {
   $("#CustomerDateOfBirth,#EmployeeDateOfBirth,#ChargeStartDate,#WaterLogDate,#QualityReportDate,#EmployeeTerminationDate,#VacationCalenderVacationTo").attr("readonly", true);  
});
$("#CustomerDateOfBirth,#EmployeeDateOfBirth,#ChargeStartDate,#WaterLogDate,#QualityReportDate,#EmployeeTerminationDate,#VacationCalenderVacationTo").focusout(function() {
   $("#CustomerDateOfBirth,#EmployeeDateOfBirth,#ChargeStartDate,#WaterLogDate,#QualityReportDate,#EmployeeTerminationDate,#VacationCalenderVacationTo").attr("readonly", false);
});




$('#footer').css('margin-top',$(document).height() - ($('.navbar').height() + $('.container-fluid').height()  )
 - $('#footer').height());
});
</script>

  </body>
</html>