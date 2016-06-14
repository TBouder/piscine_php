#!/usr/bin/php
<?php
	if ($argc != 4)
		echo "Incorrect Parameters\n";
	else
	{
		$ope = $argv[2];
		if (strchr($ope, '+'))
			echo $argv[1] + $argv[3];
		if (strchr($ope, '-'))
			echo $argv[1] - $argv[3];
		if (strchr($ope, '*'))
			echo $argv[1] * $argv[3];
		if (strchr($ope, '/'))
			echo $argv[1] / $argv[3];
		if (strchr($ope, '%'))
			echo $argv[1] % $argv[3];
	}
?>
