<?php'include main header.php'; ?>

<html>
<title>
Add categories
</title>
<body>
<form action="" method="post"> 
Categories Name:<input type="text" placeholder=" categories name" name="categoriesname"><br>
Categories Purpose:<input type="text" placeholder="categories purpose" name="categories purpose"><br>
Submit:<input type="submit" name="submit">

</form>


<?php
$conn =mysqli_connect('localhost','root','','add categories');
//if(mysqli_connect_errno){
	//echo "connected";
//}
//else{
///	echo "connected";
//}


?>

</body>
</html>
<?php 'include footer.php'?>
