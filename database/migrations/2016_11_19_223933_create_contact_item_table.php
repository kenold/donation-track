<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_item', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('contact_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->bigInteger('item_qty');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('contact_item');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
