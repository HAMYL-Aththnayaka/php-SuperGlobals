<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
		<body>

			<?php
   
			echo "PHP "GLOBAL" usgaes";

			$x =75;

			function myfunction1(){
				echo $GLOBALS["x"];
				echo "<br>";
				}

				myfunction1();
				

				function myfunction2(){

				echo $x;
				echo "<br>";

				}
				myfunction2();

				

				function myfunction3(){
					$GLOBALS ["Y"]= 100;	
				}
				myfunction3();
				echo $GLOBALS["Y"];
				echo "<br>";
				echo $Y;
				echo "<br>";






			?>



		</body>
</html>