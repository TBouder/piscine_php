#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}

	function	ft_strlen($str)
	{
		$i = 0;

		while (ft_valid_str($str[$i]))
			$i++;
		return ($i);
	}

	while (TRUE)
	{
		echo "Entrez un nombre: ";
		$line = fgets(STDIN);
		if (is_null($line[0]))
		{
			echo "\n";
			break;
		}
		else
		{
			$number = str_replace(array("\n", "\r"), '', $line);
			if (is_numeric($number) == TRUE)
			{
				if ($number[ft_strlen($number) - 1] % 2 == 0)
					echo "Le chiffre ".$number." est Pair\n";
				else
					echo "Le chiffre ".$number." est Impair\n";
			}
			else
				echo "'".$number."' n'est pas un chiffre\n";
		}
	}
?>
