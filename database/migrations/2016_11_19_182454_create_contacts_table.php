<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 250);
            $table->string('lname', 250);
            $table->char('mname', 1)->nullable();
            $table->char('sex', 1);
            $table->string('photo_url', 250);
            $table->string('job_title', 100);
            $table->string('company', 100);
            $table->string('address1', 250);
            $table->string('address2', 200);
            $table->string('city', 250);
            $table->char('state', 2)->default('FL');
            $table->string('zip', 10);
            $table->string('country', 100);
            $table->string('cell_phone', 50);
            $table->string('work_phone', 50);
            $table->string('email', 100);
            $table->string('facebook', 150);
            $table->string('twitter', 150);
            $table->string('skype');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //disable foreign key check for this connection before running seeders
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('contacts');
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
