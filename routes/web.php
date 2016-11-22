<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact/{id}', function ($id) {
    $contact = App\Contact::find($id);
    echo "<img src= " . $contact->photo_url . " width=140 />";
    echo "<h1>" . $contact->fname . ", " . $contact->lname . "</h1>";

    echo '<ul>';

    foreach ($contact->donations as $donation) {
        $item = App\Item::find($donation->item_id);
        echo '<li>' . $item->name . ' (' . $donation->quantity . ')' . '</li>';
    }
    echo '</ul>';
});

Route::get('/donations', function() {
    $donations = App\Donation::all();

    foreach($donations as $donation) {
        $item = App\Item::find($donation->item_id);
        echo $donation->contact->fname . ' donated ' . $item->name . ' on ' . $donation->created_at . '<br>';
    }
});
