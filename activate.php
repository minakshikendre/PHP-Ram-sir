<?php 
if(isset($_REQUEST['id']))
{
	$con=mysqli_connect("localhost","root","","7am");
	$uid=base64_decode($_REQUEST['id']);
	mysqli_query($con,"update register set status=1 where id=$uid");
	if(mysqli_affected_rows($con)==1)
	{
		echo "Account Activated Successfully. Please Login Now";
	}
	else
	{
		echo "Account already activated";
	}
}

?>







