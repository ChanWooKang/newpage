<?php

$layout = file_get_contents("../index.html");

$filename =$_SERVER['REQUEST_URI'].".htm";
$body = file_get_contents("../".$filename);

$layout - str_replace("{{main}}",$body,$layout);
echo $layout;