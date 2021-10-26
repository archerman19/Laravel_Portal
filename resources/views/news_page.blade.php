@extends('layouts.v_main')

@section('title')
	{{$data->title}}
@endsection

@section('content')
	<h2>Новости</h2>
	<div class="alert">
		<p>{{ $data->title }}<a>
		<p class="text-muted">{{$data->content}}</p>
	</div>
	@include('includes.comment')
@endsection