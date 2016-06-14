#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}
	function	ft_rot($arr)
	{
		array_push($arr, $arr[0]);
		$arr[0] = FALSE;
		return ($arr);
	}
	function	ft_rostring($argv)
	{
		if (ft_valid_str($argv[1]))
		{
			$arr = explode(" ", $argv[1]);
			$arr = ft_rot($arr);
			$arr = array_filter($arr, "ft_valid_str");
			$str .= implode($arr, ' ').' ';
			$str = rtrim($str, " ");
			echo $str."\n";
		}
	}
	ft_rostring($argv);
?>
