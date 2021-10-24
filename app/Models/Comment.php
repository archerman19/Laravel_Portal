<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';
	protected $primaryKey = 'id';

	protected $fillable = [
		'comment_text',
		'news_id',
		'user_id',
		'status'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

}
