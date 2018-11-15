<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script>
$(document).ready(function(){
    $("#btnsubmit").click(function(){
		
		if($('#name').val()=="" || $('#department').val()=="" || $('#major').val()=="" || $('#noc').val()=="" || $('#fpc').val()=="" || $('#ws').val()=="" || $('#noh').val()=="" || $('#tow').val()=="" || $('#pph').val()==""){
			alert("Fill all Fields First!")
			}
		else{
				
        var edata = $("#frmdata").serialize();    
			$.ajax({
		url:"submitapi.php",
		type:"POST",
		data:edata,
		beforeSend: function()
		{
			$("#btnsubmit").html("<center><i class='fa fa-spinner fa-spin'></center>");
		},
		success: function(res)
		{
		$("#btnsubmit").html('<span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>');	
		$("#frmdata").hide(500);
		$("#thanks").html(res);
		$("#thanks").show(500);

		}
		
		});
		}
    });
});
</script>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="frmdata">
				<span class="contact100-form-title">
					STUDENT DETAILS
				</span>

				
 				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" id="name" placeholder="Enter Your Name">
				</div>
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">DEPARTMENT NAME *</span>
					<input class="input100" type="text" name="department" id="department" placeholder="Enter Your Department">
				</div>
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">MAJOR *</span>
					<input class="input100" type="text" name="major" id="major" placeholder="Majors">
				</div>
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">NO OF CREDITS *</span>
					<input class="input100" type="text" name="noc" id="noc" placeholder="No of Credits">
				</div>
                 <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">FEE PER CREDIT *</span>
					<input class="input100" type="text"  name="fpc" id="fpc" placeholder="Pay Per Credit">
				</div>
                 <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">WORK STUDY *</span>
					<input class="input100" type="text" name="ws" id="ws" placeholder="Work Study">
				</div>
                 <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">NO OF HOURS WORK PER WEEK *</span>
					<input class="input100" type="text" name="noh" id="noh" placeholder="No Of Hours Work Per Week">
				</div>
                 <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">TYPE OF WORK *</span>
					<input class="input100" type="text" name="tow" id="tow" placeholder="Type Of work">
				</div>
                 <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">PAY PER HOUR *</span>
					<input class="input100" type="text" name="pph" id="pph" placeholder="Pay Per Hour">
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="button" id="btnsubmit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
            
            <h3 class="dis-none" id="thanks" style="text-align:center;"></h3>
		</div>
	</div>




</body>
</html>
