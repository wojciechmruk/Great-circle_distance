@extends('layouts.app')

@section('content')
    <h1 class="visually-hidden">Description</h1>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <h1 class="display-4 fw-bold lh-1">Description</h1>
            <p class="lead">﻿# dev-codetest</p>
            <p class="lead">﻿ Gambling.com Group Dev Code Test</p>

            <p class="lead">﻿ Gambling.com Groups Irish office is in Dublin, where the best minds come together to solve
                Technical
                problems.</p>

            <p class="lead">﻿ The JSON-encoded affiliates.txt file attached contains a shortlist of affiliate contact
                records - one per line.</p>

            <p class="lead">﻿ We want to invite any affiliate that lives within 100km of our Dublin office for some food
                and drinks using this text file as the input (without being altered).</p>

            <p class="lead">﻿ ##Task</p>
            <p class="lead">﻿ Write a program that will read the full list of affiliates from this txt file and output
                the name and IDs of matching affiliates within 100km, sorted by Affiliate ID (ascending).</p>

            <p class="lead">﻿ You can use the first formula from this [Wikipedia
                article](https://en.wikipedia.org/wiki/Great-circle_distance) to calculate distance. Don't forget,
                you'll need to convert degrees to radians.</p>

            <p class="lead">﻿ The GPS coordinates for our Dublin office are 53.3340285, -6.2535495.</p>

            <p class="lead">﻿ You can find the affiliate list in this repository called affiliates.txt.</p>

            <p class="lead">﻿ Please don’t forget, your code should be production ready, clean and tested!</p>

            <p class="lead">﻿ ## Nice to haves:</p>

            <ul>
                <li>Demonstrate understanding of MVC</li>
                <li>Unit Tests</li>
                <li>Basic HTML output</li>
                <li>Usage of a PHP Framework (We're a Laravel based company so bonus points for using that)</li>
                <li>Use the original txt file as input</li>
            </ul>

        </div>
    </div>


@endsection