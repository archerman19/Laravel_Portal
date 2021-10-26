@extends('layouts.v_main')

@section('title')
	@foreach($data as $el)
		{{ EnvatoUser::_category($el->category_id)->category_name }}
	@endforeach
@endsection

@section('content')
	@foreach($data as $el)
		<div class="alert article">
			<a class="fw-bold h4" href="{{route('one-educ', $el->id)}}">{{ $el->title }}</a>
			<div class="article-img"><img src="{{ $el->image }}" width="100%" height="450px"></div>
			<p class="text-muted article-preview">{{$el->preview}}</p>
			<small>{{$el->created_at}}</small>
		</div>
	@endforeach
@endsection