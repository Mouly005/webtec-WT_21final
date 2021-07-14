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
			header("Location:login.php");
		}
		}
		echo "Invaild user";
		
	}
	if (empty($_POST["Sign_up"])){
		if (empty($_POST["sign_up"])){
			$err_sign_up="required sign_up";
			$hasError=true;
		}
		else{
			$sign_up=$_POST["sign_up"];
		}
	}
	
}
?>
<html>
<head>
<h1 align="center">
<h1> Sign_up Page</h1>
</head>
<body>

<form action="" method="post">
Username:<input type="text" placeholder="username" value="<?php echo $uname;?>" name="uname"><span><?php echo $err_uname;?></span></br>
Password:<input type="text" placeholder="password" value="<?php echo $pass;?>" name="pass"><span><?php echo $err_pass;?></span></br>
Email:<input type="text" placeholder="email" name="email"></br>
Phone Number<input type="numaric" placeholder="phone number" name="phone number"></br>
Sign up:<input type="Sign up" placeholder="sign up" name="sign up">
Submit:<input type="submit" placeholder="Login" name="Login"></br>
</form>
</body>
</html>