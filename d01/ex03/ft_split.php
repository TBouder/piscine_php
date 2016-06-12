<?php
	function	ft_is_space($c)
	{
		if (ord($c) <= 32 || ord($c) > 8191 && ord($c) < 8208 || ord($c) > 8231
			&& ord($c) < 8240)
			return (TRUE);
		return (FALSE);
	}

	function	ft_count_words($str)
	{
		$i = 0;
		$words = 0;

		while (($str[$i] || $str[$i] == '0'))
		{
			while (ft_is_space($str[$i])) //or ctype_space
				$i++;
			if (($str[$i] || $str[$i] == '0'))
			{
				$words++;
				while (($str[$i] || $str[$i] == '0') && !ft_is_space($str[$i]))
				{
					$i++;
				}
			}
			$i++;
		}
		return ($words);
	}

	function	ft_split($str)
	{
		$i = 0;
		$word = 0;
		$total_words = ft_count_words($str);

		echo "Array\n{\n";
		if ($total_words != 0)
		{
			while (($str[$i] || $str[$i] == '0') && $word != $total_words)
			{
				echo "\t[" . $word . "] => ";
				while (ft_is_space($str[$i]))
					$i++;
				while (($str[$i] || $str[$i] == '0') && !ft_is_space($str[$i]))
				{
					echo $str[$i];
					$i++;
				}
				echo "\n";
				$i++;
				$word++;
			}
		}
		echo "}\n";
	}
?>
