<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'en';
$target = 'gu';
$text = 'how?';



$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

return $result; ?>