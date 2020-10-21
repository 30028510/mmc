<?php
require "config.php";

$array	= array('where' => "email='$_GET[email]'");
$match	= select("users", $array);
// printR($match);
if($match['count']>0) {
	$result="false";
} else {
	$result="true";
}
echo $result;
?>