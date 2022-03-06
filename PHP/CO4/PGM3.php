<?php
$name=array("Neha","keerthana","wamika","varun","manual","febin","nidarm");
echo "Result of print_r:<br>";
print_r($name);
echo "<br>";
echo "<br>";
echo "Result of asort():<br>";
asort($name);
foreach($name as $x)
{
 echo "$x";
 echo "<br>";
}
echo"<br>";
echo"<br>";
echo "Result of arsort():<br>";
arsort($name);
foreach($name as $x)
{
 echo "$x";
 echo "<br>";
}
?>


