#!/usr/bin/php
<?PHP
	if ($argc < 2) {
		exit (1);
	}
	echo preg_replace('/\s+/', " ", trim($argv[1]));
?>