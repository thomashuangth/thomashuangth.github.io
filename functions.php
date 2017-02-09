<?php

function tr($text) {

	//To make sure to load the file once
	static $translations = NULL;

	if (is_null($translations)) {
		$lang_file = 'lang/' . $_SESSION["locale"] . '.json';

		//English Defaults
		if (!file_exists($lang_file)) {
			$lang_file = 'lang/' . 'en.json';
		}

		$lang_file_content = file_get_contents($lang_file);
		$translations = json_decode($lang_file_content);
	}

	return $translations->$text;
}