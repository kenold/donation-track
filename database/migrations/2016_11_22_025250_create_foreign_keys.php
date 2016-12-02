<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('items', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('contact_item', function(Blueprint $table) {
			$table->foreign('contact_id')->references('id')->on('contacts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('contact_item', function(Blueprint $table) {
			$table->foreign('item_id')->references('id')->on('items')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('items', function(Blueprint $table) {
			$table->dropForeign('items_category_id_foreign');
		});
		Schema::table('contact_item', function(Blueprint $table) {
			$table->dropForeign('contact_item_contact_id_foreign');
		});
		Schema::table('contact_item', function(Blueprint $table) {
			$table->dropForeign('contact_item_item_id_foreign');
		});
	}
}
