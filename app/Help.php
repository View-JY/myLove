<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model {
	protected $table = 'helps';
	protected $primaryKey = 'id';
	protected $fillable = [
		'idea', 'email', 'user_id',
	];
}
