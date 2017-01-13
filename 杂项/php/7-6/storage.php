<?php 
use sinacloud\sae\Storage as Storage;
$s = new Storage();
$s->putObject("This is string.hhah", "wechatbucket", "string.txt", array(), array('Content-Type' => 'text/plain'));




 ?>