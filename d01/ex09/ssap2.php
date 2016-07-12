#!/usr/bin/php
<?php
	function	ft_valid_str($value)
	{
	  return ($value || is_numeric($value));
	}

	function	ft_is_char($str)
	{
		$i = 0;
		while ($str[$i])
		{
			if (ord($str[$i]) < 65 || (ord($str[$i]) > 90 && ord($str[$i]) < 97) || ord($str[$i]) > 122)
				return (FALSE);
			$i++;
		}
		return (TRUE);
	}

	function	ft_helper($str)
	{
		$i = 0;

		while ($str[$i])
		{
			if (is_numeric($str[$i]))
				return (TRUE);
			$i++;
		}
		return (FALSE);
	}

	function	ft_contain_nb($str)
	{
		$i = 0;
		while ($str[$i])
		{
			if (ft_helper($str[$i]) == TRUE)
				return (TRUE);
			$i++;
		}
		return (FALSE);
	}

	function	ft_custom_sort($arr)
	{
		$i = 0;
		$chars = array();
		$nb_chars = array();
		$others_chars = array();
		$numbers = array();
		$others_nb = array();
		$others = array();

		while (ft_valid_str($arr[$i]))
		{
			if (ft_is_char($arr[$i]) == TRUE && !is_numeric($arr[$i]))
				array_push($chars, $arr[$i]);
			if (ft_is_char($arr[$i]) == FALSE && ft_is_char($arr[$i][0]) == TRUE && ft_contain_nb($arr[$i]) == TRUE)
				array_push($nb_chars, $arr[$i]);
			if (ft_is_char($arr[$i]) == FALSE && ft_is_char($arr[$i][0]) == TRUE && ft_contain_nb($arr[$i]) == FALSE)
				array_push($others_chars, $arr[$i]);
			if (is_numeric($arr[$i]) == TRUE)
				array_push($numbers, $arr[$i]);
			if (ft_is_char($arr[$i]) == FALSE && ft_is_char($arr[$i][0]) == FALSE && !is_numeric($arr[$i]) && is_numeric($arr[$i][0]))
				array_push($others_nb, $arr[$i]);
			if (ft_is_char($arr[$i]) == FALSE && ft_is_char($arr[$i][0]) == FALSE && !is_numeric($arr[$i]) && !is_numeric($arr[$i][0]))
				array_push($others, $arr[$i]);
			$i++;
		}
		sort($chars, SORT_FLAG_CASE | SORT_NATURAL);
		sort($nb_chars, SORT_FLAG_CASE | SORT_NATURAL);
		sort($others_chars, SORT_FLAG_CASE | SORT_NATURAL);
		sort($numbers, SORT_STRING);
		sort($others_nb, SORT_FLAG_CASE | SORT_NATURAL);
		sort($others, SORT_FLAG_CASE | SORT_NATURAL);
		$arr = array_merge($chars, $nb_chars, $others_chars, $numbers, $others_nb, $others);
		return ($arr);
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
	$to_sort = array_filter($to_sort, "ft_valid_str");
	$to_sort = ft_custom_sort($to_sort);
	$str = implode($to_sort, "\n");
	if (ft_valid_str($str))
		echo $str."\n";
?>
