<?php
define( 'SRC', __DIR__.'/src/');
include "autoload.php";

use \Snr\CI\HelloWorld;

echo "Hello CI world.<br><br>";

echo "An update deployed by codeship.io!<br><br>";

$hw = new HelloWorld();
echo $hw->speak();
echo "<br><br>";

echo "Shutting down... :)";

?>
