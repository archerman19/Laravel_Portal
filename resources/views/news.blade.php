@extends('layouts.v_main')

@section('title')
	Новости
@endsection

@section('content')

	<h2 class="article-features">Новости</h2>

	@foreach($data as $el)
		@if($el->is_active == 1)
			<div class="alert">
				<a class="fw-bold h4" href="{{ route('news_page', $el->id) }}">{{ $el->title }}<a>
				<p class="text-muted">{{$el->preview}}</p>
				<small>{{$el->created_at}}</small>
			</div>
		@endif
	@endforeach
@endsection