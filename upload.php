<html>
	<head>
		<title>Uploading</title>
	</head>
	<body>
		<h1>File Uploading</h1>	
		<?php 
		if(isset($_POST['reg']))
		{
			$name=$_POST['uname'];
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			
			if(is_uploaded_file($_FILES['image']['tmp_name']))
			{
				$filename=$_FILES['image']['name'];
				$type=$_FILES['image']['type'];
				$tname=$_FILES['image']['tmp_name'];
				$size=$_FILES['image']['size'];
				
				$valid=array(
					"image/jpeg",
					"image/jpg",
					"image/png",
					"image/gif"
				);
				
				$str=str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890");
				$name=substr($str,5,15);
				$newname=$name.$filename;
				
				
				if(in_array($type,$valid))
				{
					$status=move_uploaded_file($tname,
					"uploads/$newname");
					if($status==1)
					{
						echo "<p>File Uploaded 
						Successfully</p>";
					}
					else
					{
						echo "<p>Sorry! Unable 
						to Upload. Try Again</p>";
					}
				}
				else
				{
					echo "Please Select a valid 
					image type";
				}
				
			}
			else
			{
				echo "<p>Please Select 
				A File</p>";
			}
			
		}
		?>
		
		<form method="POST" action="" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Username*</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Email*</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password*</td>
					<td><input type="password" name="pwd"></td>
				</tr>
				<tr>
					<td>Upload Profile Pic</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="reg" value="Register"></td>
				</tr>
			</table>
			
		</form>
	</body>
</html>