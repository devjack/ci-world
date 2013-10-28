<?php
define( 'SRC', __DIR__.'/src/');
include "autoload.php";

use \Snr\CI\HelloWorld;

echo "Hello CI world.";

$hw = new HelloWorld();
echo $hw->speak();
echo "<br><br>";
echo "Auto deploy... working!";
?>
