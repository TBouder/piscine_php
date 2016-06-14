#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}
	
	$i = 1;
	while (ft_valid_str($argv[$i]))
	{
		echo $argv[$i]."\n";
		$i++;
	}
?>
