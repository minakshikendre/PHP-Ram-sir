<html>
	<head>
		<title>All Users</title>
		<style>
			
			.user{
				background:green;
				color:yellow;
				width:25%;
				margin:4px;
				float:left;
				height:120px;
				padding:5px;
				border-radius:10px;
			}
		</style>
	</head>
	<body>
		<h1>All Users</h1>
		<div class="main">
			<?php 

			$con=mysqli_connect("localhost","root","","7am");
			$result=mysqli_query($con,"select *from contact");
			$length=mysqli_num_rows($result);


			for($i=0;$i<$length;$i++)
			{
				$rec=mysqli_fetch_row($result);
				echo "<div class='user'>";
				echo "ID:".$rec[0]."<br>";
				echo "Name:".$rec[1]."<br>";
				echo "Email:".$rec[2]."<br>";
				echo "Mobile:".$rec[3]."<br>";
				echo "Message:".$rec[4]."<br>";
				echo "</div>";
			}
			?>
		
		</div>
	</body>
</html>