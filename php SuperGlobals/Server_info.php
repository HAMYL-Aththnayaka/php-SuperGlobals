!DOCTYPE html>
<html>
<head>
	<title>SERVER INFO</title>
</head>
<body>
<?php
				echo "$_SERVER Usages ";
				echo $_SERVER["PHP_SELF"];
				echo "<br>";
				echo $_SERVER["SERVER_NAME"];
				echo "<br>";
				echo $_SERVER["HTTP_HOST"];
				echo "<br>";
				echo $_SERVER["HTTP_REFERER"];
				echo "<br>";
				echo $_SERVER["HTTP_USER_AGENT"];
				echo "<br>";
				echo $_SERVER["SCRIPT_NAME"];
				echo "<br>";

?>
</body>
</html>