#!/usr/bin/php
<?php
	while (TRUE)
	{
		echo "Entrez un nombre: ";
		$line = fgets(STDIN);
		if (!isset($line[0]))
		{
			echo "\n";
			break;
		}
		else
		{
			$number = str_replace(array("\n", "\r"), '', $line);
			if (is_numeric($number) == TRUE)
			{
				if ($number[strlen($number) - 1] % 2 == 0)
					echo "Le chiffre ".$number." est Pair\n";
				else
					echo "Le chiffre ".$number." est Impair\n";
			}
			else
				echo "'".$number."' n'est pas un chiffre\n";
		}
	}
?>
