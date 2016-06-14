#!/usr/bin/php
<?php
	function	ft_transform_space($str)
	{
		$str = str_replace(array(chr(9), chr(10), chr(11), chr(12), chr(13),
		chr(133), chr(160), chr(5760), chr(8192), chr(8193), chr(8194),
		chr(8195), chr(8196), chr(8197), chr(8198), chr(8199), chr(8200),
		chr(8201), chr(8202), chr(8232)), ' ', $str);
		return ($str);
	}
	function ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}
	function	ft_split($str)
	{
		$str = ft_transform_space($str);
		$arr = explode(' ', $str);
		sort($arr);
		$arr = array_filter($arr, "ft_valid_str");
		print_r(array_slice($arr, 0));
	}
?>
