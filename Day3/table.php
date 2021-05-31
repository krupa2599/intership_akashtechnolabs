<?php

echo "<table border='10'>";
for($i=0;$i<=10;$i++)
{
	echo "<tr>";
	if ($i%2==0)
	{
		echo "<td bgcolor='yellow'>$i</td>";
	}
	else
	{
		echo "<td bgcolor= 'orange'>$i</td>";
	}
	echo "</tr>";
}

echo "</table>";