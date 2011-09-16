<?php

function clean_html($text) {
	$text = str_replace("´", "'", $text);
	$text = str_replace("’", "'", $text);
	$text = str_replace("“", "\"", $text);
	$text = str_replace("”", "\"", $text);
	$text = str_replace("¨", "\"", $text);
	$text = str_replace("…", "...", $text);
	$text = str_replace("á", "&aacute;", $text);
	$text = str_replace("Á", "&Aacute;", $text);
	$text = str_replace("ã", "&atilde;", $text);
	$text = str_replace("Ã", "&Atilde;", $text);
	$text = str_replace("é", "&eacute;", $text);
	$text = str_replace("É", "&Eacute;", $text);
	$text = str_replace("í", "&iacute;", $text);
	$text = str_replace("Í", "&Iacute;", $text);
	$text = str_replace("ñ", "&ntilde;", $text);
	$text = str_replace("Ñ", "&Ntilde;", $text);
	$text = str_replace("ó", "&oacute;", $text);
	$text = str_replace("Ó", "&Oacute;", $text);
	$text = str_replace("ú", "&uacute;", $text);
	$text = str_replace("Ú", "&Uacute;", $text);
	$text = str_replace("©", "&copy;", $text);
	$text = str_replace("®", "&reg;", $text);
	$text = str_replace("™", "&trade;", $text);
	$text = str_replace("€", "&euro;", $text);
	$text = str_replace("—", "&mdash;", $text);
	$text = str_replace("–", "&ndash;", $text);
		
	return $text;
}

?>