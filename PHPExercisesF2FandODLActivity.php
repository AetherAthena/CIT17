<!DOCTYPE html>
<html>
<head>
	<title>VINOYA PHP Exercises F2F Activity</title>
</head>
<body>
	<?php
		echo("PHP exercise 1 <br>");
		echo ("Twinkle, Twinkle little star. <br>");
		$word1 = "Twinkle";
		$word2 = " star";
		echo ("$word1" . "$word2 <br>");
		$word1 = "whatever you like";
		$word2 = " echo the statement a third time";
		echo ("$word1" . "$word2 <br><br>");
		
		echo("PHP exercise 2<br>");
		$x=10;
		$y=7;
		print("10 + 7 = " . ($x+$y) . "<br>");
		print("10 - 7 = " . ($x-$y) . "<br>");
		print("10 * 7 = " . ($x*$y) . "<br>");
		print("10 / 7 = " . ($x/$y) . "<br>");
		print("10 % 7 = " . ($x%$y) . "<br><br>");

		echo("PHP exercise 3<br>");
		$var = 8;
		echo("Value is now " . ($var) . ".<br>");
		echo("Add 2. Value is now " . ($var = $var+2) . ".<br>");
		echo("Subtract 4. Value is now " . ($var = $var-4) . ".<br>");
		echo("Multiply by 5. Value is now " . ($var = $var*5) . ".<br>");
		echo("Divide by 3. Value is now " . ($var = $var/3) . ".<br>");
		echo("Increment value by one. Value is now " . ($var = $var+1) . ".<br>");
		echo("Decrement value by one. Value is now " . ($var = $var-1) . ".<br><br>");

		echo("PHP exercise 4<br>");
		$a = "Harry";
		var_dump($a);
		echo("<br>");
		print("Harry");
		echo("<br>");
		$b = 28;
		var_dump($b);
		echo("<br>");
		$c = NULL;
		var_dump($c);
		echo("<br><br>");

		echo("PHP exercise 5<br>");
		$around = "around";
		echo('What goes ' . $around . ', comes ' . $around . '. <br><br>');

		echo("PHP exercise 6<br>");
		for($i = 1; $i<=12; $i++){
			print("$i * $i = " . ($i*$i) . "<br>");
		}
		echo("<br>");

		echo("PHP exercise 7<br>");
		for($x = 1; $x<=7; $x++){
			for($y = 1; $y<=7; $y++){
				echo(($x*$y) . " ");
			}
			echo("<br>");
		}
	?>
</body>
</html>