<html>
	<head>
		<title>Register Here</title>
	</head>
	<body>
		<h1>Register Here</h1>
		
		<?php 
		if(isset($_POST['reg']))
		{
			$name=$_POST['uname'];
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			$cpass=$_POST['cpwd'];
			//echo $name,$email,$pass;
			//print_r($_POST);
			
			//connect to DB
			//Insert the data into Tables
			
			
		}
		?>
		
		<form method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" 
					name="uname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" 
					name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" 
					name="pwd"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" 
					name="cpwd"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" 
					value="Register" name="reg"></td>
				</tr>
			</table>
		</form>
	</body>
</html>