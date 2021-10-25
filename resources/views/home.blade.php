
@extends('layouts.v_main')

@section('title')
	Главная
@endsection

@section('content')
<main>
	<div class="hero">
		<div class="title">
			<p class="subtitle">образовательный портал</p>
			<p class="info">бесплатный онлайн сервис для образования</p>
		</div>
	</div>
	<div class="features">
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
</main>
@endsection
