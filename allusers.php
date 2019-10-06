<html>
	<head>
		<title>All Users</title>
		<style>
		.head{
			text-align:center;
		}
		.error{
			text-align:center;
		}
		table{
			border-collapse:collapse;
		}
		table tr td,table tr th{
			border:1px solid;
			padding:10px;
		}
		tr:nth-child(odd)
		{
			background:#efefef;
		}
		tr:hover{
			background:#d4d4d4;
		}
		</style>
	</head>
	<body>
		<div class='main'>
			<h1 class='head'>All Users</h1>
			<?php 
			$con=mysqli_connect("localhost",
			"root","","7am");
			$result=mysqli_query($con,
			"select *from contact");
			$len=mysqli_num_rows($result);
			if($len>0)
			{
				?>
				<table align="center">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>EMail</th>
						<th>Mobile</th>
						<th>Message</th>
					</tr>
					<?php 
					for($i=0;$i<$len;$i++)
					{
						$row=mysqli_fetch_row($result);
						echo "<tr>
							<td>$row[0]</td>
							<td>$row[1]</td>
							<td>$row[2]</td>
							<td>$row[3]</td>
							<td>$row[4]</td>
						</tr>";
					}
					?>
				</table>
				<?php
			}
			else
			{
				echo "<P class='error'>
				Sorry! No records Found</p>";
			}
			?>
			
		</div>
	</body>
</html>
