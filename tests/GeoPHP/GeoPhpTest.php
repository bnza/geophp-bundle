<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GeoPhpTest
 *
 * @author Pi
 */

namespace GeoPHP\Tests;

use GeoPHP\GeoPhp;

class GeoPhpTest extends \PHPUnit_Framework_TestCase {
    public function testNamespace() {
        $this->assertEquals('1.2',  GeoPhp::version());
    }
}
