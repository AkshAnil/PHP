<?php
	echo "<h1>Associative Array</h1>";
	
	$student = array("Manan"=>1000, "Manan"=>1500, "Akash"=>2000);
	
	echo "Pocket Money of Mananis: ". $student['Manan']. "<br>";
	echo "Pocket Money of Ranbir is: ". $student['Ranbir']. "<br>";
	echo "Pocket Money of Akash is: ". $student['Akash']. "<br><br>";

	$student['Manan'] = "High";
	$student['Ranbir'] = "Medium";
	$student['Akash'] = "Low";
	
	echo "Pocket Money of Mananis: ". $student['Manan']. "<br>";
	echo "Pocket Money of Ranbir is: ". $student['Ranbir']. "<br>";
	echo "Pocket Money of Akash is: ". $student['Akash']. "<br><br>";

	echo "Made By Akash Anil 134";
?>