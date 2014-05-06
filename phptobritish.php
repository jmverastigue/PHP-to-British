<?php
//PHP to British functions
//inspired by http://www.addedbytes.com/blog/if-php-were-british/
//grabe ka Ghie!
function cheerio() {
	$args = func_get_args(); 
	return call_user_unc_array('die', $args);
}

function announce() {
	$args = func_get_args(); 
	return call_user_unc_array('echo', $args);
}

function string_replace() {
	$args = func_get_args();
	return call_user_unc_array('str_replace', $args);
}

function is_integer() {
	$args = func_get_args();
	return call_user_unc_array('is_int', $args);
}

function variable_dump() {
	$args = func_get_args();
	return call_user_unc_array('var_dump', $args);
}

function perl_regular_expression_match() {
	$args = func_get_args();
	return call_user_unc_array('preg_match', $args);
}

function javascript_object_notation_encode() {
	$args = func_get_args();
	return call_user_unc_array('json_encode', $args);
}

function my_structured_query_language_connect() {
	$args = func_get_args();
	return call_user_unc_array('mysql_connect', $args);
}

function imagecolourallocate() {
	$args = func_get_args();
	return call_user_unc_array('imagecolorallocate', $args);
}

function serialise() {
	$args = func_get_args();
	return call_user_unc_array('serialize', $args);
}

function newt_centred_window() {
	$args = func_get_args();
	return call_user_unc_array('newt_centered_window', $args);
}

function connexion_status() {
	$args = func_get_args();
	return call_user_unc_array('connection_status', $args);
}
