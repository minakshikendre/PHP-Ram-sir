<html>
	<head>
		<title>Session and Cookie</title>
	</head>
	<body>
		<h1>Person 3</h1>
		<form method="POST" action="p4.php">
			Person3:<input type="text" 
			name="p3">
			<input type="submit" value="Go">
		</form>
	</body>
</html>

<?php 

		setcookie("num2",$_POST['p2'],time()+60);

?>