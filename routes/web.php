<?php

use App\Http\Controllers\AffiliateContactsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contacts', [AffiliateContactsController::class, 'index']);

Route::get('/contacts-orm', function () {
    return view('pages.affiliate_contacts', [
        'contacts' => \App\Models\Contact::get()
            ->where('distance', '<=', 100)
            ->sortBy('affiliate_id'),
        'title' => 'Eloquent version'
    ]);
});

