<?php
	include "connection.php";
?>

<?php
   include("header.php");
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login Page</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		
	</head>
	<script>
		function form()
		{
			var email=document.getElementById("uemail").value;
			if(email=="")
			{
				document.getElementById("userid").innerHTML="*email is invalid*";
				return false;
			}

			var pwd=document.getElementById("upwd").value;
			if(pwd=="")
			{
				document.getElementById("userpwd").innerHTML="*password is invalid*"
				return false;
			}
			

			if(pwd.length < 3 || pwd.length > 20)
			{
				document.getElementById("userpwd").innerHTML="*password  length must be between 3 and 20*";
				return false;
			}
			
		}
	</script>
	<body>
				
		<div class="container" style="color:maroon";>
			<div class="row">
				<center>
					<table>
						<form action="" method="POST" onsubmit="return form()">
				
						<div class="mt-5  mb-5" style="color:maroon";>
							<h1>Login Page</h1>
							
									 <div class="col-lg-9 mt-5">
										<div class="mb-3 row">
											<label for="staticEmail" class="col-sm-2 col-form-label" >Email</label>
												<div class="col-sm-10">
														<input type="text" name="txtemail" class="form-control" id="uemail" placeholder="enter Email" id="Email">
														<span id="userid" style="color:red"></span>
												</div>
										</div>
											<div class="mb-3 row">
												<label for="inputPassword"  class="col-sm-2 col-form-label" placeholder="enter Password">Password</label>
													<div class="col-sm-10">
														<input type="text" name="txtpwd" class="form-control" id="upwd" placeholder="Enter Password">
														<span id="userpwd" style="color:red"></span>
													</div>
											</div>
										<button class="btn btn-primary type-end" name="btnsubmit" style="background-color:aquamarine; color:maroon;">Login</button>

										&nbsp;&nbsp;&nbsp;
										<button class="btn btn-primary type-end" name="btnback" style="background-color:aquamarine; color:maroon;"><a href="index.php" style="text-decoration: none; color: maroon;">Back</a></button>
									</div>  
						</div>	
						</form>
					</table>
				</center>
			</div>
		</div>
	</body>
</html>




<?php
	if(isset($_REQUEST['btnsubmit']))
	{
		 $useremail=$_REQUEST['txtemail'];
		 $userpassword=$_REQUEST['txtpwd'];

		$res=mysqli_query($conn, "select * from movie where u_email='$useremail' and u_pass='$userpassword'");
		$result=mysqli_fetch_array($res);

		if($result)
		{
			echo '<script type="text/javascript">
					window.location="index.php"</script>';
		}
		else
		{
			echo"<script>alert('Your Email And Password Are Wrong !!'); </script>";
		}
	}
?>