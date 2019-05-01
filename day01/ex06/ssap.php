#!/usr/bin/php
<?PHP
	function ft_split($line)
	{
		$line = trim($line);
		$res = explode(" ", $line);
		foreach ($res as $word) {
			if ($word === "")
				unset($res[$i]);
			$i++;
		}
		return $res;
	}

	$res = array();
	for ($i = 1; $i < $argc; $i++) {
		$tab = ft_split($argv[$i]);
		$res = array_merge($res, $tab);
	}
	sort($res, SORT_STRING);
	foreach ($res as $word) {
		print($word."\n");
	}
?>