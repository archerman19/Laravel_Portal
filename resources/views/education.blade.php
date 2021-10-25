@extends('layouts.v_main')

@section('title')
	Образование
@endsection

@section('content')
<div class="features article-features">
		<div class="feature-items">
			<a href="{{route('develop')}}" class="subtitle">Разработка</a>
		</div>
		<div class="feature-items">
			<a href="route('administration')" class="subtitle">Администрирование</a>
		</div>
		<div class="feature-items">
			<a href="route('marketing')" class="subtitle">Маркетинг</a>
		</div>
		<div class="feature-items">
			<a href="route('design')" class="subtitle">Дизайн</a>
		</div>
</div>
@foreach($data as $el)
	<div class="alert article">
		<a class="fw-bold h4" href="{{route('one-educ', $el->id)}}">{{ $el->title }}</a>
		<div class="article-img"><img src="{{ $el->image }}" width="100%" height="450px"></div>
		<p class="text-muted article-preview">{{$el->preview}}</p>
		<small>{{$el->created_at}}</small>
	</div>
@endforeach

@endsection