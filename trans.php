<?php
header("Content-Type:application/text;charset=utf-8");
require_once ('translate/vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$to=$_GET["to"];
$from=$_GET["from"];
$text=$_GET["text"];

$trans = new GoogleTranslate();
$result = $trans->translate($from, $to, $text);

echo $result;

?>