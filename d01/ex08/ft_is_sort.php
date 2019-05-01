<?PHP
	function ft_is_sort($tab) {
		$dup = $tab;
		sort($dup, SORT_STRING);
		foreach ($tab as $index => $word) {
			if ($word != $dup[$index])
				return FALSE;
		}
		return TRUE;
	}
?>