<?php'include main header.php'; ?>

<html>
<title>
Add products
</title>
<body>
<form action="" method="post"> 
Product Name:<input type="text" placeholder="product name" name="product name"><br>
Product Purpose:<input type="text" placeholder="product purpose" name="product purpose"><br>
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
