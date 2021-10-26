<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $table = 'questions';
	protected $primaryKey = 'id';

	protected $fillable = [
		'name',
		'email',
		'phone',
		'text'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];
}
