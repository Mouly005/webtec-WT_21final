<?php
session_start();
?>
<html>
<head>

</head>
<h1 align="center">
<body>
<h1>WELCOME USERPAGE <?php echo $_SESSION["login"];?></h1>
<a href = "All category.php">All category</a><br>
<a href ="Add categories.php">Add categories</a><br>
<a href ="Add products.php">Add products</a><br>
<a href ="All products.php">All products</a><br>

</body>
</html>
