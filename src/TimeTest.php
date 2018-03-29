<?php

namespace PropellerAds\Time;
/**
 * Class TimeTest
 * @package PropellerAds\Time
 */

class TimeTest extends \PHPUnit_Framework_TestCase {
    public function testSecond() {
        $this->assertEquals(1, Time::Second)
    }
}
