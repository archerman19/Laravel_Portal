<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
	
	/**
	 * Связь между таблицами comments и news
	 *
	 * @return object
	 */
    public function comments() {
		return $this->hasMany(Comment::class, 'news_id', 'id');
	}
}
