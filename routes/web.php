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
    $contacts = App\Contact::all();

    echo '<ul>';
    foreach ($contacts as $contact) {
        echo '<li>' . $contact->fname . ", " . $contact->lname . '</li>';
    }
    echo '</ul>';

});

Route::get('contact/{id}', function ($id) {
    $contact = App\Contact::find($id);
    echo $contact->fname . ", " . $contact->lname;

    echo '<ul>';
    foreach ($contact->donations as $donation) {
        echo '<li>' . $donation->item_name . ' (' . $donation->quantity . ')' . '</li>';
    }
    echo '</ul>';
});

Route::get('/donations', function() {
    $donations = App\Donation::all();

    foreach($donations as $donation) {
        echo $donation->contact->fname . ' donated ' . $donation->item_name . ' on ' . $donation->created_at . '<br>';
    }
});
