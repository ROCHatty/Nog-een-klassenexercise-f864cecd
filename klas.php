<?php
echo "Wie zit er in de klas?\r\n";
$klas = explode(" ", readline());
echo "\r\nDe studenten in de klas zijn:\r\n";
foreach ($klas as $persoon) {
	echo $persoon."\r\n";
}
?>