<?php 
$to="rambabburi@gmail.com,info@company.com";
$subject="Testing";
$message="Hello Ram,<br><br>Thanks
for creating an account with us.
please activate your account to get
services of our website<br><br>
<a href=''>Activate Now</a><br><br>
Thnaks<br>Team";

$mheaders="Content-Type:text/html".'\r\n'.
"cc:ram@mail.com".'\r\n'.
"from:info@company.com".'\r\n'.
"reply-to:contact@company.com";

mail($to,$subject,$message,$mheaders);



?>