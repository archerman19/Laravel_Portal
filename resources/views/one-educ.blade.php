@extends('layouts.v_main')

@section('title')
	Образование
@endsection

@section('content')
	<div class="alert article">
		<p class="fw-bold h4">{{ $data->title }}</p>
		<div class="article-img"><img src="{{ $data->image }}" width="700px" height="400px"></div>
		<p class="text-muted article-preview">{{$data->content}}</p>
		<small>{{$data->created_at}}</small>
	</div>

@endsection