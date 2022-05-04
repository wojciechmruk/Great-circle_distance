<?php


namespace App\Lib;


use SplFileObject;

class CollectionCreator {

    /**
     * Let's create collection and add distance based on latitude and longitude
     *
     * @param $greatCircle
     * @param $filePath string
     * @return \Illuminate\Support\Collection
     */
    public static function createCollectionFromFile($greatCircle, $filePath) {
        $file = new SplFileObject($filePath);
        $contentArray = [];
        while (!$file->eof()) {
            $data = json_decode($file->fgets());
            $data->distance = $greatCircle->getDistanceInKM($data->latitude, $data->longitude);
            $contentArray[] = $data;
        }

        $file = null;

        return collect($contentArray);
    }
}