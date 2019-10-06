<pre><?php 
$con=mysqli_connect("localhost","root","","7am");
$result=mysqli_query($con,"select *from contact");
$row=mysqli_fetch_object($result);
print_r($row);
?>