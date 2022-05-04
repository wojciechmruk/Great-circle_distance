@extends('layouts.app')

@section('content')
    <h1 class="visually-hidden">About</h1>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <h1 class="display-4 fw-bold lh-1">Description</h1>
            <p class="lead">﻿This is a brief information of the result and the files to pay attention to.</p>
            <p class="lead">﻿The website has 4 subpages.</p>
            <ol>
                <li>description of the task.</li>
                <li>result using json file</li>
                <li>result using Eloquent</li>
                <li>general information</li>
            </ol>
            <p class="lead">﻿Files </p>

            <h2>app</h2>
            <ul>
                <li>Http/Controlles/AffiliateContactsController.php</li>
                <li>Lib/CollectionCreator.php</li>
                <li>Lib/GreatCircleDistance.php</li>
                <li>Models/Contact.php</li>
            </ul>

            <h2>database</h2>
            <ul>
                <li>database.sqlite</li>
                <li>migrations/2022_05_01_180042_create_contacts_table.php</li>
                <li>seeders/ContactSeeder.php</li>
            </ul>

            <h2>resources or public</h2>
            <ul>
                <li>js/app.js</li>
                <li>css/app.css</li>
                <li>views/inc/navbar.blade.php</li>
                <li>views/inc/footer.blade.php</li>
                <li>views/layouts/app.blade.php</li>
                <li>views/pages/about.blade.php</li>
                <li>views/pages/affiliate_contacts.blade.php</li>
                <li>views/pages/home.blade.php</li>
            </ul>

            <h2>routes</h2>
            <ul>
                <li>web.php</li>
            </ul>

            <h2>storage</h2>
            <ul>
                <li>Updatedaffiliates.txt</li>
            </ul>

            <h2>tests</h2>
            <ul>
                <li>Feature/ContactPageTest.php</li>
                <li>Feature/HomePageTest.php</li>
                <li>Unit/CollectionCreatorTest.php</li>
                <li>Unit/GPSParserTest.php</li>
            </ul>

            <h2>.env file</h2>
            <pre style="color:white;background-color: #1a1e21;width: 98% !important;">
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:+F0JIXBsSyx+U3N/DdP4QcsCAh+yTrhn387pNMnlNnk=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_DATABASE=/var/www/html/database/database.sqlite
DB_FOREIGN_KEYS=true

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
            </pre>
        </div>
    </div>

@endsection