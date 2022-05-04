<?php

namespace Database\Seeders;

use App\Lib\CollectionCreator;
use App\Lib\GreatCircleDistance;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $gcd = new GreatCircleDistance();
        $gcd->setLatitudeTo(53.3340285)->setLongitudeTo(-6.2535495);
        $filePath = storage_path() . "/Updatedaffiliates.txt";
        $collection = CollectionCreator::createCollectionFromFile($gcd, $filePath);

        foreach ($collection as $contact) {
            Contact::create([
                'affiliate_id' => $contact->affiliate_id,
                'name' => $contact->name,
                'latitude' => $contact->latitude,
                'longitude' => $contact->longitude,
                'distance' => $gcd->getDistanceInKM($contact->latitude,  $contact->longitude)
            ]);
        }

    }
}
