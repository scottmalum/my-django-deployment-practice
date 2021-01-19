<?php
if (!isset($_COOKIE['visits'])) {
	$_COOKIE['visits']=0;
}
$visits= $_COOKIE['visits']