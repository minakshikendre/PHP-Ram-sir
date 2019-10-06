<?php 
$to="admin@gmail.com";
$subject="Test Email";
$message="Hi How are you?
a person contacted details are bwlo:
";
if(mail($to,$subject,$message))
{
	echo "Mail Success";
}
else
{
	echo "Error";
}

?>