#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}
	function	ft_array_len($arr)
	{
		$i = 0;

		while (ft_valid_str($arr[$i]))
			$i++;
		return ($i);
	}

	$i = 1;
	$dict = array();

	if (ft_valid_str($argv[$i]))
	{
		$to_find = $argv[$i];
		$i++;
	}
	while (ft_valid_str($argv[$i]))
	{
		if (strstr($argv[$i], ":"))
		{
			$arr = explode(":", $argv[$i]);
			if (ft_array_len($arr) == 2)
				$dict[$arr[0]] = $arr[1];
		}
		$i++;
	}
	echo $dict[$to_find];
?>
