<?php 
$x=200;
$y=300;

function add()
{
	$z=$GLOBALS['x']+$GLOBALS['y'];
	echo $z;
}

add();
?>