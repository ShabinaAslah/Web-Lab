<?php
$stu=array("mariya","irfana","sneha","kavya");
echo "<h2>Array Befor sorting:</h2>";
print_r ($stu);
echo "<br><br>";

asort($stu);
echo"<h2>Array after Ascending sort:</h2>";
print_r($stu);
echo "<br><br>";

arsort($stu);
echo"<h2>Array after Ascending sort:</h2>";
print_r($stu);
?>
