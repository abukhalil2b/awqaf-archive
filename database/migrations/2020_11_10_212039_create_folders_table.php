<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('folders', function (Blueprint $table) {
			$table->id();
			$table->string('cate_num');
			$table->string('branch_name');
			$table->string('serial');
			$table->date('date_first_document')->nullable();
			$table->date('date_last_document')->nullable();
			$table->date('date_closed')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('folders');
	}
}
