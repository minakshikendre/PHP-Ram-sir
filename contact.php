<html>
	<head>
		<title>Contact Here</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script>
			function validate()
			{
				var name=document.getElementById("name").value
				if(name=="")
				{
					alert("Please Enter Name");
					return false;
				}
				var email=document.getElementById("email").value
				if(email=="")
				{
					alert("Please Enter Email");
					return false;
				}
				var mobile=document.getElementById("mobile").value
				if(mobile=="")
				{
					alert("Please Enter Mobile");
					return false;
				}
			}
		</script>
	</head>
	<body>
		<div class="container">
		<?php 
		//3rd step
		if(isset($_POST['contact']))
		{
			$cname=$_POST['name'];
			$cemail=$_POST['email'];
			$cmobile=$_POST['mobile'];
			$cmsg=$_POST['msg'];
			
			//connect to DB
			$con=mysqli_connect("localhost","root","","7am");
			mysqli_query($con,"insert into contact values(NULL,'$cname','$cemail','$cmobile','$cmsg')");
			//echo mysqli_error($con);
			if(mysqli_affected_rows($con)==1)
			{
				echo "<p class='alert alert-success'>Thanks, We will get back you soon</p>";
			}
		}	
		?>
		
			<h1>Contact Here</h1>
			<form action="" method="POST" onsubmit="return validate()">
				<table class="table table-striped">
					<tr>
						<td>Name*</td>
						<td><input class="form-control" type="text" name="name" id="name"></td>
					</tr>
					<tr>
						<td>Email*</td>
						<td><input class="form-control" type="text" name="email" id="email"></td>
					</tr>
					<tr>
						<td>Mobile*</td>
						<td><input class="form-control" type="text" name="mobile" id="mobile"></td>
					</tr>
					<tr>
						<td>Message</td>
						<td><textarea class="form-control" name="msg"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn btn-primary" type="submit" name="contact" value="Send"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>