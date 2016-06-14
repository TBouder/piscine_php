#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}
	function	ft_epur_str($argv)
	{
		if (ft_valid_str($argv[1]))
		{
			$str = $argv[1];
			$str = explode(" ", $str);
			$str = array_filter($str, "ft_valid_str");
			$str = implode($str, ' ');
			echo $str;
		}
	}
	ft_epur_str($argv);
?>
