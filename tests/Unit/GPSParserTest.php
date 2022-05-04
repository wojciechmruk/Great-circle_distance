<?php

namespace Tests\Unit;

use App\Lib\GreatCircleDistance;
use PHPUnit\Framework\TestCase;

class GPSParserTest extends TestCase {

    private $latitudeTo = 53.3340285;
    private $longitudeTo = -6.2535495;

    private function setData($greatCircleDistance){
        $greatCircleDistance->setLatitudeTo($this->latitudeTo);
        $greatCircleDistance->setLongitudeTo($this->longitudeTo);

        return $greatCircleDistance;
    }

    public function test_get_distance() {
        $greatCircleDistance = new GreatCircleDistance();
        $this->setData($greatCircleDistance);
        $latitudeFrom = 52.986375;
        $longitudeFrom = -6.043701;
        $result = $greatCircleDistance->getDistance($latitudeFrom, $longitudeFrom);

        $this->assertEquals(41111.08671170646, $result);
    }

    public function test_get_distance_in_km() {
        $greatCircleDistance = new GreatCircleDistance();
        $this->setData($greatCircleDistance);

        // lat, long, distance in km
        $testArray = [
            [52.986375, -6.043701, 41.1],
            [51.92893, -10.27699, 313.2],
            [55.033, -8.112, 224.3],
        ];

        foreach ($testArray as $coordinates) {
            $result1 = $greatCircleDistance->getDistanceInKM($coordinates[0], $coordinates[1]);
            $this->assertEquals($coordinates[2], $result1);
        }

    }
}
