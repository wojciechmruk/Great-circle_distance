<?php

namespace App\Http\Controllers;

use App\Lib\CollectionCreator;
use App\Lib\GreatCircleDistance;

class   AffiliateContactsController extends Controller {

    /**
     *
     * @param GreatCircleDistance $greatCircle
     * @param CollectionCreator $collection
     * @return \Illuminate\Http\Response
     */
    public function index(GreatCircleDistance $greatCircle, CollectionCreator $collection) {
        // you can move that to .env file/DB
        // Because it is just an example we can leave it here.
        $lat = 53.3340285;
        $lon = -6.2535495;
        $greatCircle->setLatitudeTo($lat)->setLongitudeTo($lon);
        $filePath = storage_path() . "/Updatedaffiliates.txt";
        $contacts = $collection::createCollectionFromFile($greatCircle, $filePath)
            ->where('distance', '<=', 100)
            ->sortBy('affiliate_id');
        $title = 'Json File version';

        return view('pages.affiliate_contacts', compact(['contacts', 'title']));
    }
}
