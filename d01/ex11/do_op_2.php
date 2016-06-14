#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}
	function	ft_clear($arg)
	{
		$str = explode(" ", $arg);
		$str = array_filter($str, "ft_valid_str");
		$str = implode($str);
		return ($str);
	}
	function	ft_array_len($arr)
	{
		$i = 0;

		while (ft_valid_str($arr[$i]))
			$i++;
		return ($i);
	}

	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else
	{
		$str = ft_clear($argv[1]);
		if (strstr($str, '+'))
		{
			$arr = explode('+', $str);
			echo ft_array_len($arr) == 2 && is_numeric($arr[0]) && is_numeric($arr[1]) ? $arr[0] + $arr[1] : "Syntax Error\n";
		}
		else if (strstr($str, '-'))
		{
			$arr = explode('-', $str);
			echo ft_array_len($arr) == 2 && is_numeric($arr[0]) && is_numeric($arr[1]) ? $arr[0] - $arr[1] : "Syntax Error\n";
		}
		else if (strstr($str, '*'))
		{
			$arr = explode('*', $str);
			echo ft_array_len($arr) == 2 && is_numeric($arr[0]) && is_numeric($arr[1]) ? $arr[0] * $arr[1] : "Syntax Error\n";
		}
		else if (strstr($str, '/'))
		{
			$arr = explode('/', $str);
			echo ft_array_len($arr) == 2 && is_numeric($arr[0]) && is_numeric($arr[1]) ? $arr[0] / $arr[1] : "Syntax Error\n";
		}
		else if (strstr($str, '%'))
		{
			$arr = explode('%', $str);
			echo ft_array_len($arr) == 2 && is_numeric($arr[0]) && is_numeric($arr[1]) ? $arr[0] % $arr[1] : "Syntax Error\n";
		}
		else
			echo "Syntax Error\n";
	}
?>
