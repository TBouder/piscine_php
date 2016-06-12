#!/usr/bin/php
<?php
	while (1)
	{
		echo "Entrez un nombre: ";
		$line = fgets(STDIN);
		if (!isset($line[0]))
		{
			echo "\n";
			break;
		}
		$line = str_replace(array("\n", "\r"), '', $line);
		if (is_numeric($line) == 0)
		{
			echo "'".$line."'"." n'est pas un chiffre\n";
		}
		else
		{
			if ($line % 2 == 0)
				echo "Le chiffre ".$line." est Pair\n";
			else
				echo "Le chiffre ".$line." est Impair\n";
		}
	}
?>
