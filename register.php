<?php 
$con=mysqli_connect("localhost","root","","7am");
?>
<html>
	<head>
		<title>Register Here</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<div class='container'>
			<h1>Register Here</h1>
			<?php 
			if(isset($_POST['register']))
			{
				$name=$_POST['uname'];
				$email=$_POST['email'];
				$pass=md5($_POST['pwd']);
				$gender=(isset($_POST['gender']))?$_POST['gender']:"";
				$terms=(isset($_POST['terms']))?$_POST['terms']:"";
				$state=$_POST['state'];
				$ip=$_SERVER['REMOTE_ADDR'];
				
				
				
				mysqli_query($con,
				"INSERT INTO register(username,email,
				password,gender,state,terms,ip) values('$name',
				'$email','$pass','$gender','$state','$terms',
				'$ip')");
				if(mysqli_affected_rows($con)==1)
				{
					$uid=base64_encode(mysqli_insert_id($con));
					$subject="Account Activation-GoPHP";
					$message="Hi ".$name.",<br> Thanks
					for creating an account with us.
					please click the below link to
					activate your account<br><br>
					<a target='_blank' href='http://localhost/7am/activate.php?id=$uid'>Activate Now</a><br><br>
					Thanks<br>Go Team";
					$mheaders="Content-Type:text/html";
					if(mail($email,$subject,$message,$mheaders))
					{
						echo "<p class='alert alert-success'>Account Created successfully.Please activate Now</p>";
					}
				}
				
			}
			?>
			
			<form action="" method="POST" onsubmit="return regValidation()">
				<table class="table">
					<tr>
						<td>UserName</td>
						<td>
							<input class="form-control" type="text" name="uname" id="uname" onblur="checkError(this)">
							<span class="text-danger" id="uname_err"></span>
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>
							<input class="form-control" type="text" name="email" id="email" onblur="checkError(this)">
							<span class="text-danger" id="email_err"></span>
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input class="form-control" type="password" name="pwd" id="pwd" onblur="checkError(this)">
							<span class="text-danger" id="pwd_err"></span>
						</td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td>
							<input class="form-control" type="password" name="cpwd" id="cpwd" onblur="checkError(this)">
							<span class="text-danger" id="cpwd_err"></span>
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<input  type="radio" value="Male" name="gender" id="gender">Male
							<input  type="radio" value="Female" name="gender" id="gender1">Female
						</td>
					</tr>
					<tr>
						<td>State</td>
						<td><select class="form-control" name="state" id="state">
							<option>--Select State--</option>
							<option value="Andhrapradesh">Andhrapradesh</option>
							<option value="Telangana">Telangana</option>
							<option value="Maharastra">Maharastra</option>
							<option value="Uttarapradesh">Uttarapradesh</option>
						</select></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="checkbox" name="terms" id="terms" value="1"> Please Accept Terms and Conditions</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="register" value="Register" class="btn btn-primary"></td>
					</tr>
				</table>
			</form>
		</div>
		<script>
			function regValidation()
			{
				if(document.getElementById("uname").value=="")
				{
					document.getElementById("uname_err").innerHTML="This field is required";
					document.getElementById("uname").focus();
					return false;
				}
				if(document.getElementById("email").value=="")
				{
					document.getElementById("email_err").innerHTML="This field is required";
					document.getElementById("email").focus();
					return false;
				}
				if(document.getElementById("pwd").value=="")
				{
					document.getElementById("pwd_err").innerHTML="This field is required";
					document.getElementById("pwd").focus();
					return false;
				}
				if(document.getElementById("cpwd").value=="")
				{
					document.getElementById("cpwd_err").innerHTML="This field is required";
					document.getElementById("cpwd").focus();
					return false;
				}
				if(document.getElementById("cpwd").value != document.getElementById("pwd").value)
				{
					document.getElementById("pwd_err").innerHTML="Passwords Does not Matchd";
					document.getElementById("pwd").focus();
					return false;
				}
				
			
			}
			function checkError(ele)
			{
				if(ele.value!="")
				{
					document.getElementById(ele.id+"_err").innerHTML="";
				}
			}
		</script>
	</body>
</html>