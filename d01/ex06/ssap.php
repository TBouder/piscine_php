#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}

	$i = 1;
	while (ft_valid_str($argv[$i]))
	{
		$arr = explode(" ", $argv[$i]);
		$arr = array_filter($arr, "ft_valid_str");
		$str .= implode($arr, ' ').' ';
		$i++;
	}
	$to_sort = explode(" ", $str);
	sort($to_sort);
	$to_sort = array_filter($to_sort, "ft_valid_str");
	$str = implode($to_sort, "\n");
	if (ft_valid_str($str))
		echo $str."\n";
?>
