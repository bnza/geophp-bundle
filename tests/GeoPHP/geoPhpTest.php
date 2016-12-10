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
        $this->assertEquals('1.2.1',  GeoPhp::version());
    }
    
        public function testMultiPoint() {
        $wkt = 'MULTIPOINT (3.5 5.6, 4.8 10.5)';
        $geom = GeoPhp::load($wkt,'wkt');
        $this->assertEquals($wkt,  $geom->out('wkt'));
    }
    
    public function testLineString() {
        $wkt = 'LINESTRING (3 4, 10 50, 20 25)';
        $geom = GeoPhp::load($wkt,'wkt');
        $this->assertEquals($wkt,  $geom->out('wkt'));
    }
    
    public function testMultiLineString() {
        $wkt = 'MULTILINESTRING ((3 4, 10 50, 20 25), (-5 -8, -10 -8, -15 -4))';
        $geom = GeoPhp::load($wkt,'wkt');
        $this->assertEquals($wkt,  $geom->out('wkt'));
    }
    
    public function testPolygon() {
        $wkt = 'POLYGON ((1 1, 5 1, 5 5, 1 5, 1 1), (2 2, 3 2, 3 3, 2 3, 2 2))';
        $geom = GeoPhp::load($wkt,'wkt');
        $this->assertEquals($wkt,  $geom->out('wkt'));
    }
    
    public function testMultiPolygon() {
        $wkt = 'MULTIPOLYGON (((1 1, 5 1, 5 5, 1 5, 1 1), (2 2, 3 2, 3 3, 2 3, 2 2)), ((3 3, 6 2, 6 4, 3 3)))';
        $geom = GeoPhp::load($wkt,'wkt');
        $this->assertEquals($wkt,  $geom->out('wkt'));
    }
    
    public function testGeometryCollection() {
        $wkt = 'GEOMETRYCOLLECTION (MULTIPOINT (3.5 5.6, 4.8 10.5), POLYGON ((1 1, 5 1, 5 5, 1 5, 1 1), (2 2, 3 2, 3 3, 2 3, 2 2)))';
        $geom = GeoPhp::load($wkt,'wkt');
        $this->assertEquals($wkt,  $geom->out('wkt'));
    }
    
}
