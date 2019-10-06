<html>
	<head>
		<title>Session and Cookie</title>
	</head>
	<body>
		<h1>Person 2</h1>
		<form method="POST" action="p3.php">
			Person2:<input type="text" 
			name="p2">
			<input type="submit" value="Go">
		</form>
	</body>
</html>

<?php setcookie("num1",$_POST['p1'],time()+60);?>




