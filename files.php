<?php 

//echo mkdir("includes");
/*$dir="images";
$fp=opendir($dir);
for(;$filename=readdir($fp);)
{
	if(!($filename =="." || $filename==".."))
	{
		$pos=stripos($filename,".");
		$type=substr($filename,$pos);
		
		if($type==".jpg" || $type==".png")
		{
			echo "<img height='100' width='100'
			src='images/$filename'/>";
		}
	}
}
*/



/*if(file_exists($dir))
{
	echo $dir." is already created";
}
else
{
	mkdir($dir);
	echo $dir." created successfully";
}
*/

/*$file="welcome.txt";
if(file_exists($file))
{
	unlink($file);
	echo $file." is Deleted Successfully";
}
else
{
	echo $file." is Not exists";
}
*/
//echo file_exists("mail.php");//1

//echo is_file("hi.txt");

//echo readfile("hi.txt");

//s_uploaded_file()
//move_uploaded_file()


//echo file_put_contents("hi.text","hello World");

/*$data=file_get_contents("test.java");
print_r(json_decode($data));
*/
/*echo file_get_contents("hi.txt");
/*echo file_get_contents("hi.txt");
*/
//$data=file_get_contents("php://input");

/*$fp=fopen("http://facebook.com","r");
echo fread($fp,100000000);
*/


/*$fp=fopen("hi.txt","r");
$size=filesize("hi.txt");
echo fread($fp,$size);
*/

/*$fp=fopen("C:\Users\php\Desktop\welcome.pdf","a");
echo fwrite($fp,"Telanagana 500038");
*/

/*$fp=fopen("hi.txt","r");
//echo fread($fp,filesize("hi.txt"));
while($line=fgetss($fp))
{
	echo $line."<br>";
}
var_dump($line);
*/

?>