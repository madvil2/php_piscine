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
	$res = ft_split($argv[1]);
	$res = array_values($res);
	for ($i = 1; $i < count($res); $i++)
		print($res[$i]." ");
	print($res[0]);
?>