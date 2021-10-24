@auth
<form method="post" action="{{ route('comment') }}" class="form-group">
	@csrf
    <label for="exampleFormControlTextarea1">Ваш комментарий</label>
	<input type="hidden" id="news_id" name="news_id"  class="form-control news_id" id="exampleFormControlTextarea1" rows="3" value="{{$data->id}} ">
	<input type="hidden" id="user_id" name="user_id"  class="form-control user_id" id="exampleFormControlTextarea1" rows="3" value="{{ Auth::user()->id }}">
    <input type="text" id="comment_text" name="comment_text"  class="form-control comment_text" id="exampleFormControlTextarea1" rows="3">
	<br>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endauth

@foreach($comments as $comment)
	<div class="card mb-4">
	<div class="card-body">
		<p>{{ $comment->comment_text }}</p>
		<div class="d-flex justify-content-between">
			<div class="d-flex flex-row align-items-center">
				<p class="small mb-0 ms-2">{{ EnvatoUser::_user($comment->user_id)->name }}</p>
			</div>
			<div class="d-flex flex-row align-items-center">
				<p class="small text-muted mb-0">{{ $comment->created_at->format('d-m-Y') }}</p>
			</div>
		</div>
	</div>
	</div>
	
@endforeach