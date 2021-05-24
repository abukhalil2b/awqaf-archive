<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model {
	protected $fillable = ['cate_num', 'branch_name', 'serial', 'date_first_document', 'date_last_document', 'date_closed'];
	public function documents() {
		return $this->hasMany(Document::class);
	}
}
