<?php

namespace App\Lib;


class GreatCircleDistance {

    protected $latitudeTo = 0;
    protected $longitudeTo = 0;

    /**
     * Calculate distance between 2 points in km
     *
     * @param $latitudeFrom float
     * @param $longitudeFrom float
     * @return float|int
     */
    public function getDistanceInKM($latitudeFrom, $longitudeFrom) {

        return round($this->getDistance($latitudeFrom, $longitudeFrom) / 1000, 1);
    }

    /**
     * Calculate distance between 2 points in meters
     *
     * @param $latitudeFrom float
     * @param $longitudeFrom float
     * @param $latitudeTo float
     * @param $longitudeTo float
     * @return float|int
     */
    public function getDistance($latitudeFrom, $longitudeFrom) {
        $earthradius = 6371000;
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($this->getLatitudeTo());
        $lonTo = deg2rad($this->getLongitudeTo());
        $lonDelta = $lonTo - $lonFrom;

        $a = pow(cos($latTo) * sin($lonDelta), 2) +
            pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
        $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

        $angle = atan2(sqrt($a), $b);

        return $angle * $earthradius;
    }

    /**
     * @return float
     */
    public function getLatitudeTo() {
        return $this->latitudeTo;
    }

    /**
     * @param float $latitudeTo
     */
    public function setLatitudeTo($latitudeTo) {
        $this->latitudeTo = $latitudeTo;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitudeTo() {
        return $this->longitudeTo;
    }

    /**
     * @param float $longitudeTo
     */
    public function setLongitudeTo($longitudeTo) {
        $this->longitudeTo = $longitudeTo;

        return $this;
    }


}