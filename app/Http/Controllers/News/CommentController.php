<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request) {
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
