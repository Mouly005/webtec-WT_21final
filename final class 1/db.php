<?php
$db_server="localhost";
$db_name="root";
$db_pass="";
$db_Dataname="assignment";


$conn= mysqli_connect($db_server,$db_name,$db_pass,$db_Dataname);

if($conn){
	//echo "connected";?
	echo "<pre>";
	var_dump($conn);
	echo"</pre>";
}
else{
	echo "not connected";
}
$query="insert into login values(NULL,'megla','0987')";
mysqli_query($conn $query);
?>