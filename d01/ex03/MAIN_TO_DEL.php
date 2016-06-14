#!/usr/bin/php
<?php
	include("ft_split.php");

	print_r(ft_split("Hello	World AAA"));
	print_r(ft_split(" Hello	World AAA"));
	print_r(ft_split("	Hello	World AAA"));
	print_r(ft_split("Hello	World AAA "));
	print_r(ft_split("Hello	World AAA	"));
	print_r(ft_split("HelloWorldAAA"));
	print_r(ft_split("0	1 2 3 4 5 6"));
	print_r(ft_split("6 5 4 3 2 1	0"));
	print_r(ft_split("aaa AAA zzz"));
	print_r(ft_split(""));
	print_r(ft_split(FALSE));
	print_r(ft_split(TRUE));
	print_r(ft_split("0 0 0 0 1 0 0 0 0"));
	print_r(ft_split(array(0, 0, 0, 0, 1, 0, 0, 0, 0)));
?>
