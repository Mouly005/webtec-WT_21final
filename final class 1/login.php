<?php 'include main header.php';?>

<?php
session_start();
$Uname="";
$err_uname="";
$pass="";
$err_pass="";
$sign_up="";
$err_sign_up="";
$hasError=false;
 $users= array("mouly"=>"1234" ,"akib" =>"1234" ,"megla"=>"1234");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["uname"])){
		$err_uname="requried uname";
		$hasError=true;
	}
	else{
		$uname=$_POST["uname"];
	}
	if(empty($_POST["pass"])){
		$err_pass="required pass";
		$hasError=true;
	}
	else{
		$pass=$_POST["pass"];
	}
	if(!$hasError){
		foreach($users as $u=>$p){
			if($uname==$u && $pass==$p){
				$_SESSION["login"]=$uname;
			header("Location:dashboard.php");
		}
		}
		echo "Invaild user";
		
	}

	}
	

?>
<html>
<head>
<h1 align="center">
<h1> LOGIN PAGE</h1>
</head>
<body>

<form action="" method="post">
Username:<input type="text" placeholder="username" value="<?php echo $uname;?>" name="uname"><span><?php echo $err_uname;?></span><br>
Password:<input type="password" placeholder="password" value="<?php echo $pass;?>" name="pass"><span><?php echo $err_pass;?></span><br>
Submit:<input type="submit" placeholder="Login" name="Login"><br>
<a href= "signup.php">Sign_up</a>
</form>
</body>
</html>
<?php 'include footer.php';?>