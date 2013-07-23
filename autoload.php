<?php

require_once("SplClassLoader.php");

$loader = new SplClassLoader('Snr', array(__DIR__.DIRECTORY_SEPARATOR.'src'));
$loader->register();
