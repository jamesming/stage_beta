<?php

function clean_html($text) {
	$text = str_replace("�", "'", $text);
	$text = str_replace("�", "'", $text);
	$text = str_replace("�", "\"", $text);
	$text = str_replace("�", "\"", $text);
	$text = str_replace("�", "\"", $text);
	$text = str_replace("�", "...", $text);
	$text = str_replace("�", "&aacute;", $text);
	$text = str_replace("�", "&Aacute;", $text);
	$text = str_replace("�", "&atilde;", $text);
	$text = str_replace("�", "&Atilde;", $text);
	$text = str_replace("�", "&eacute;", $text);
	$text = str_replace("�", "&Eacute;", $text);
	$text = str_replace("�", "&iacute;", $text);
	$text = str_replace("�", "&Iacute;", $text);
	$text = str_replace("�", "&ntilde;", $text);
	$text = str_replace("�", "&Ntilde;", $text);
	$text = str_replace("�", "&oacute;", $text);
	$text = str_replace("�", "&Oacute;", $text);
	$text = str_replace("�", "&uacute;", $text);
	$text = str_replace("�", "&Uacute;", $text);
	$text = str_replace("�", "&copy;", $text);
	$text = str_replace("�", "&reg;", $text);
	$text = str_replace("�", "&trade;", $text);
	$text = str_replace("�", "&euro;", $text);
	$text = str_replace("�", "&mdash;", $text);
	$text = str_replace("�", "&ndash;", $text);
		
	return $text;
}

?>