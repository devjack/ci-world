<?php
/**
 * User: jack
 * Date: 23/07/13
 */

use \Snr\CI\HelloWorld;

class Test extends PHPUnit_Framework_TestCase {

    public function testSquawks()
    {
        $hw = new HelloWorld();
        $this->assertTrue($hw->speak() === "Squawk!");
    }

}
