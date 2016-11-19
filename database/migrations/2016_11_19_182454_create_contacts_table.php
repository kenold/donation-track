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
            $table->string('fname', 100);
            $table->char('mname', 1);
            $table->string('lname', 100);
            $table->char('sex', 1);
            $table->date('dob');
            $table->string('job_title', 100);
            $table->string('company', 100);
            $table->string('address1', 200);
            $table->string('address2', 200);
            $table->string('city', 100);
            $table->char('state', 2)->default('FL');
            $table->mediumInteger('zip')->unsigned();
            $table->string('country', 100);
            $table->string('cell_phone', 20);
            $table->string('work_phone', 20);
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
        Schema::dropIfExists('contacts');
    }
}
