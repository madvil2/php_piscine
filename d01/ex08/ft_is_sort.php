<?PHP
	function ft_is_sort($tab) {
		$sort = $tab;
		$rsort = $tab;
		sort($sort);
		rsort($rsort);
		if ($sort === $tab || $rsort === $tab)
			return true;
		else
			return false;
	}
?>