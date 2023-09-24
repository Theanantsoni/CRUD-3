

<html>
	<head>
		<title>Registration Form</title>
	    
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<style>
		h1{
		text-align:left;
		}
		h6{
		text-align:center;
		}
		.labelLeft {
	margin-bottom: 5px;
    margin-left: 5px;
		}
		.formField{
		text-align:left;
		}
		
		</style>
		<script>
		function form()
		{
			var fname = document.getElementById("ufname").value;

			if(fname == "")
			{
				document.getElementById("ufirstname").innerHTML="*First Name Is Empty*" ;
				return false;
			}
			if(!isNaN(fname))
			{
				document.getElementById("ufname").innerHTML="*Numbers Are Not Allowed*";
                return false;
			}
			else
			{
				document.getElementById("ufirstname").innerHTML="";
			}
			
			
			var lname = document.getElementById("ulname").value;

			if(lname == "")
			{
				document.getElementById("ulastname").innerHTML="*Last Name Is Empty*" ;
				return false;
			}
			if(!isNaN(lname))
			{
				document.getElementById("ulastname").innerHTML="*Numbers Are Not Allowed*";
                return false;
			}
			else
			{
				document.getElementById("ulastname").innerHTML="";
			}

			var pwd= document.getElementById("upwd").value;

			if(pwd=="")
			{
				document.getElementById("upass").innerHTML="*password is empty*";
				return false;
			}

			if(pwd.length < 5 || pwd.length > 20)
			{
				document.getElementById("upass").innerHTML="*password length must be between 5 and 20*";
				return false;
			}

			var connpwd= document.getElementById("cpwd").value;
			if(connpwd=="")
			{
				document.getElementById("conpwd").innerHTML="*confirm password is empty*";
				return false;
			}
			if(connpwd.length <5 || cpwd.length>20)
			{
				document.getElementById("conpwd").innerHTML="*confirm password length must be between 5 and 20*";
				return false;
			}
			if(pwd != connpwd)
			{
				document.getElementById("conpwd").innerHTML="*password and confirm password not same*";
				return false;
			}

			var mobile=document.getElementById("umobile").value;
			if(mobile=="")
			{
				document.getElementById("usermobile").innerHTML="*mobile number is empty*";
				return false;
			}
			if(mobile.length >10 || mobile.length <10)
			{
				document.getElementById("usermobile").innerHTML="*mobile number is invalid*";
				return false;
			}

			var address=document.getElementById("uaddress").value;
			if(address=="")
			{
				document.getElementById("useraddress").innerHTML="*address is empty*";
				return false;
			}
			

		}

	</script>

	</head>
	<body>
		<div class="container" style="color:maroon";>
			<div class="row">
			<div class="col-md-6 offset-md-3">
				<div>
					<div class="mt-5 border p-2 bg-light shadow">
						<h6 class="mb-5" style="font-size:25";>Registration form<h6>
						<form action="insert.php" method="POST" onsubmit="return form()">
						<div class="row">

							<div class="mb-3 col-md-6 formField">
								<label class="labelLeft">Firstname</label>
								<input type="text" name="Firstname" class="form-control" id="ufname" placeholder="Enter Firstname">
								<span id="ufirstname" style="color:red"></span>
							</div>
							<div class="mb-3 col-md-6 formField">
								<label class="mb-2 ms-2">Lastname</label>
								<input type="text" name="Lastname" class="form-control" id="ulname" placeholder="Enter Lastname">
								<span id="ulastname" style="color:red"></span>
							</div>

							<div class="mb-3 col-md-12 formField">
								<label class="labelleft">Email</label>
								<input type="text" name="email" class="form-control" id="uemail" placeholder="Enter Email-id">
								<span id="uemail" style="color:red"></span>
							</div>
							<div class="mb-3 col-md-6 formField">
								<label class="labelleft">Password</label>
								<input type="Password" name="Password" class="form-control" id="upwd" placeholder="Enter Password">
								<span id="upass" style="color:red"></span>
							</div>
							<div class="mb-3 col-md-6 formField">
								<label class="labelleft">Confirm Password</label>
								<input type="Password" name="Cpassword" class="form-control" id="cpwd" placeholder="Confirm password">
								<span id="conpwd" style="color:red"></span>
							</div>
							<div class="mb-3col-md-12 formField">
								<label class="labelleft">Mobile no.</label>
								<input type="text" name="umob" class="form-control" id="umobile" placeholder="Enter Mobile no."><br>
								<span id="usermobile" style="color:red"></span>
							</div>
							<div class="mb-3 col-md-12 formField">
								<label class="labelleft">Address</label>
								<input type="text" name="Address" class="form-control" id="uaddress" placeholder="Enter Address">
								<span id="useraddress" style="color:red"></span>
							</div>								
						</div>
						<button class="btn btn-primary type-end" name="submit" style="background-color:maroon;">sign up</button>
						<button class="btn btn-primary type-end" name="btnback" style="background-color:maroon; color:maroon;"><a href="index.php" style="text-decoration: none; color: white;">Back</a></button>
						</form>
						
					</div>
					
				</div>
              </div>
			  
			  </div>
		</div>
	</body>
</html>

