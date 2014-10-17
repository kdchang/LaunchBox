<?php
include_once 'db_config.php';

function db_affected_rows() {
	return mysql_affected_rows();
}
function db_data_seek($res, $num) {
	return mysql_data_seek($res, $num);
}
function db_error() {
	return mysql_error();
}
function db_escape($param) {
	return mysql_real_escape_string($param);
}
function db_fetch_array($result) {
	return mysqli_fetch_array($result);
}
function db_fectch_object($res) {
	return mysql_fetch_object($res);
}
function db_insert_id($res) {
	return mysql_insert_id($res);
}
function db_num_rows($result) {
	return mysqli_num_rows($result);
}
function db_query($connect, $query) {
	return mysqli_query($connect, $query);
}
?>
