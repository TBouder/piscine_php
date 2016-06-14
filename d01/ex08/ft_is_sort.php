<?php
	function	ft_is_sort($arr)
	{
		$new_arr = $arr;
		sort($new_arr);
		if ($new_arr == $arr)
			return (1);
		return (0);
	}
?>
