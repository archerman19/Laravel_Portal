@extends('layouts.v_main')

@section('title')
	Категории
@endsection

@section('content')
<div class="features categories">
		<div class="feature-items">
			<a href="{{route('develop')}}" class="subtitle">Разработка</a>
		</div>
		<div class="feature-items">
			<a href="{{route('administration')}}" class="subtitle">Администрирование</a>
		</div>
		<div class="feature-items">
			<a href="{{route('marketing')}}" class="subtitle">Маркетинг</a>
		</div>
		<div class="feature-items">
			<a href="{{route('design')}}" class="subtitle">Дизайн</a>
		</div>
	</div>
@endsection