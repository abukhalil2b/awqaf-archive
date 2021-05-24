<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {
	protected $fillable = [
		'document_number',
		'subject',
		'writtenby',
		'writer_country',
		'writer_state',
		'writer_village',
		'document_date',
		'receiver_name',
		'receiver_country',
		'receiver_state',
		'receiver_village',
		'replay_date',
		'file',
		'barcode',
		'folder_id',
		'url',
	];
	public function folder() {
		return $this->belongsTo(Folder::class);
	}
}
