<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table</title>
	<style>
		.gray{
			background-color: #CFCFCF;
		}
		.bold{
			font-weight: bold;
			font-style: italic;
			background-color: #3c3c9e;
			color: yellow;
		}
		table{
			border-collapse:collapse;
			text-align: center;
		}
		table td{
			padding: 10px 10px;
		}
	</style>
</head>
<body>



<?php

echo "<table border=2>";
	echo '<tr>';
		for ($k=0; $k<=10; $k++)
		{
			echo '<td class="bold">'.$k.'</td>';
		}
	echo '</tr>';
for($i=1; $i<=10; $i++)
{
	if($i%2==0)
			{
				echo "<tr class='gray'>";

			}
			else
			{
				echo "<tr>";
			}
			echo '<td class="bold">'.$i.'</td>';
		for($j=1; $j<=10; $j++)
		{
			echo "<td>".$i*$j."</td>";
		}
	echo "</tr>";
}


echo '</table>';
?>
</body>
</html>