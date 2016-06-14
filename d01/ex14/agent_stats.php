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

	function	ft_moyenne()
	{
		$notes = array();
		$line = fgets(STDIN);
		$id = 0;
		while ($line = fgets(STDIN))
		{
			$arr = explode(";", $line);
			if ($arr[2] == "moulinette")
				$arr[1] = -1;
			$notes[$id][] = $arr[1];
			$id++;
		}
		$i = 0;
		$med = 0;
		$tt = 0;
		while ($notes[$i])
		{
			$j = 0;
			while ($notes[$i][$j])
			{
				$med += $notes[$i][$j] == -1 ? 0 : $notes[$i][$j];
				$tt++;
				$j++;
			}
			$i++;
		}
		echo $med / $tt."\n";
	}

	function	ft_moyenne_user()
	{
		$notes = array();
		$line = fgets(STDIN);

		while ($line = fgets(STDIN))
		{
			$arr = explode(";", $line);
			$notes[$arr[0]][] = (!ft_valid_str($arr[1]) || $arr[2] == "moulinette") ? -1 : $arr[1];
		}
		$names = array_keys($notes);
		sort($names);

		$i = 0;
		while ($names[$i])
		{
			$tmp = $notes[$names[$i]];
			echo $names[$i].":";
			$j = 0;
			$med = 0;
			$tt = 0;
			while (ft_valid_str($tmp[$j]))
			{
				if ($tmp[$j] == -1)
					$j++;
				else
				{
					$med += $tmp[$j];
					$j++;
					$tt++;
				}
			}
			echo $med / $tt."\n";
			$i++;
		}
	}

	function	ft_moyenne_moulinette()
	{
		$notes = array();
		$line = fgets(STDIN);

		while ($line = fgets(STDIN))
		{
			$arr = explode(";", $line);
			if (!ft_valid_str($arr[1]))
				$notes[$arr[0]][] = -1;
			else if ($arr[2] == "moulinette")
				$notes[$arr[0]][] = $arr[1] + 50;
			else
				$notes[$arr[0]][] = $arr[1];
		}
		$names = array_keys($notes);
		sort($names);

		$i = 0;
		while ($names[$i])
		{
			$tmp = $notes[$names[$i]];
			echo $names[$i].":";
			$j = 0;
			$med = 0;
			$tt = 0;
			while (ft_valid_str($tmp[$j]))
			{
				if ($tmp[$j] >= 50)
					$mouli = $tmp[$j++] - 50;
				else if ($tmp[$j] == -1)
					$j++;
				else
				{
					$med += $tmp[$j];
					$j++;
					$tt++;
				}
			}
			echo (($med / $tt) - $mouli)."\n";
			$i++;
		}
	}

	if ($argv[1] == "moyenne")
		ft_moyenne();
	if ($argv[1] == "moyenne_user")
		ft_moyenne_user();
	if ($argv[1] == "moyenne_moulinette")
		ft_moyenne_moulinette();
?>
