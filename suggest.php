<?php
$a[]="c";
$a[]="C";
$a[]="c++";
$a[]="C++";
$a[]="java";
$a[]="JAVA";
$a[]="Web Development";
$a[]="web development";
$a[]="am";
$a[]="Am";
$q=$_GET["q"];
if(strlen($q) > 0)
{
	$hint="";
	for($i=0; $i<count($a);$i++)
	{
		if(strtolower($q)==strtolower(substr($a[$i],0,strlem($q))))
		{
			if($hint=="")
			{
				$hint=$a[i];
			}
			else
			{
				$hint=$hint.",".$a[$i];
			}
		}
	}
}
if(hint=="")
{
	$response="no suggestion";
	
}
else{
	$reset=$hint;
}
echo $response;
?>




