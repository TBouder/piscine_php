#!/usr/bin/php
<?PHP
	include("ft_is_sort.php");

	$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
	$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
	echo ft_is_sort($tab) ? "Le tableau est trie\n" : "Le tableau n’est pas trie\n";

	$tab = array(0, 1, 3, 4, 5);
	echo ft_is_sort($tab) ? "Le tableau est trie\n" : "Le tableau n’est pas trie\n";

	$tab = array(5, 4, 3, 2, 1);
	echo ft_is_sort($tab) ? "Le tableau est trie\n" : "Le tableau n’est pas trie\n";

	$tab = array(5, a, '!', '~', -5);
	echo ft_is_sort($tab) ? "Le tableau est trie\n" : "Le tableau n’est pas trie\n";

	$tab = array('!', -5, 5, a, '~'); //Necessite SORT_STRING
	echo ft_is_sort($tab) ? "Le tableau est trie\n" : "Le tableau n’est pas trie\n";
?>
