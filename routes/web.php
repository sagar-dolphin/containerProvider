<?php

use Illuminate\Support\Facades\Route;
use App\Publication;

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

Route::get('/', function (Publication $publication) {
    // $publication = app()->make(Publication::class);
    dd($publication);

    // App\Publication {#273 ▼
    //     #socialMediaService: App\Services\LinkedInService {#272}
    // }
});
