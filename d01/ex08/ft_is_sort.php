<?php
	function	ft_is_sort($arr)
	{
		$new_arr = $arr;
		sort($new_arr, SORT_STRING);
		if ($new_arr == $arr)
			return (1);
		return (0);
	}
?>
