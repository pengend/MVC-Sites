<?php
function list_all_page($directory) {
	$handle = opendir($directory);
	$list = array();
	while (false !== ($entry = readdir($handle))) {
		if ($entry !== '.' and $entry !== '..') {
			$entry = explode('.', $entry);
			if ($entry[1] !== 'css')
				array_push($list, $entry[0]);
		}
	}
	return $list;
}
