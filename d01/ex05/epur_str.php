#!/usr/bin/php
<?PHP
	function ft_split($line)
	{
		$line = trim($line);
		$res = explode(" ", $line);
		foreach ($res as $word)
		{
			if ($word === "")
				unset($res[$i]);
			$i++;
		}
		return $res;
	}

	$comp = ft_split($argv[1]);
	print (join(" ", $comp));
?>