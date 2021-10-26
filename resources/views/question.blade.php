@extends('layouts.v_main')

@section('title')
	Задать вопрос
@endsection

@section('content')
	<h2 class="categories">Задать вопрос</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form method="post" action="{{route('questions')}}">
	@csrf
		<div class="form-group">
			<label for="exampleInputName1">Имя</label>
			<input name="question-name" type="text" class="form-control" id="exampleInputName1" placeholder="Ваше Имя" value="{{ old('question-name') }}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input name="question-email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email" value="{{ old('question-email') }}">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Телефон</label>
			<input name="question-phone" type="text" class="form-control" id="exampleInputPhone" placeholder="Телефон" value="{{ old('question-phone') }}">
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Сообщение</label>
			<input name="question-text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите сообщение" value="{{ old('question-text') }}">
		</div>
		<button type="submit" class="btn btn-primary">Задать вопрос</button>
	</form>
@endsection