<html>
	<head>
		<title>Multiple File Uploading</title>
	</head>
	<body>
		<h1>Multiple File Uploading</h1>	
		<?php 
		if(isset($_POST['reg']))
		{
			
			$c=count($_FILES['image']['name']);
			for($i=0;$i<$c;$i++)
			{
				if(is_uploaded_file($_FILES['image']['tmp_name'][$i]))
				{
					$filename=$_FILES['image']['name'][$i];
					$type=$_FILES['image']['type'][$i];
					$tname=$_FILES['image']['tmp_name'][$i];
					$size=$_FILES['image']['size'][$i];
					
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
							echo "<p>$filename Uploaded 
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
						echo "<p>$filename is not a valid 
						image type</p>";
					}
					
				}
				else
				{
					echo "<p>Please Select 
					A File</p>";
				}
			}
			
			
		}
		?>
		
		<form method="POST" action="" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Upload Profile Pic</td>
					<td><input type="file" name="image[]"
					multiple></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="reg" 
					value="Register"></td>
				</tr>
			</table>
			
		</form>
	</body>
</html>