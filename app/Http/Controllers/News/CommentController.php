<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller {
	/**
	 * Передать значения из инпутов в модель для записи в бд
	 *
	 * @param CommentRequest $request
	 * @return void
	 */
    public function addComment(CommentRequest $request) {
		$comment = $request->input('comment_text');
		$news = $request->input('news_id');
		$user = $request->input('user_id');

		$commentModel = new Comment();
		$commentModel = $commentModel->create([
			'comment_text' => $comment,
			'news_id' => $news,
			'user_id' => $user
		]);
		
		if ($commentModel) {
			return back();
		}
	}
}
