@extends('layouts.v_main')

@section('title')
	Новости
@endsection

@section('content')
	<h1>News</h1>
	@foreach($data as $el)
		<div class="alert">
			<h3>{{ $el->title }}</h3>
		</div>
	@endforeach
@endsection