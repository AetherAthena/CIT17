<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays Exercises</title>
</head>
<body>
<?php
echo("PHP Arrays Exercise 1<br>");

$weather = array("rain","sunshine","clouds","hail","sleet","snow","wind");
echo("We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].<br><br>");

echo("PHP Arrays Exercise 2<br>");
$city = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");

foreach ($city as $value) {
    echo "$value, ";
}
echo "<br><br>";
echo("Unordered List<br>");
sort($city);
echo "<ul>";
foreach ($city as $value) {
    echo "<li>$value</li><br>";
}
echo "</ul>";
array_push($city,"Los Angeles","Calcutta","Osaka","Beijing");
echo("Unordered List with Additional Cities<br>");
sort($city);
echo "<ul>";
foreach ($city as $value) {
    echo "<li>$value</li><br>";
}
echo "</ul>";
?>
</body>
</html>

