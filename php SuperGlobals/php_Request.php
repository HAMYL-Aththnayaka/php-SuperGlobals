<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
	<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = htmlspecialchars($_REQUEST['fname']);
if(empty($name)){
				echo "Name is Empty";
			}else{
				echo $name;
			}
		}	





	?>

</body>
</html>