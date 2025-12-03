<?php
$player=array("sachin","boomrah","dhoni","kohli");
echo "<table border='1'>
			<tr>
				<th>SL no</th>
				<th>Player Name</th>
			</tr>";
			
$i=1;
foreach($player as$name){
		echo"<tr>
					<td>$i</td>
					<td>$name</td>
				</tr>";
				$i++;
}
echo "<?table>";
?>

