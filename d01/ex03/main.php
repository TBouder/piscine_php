#!/usr/bin/php
<?php
	include("ft_split.php");
	print_r(ft_split("Hello	World AAA"));
	print_r(ft_split(""));
	print_r(ft_split(" H e l l o"));
	print_r(ft_split("ZZZ ZZA ZAZ "));
	print_r(ft_split("0 1 2 3 4 5"));
	print_r(ft_split("0 	 zero NULL 	 	EMPTY FALSE"));
	print_r(ft_split(NULL));
?>
