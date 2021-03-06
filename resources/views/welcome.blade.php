@extends('layout.template')
@section('content')
	<div class="welcome_title">
    	<h1>Witaj w Panelu WIO</h1>
    	@if(!Auth::check())
    		<p>Zaloguj się aby w pełni korzystać z jego możliwości.</p>
    		<a href="/login" class="btn btn-primary btn-lg">Zaloguj</a>
    	@endif
    	@if(Auth::check())
    		<p>Jesteś zalogowany. Możesz przejść do obszaru roboczego.</p>
    		<a href="/panel" class="btn btn-primary btn-lg">Obszar roboczy</a>
    	@endif
    </div>
@endsection