@extends('layouts.v_main')

@section('title')
	Новости
@endsection

@section('content')
	<h2>Новости</h2>

	@foreach($data as $el)
		<div class="alert">
			<a class="fw-bold h4" href="{{ route('news_page', $el->id) }}">{{ $el->title }}<a>
			<p class="text-muted">{{$el->preview}}</p>
			<small>{{$el->created_at}}</small>
		</div>
	@endforeach
@endsection