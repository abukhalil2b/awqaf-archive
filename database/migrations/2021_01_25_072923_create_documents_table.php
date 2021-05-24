<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('documents', function (Blueprint $table) {
			$table->id();
			$table->string('document_number');
			$table->string('subject')->nullable();
			$table->string('sender_type')->nullable();
			$table->string('sender_name')->nullable();
			$table->string('sender_country')->nullable();
			$table->string('sender_state')->nullable();
			$table->string('sender_village')->nullable();
			$table->date('document_date')->nullable();
			$table->string('receiver_name')->nullable();
			$table->string('receiver_country')->nullable();
			$table->string('receiver_state')->nullable();
			$table->string('receiver_village')->nullable();
			$table->date('replay_date')->nullable();
			$table->string('url')->nullable();
			$table->integer('folder_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('documents');
	}
}
