@extends('panel')
@section('workspace')
	<div class="calendar_tools">
		<a href="/panel/addSemester"><i class="fa fa-plus" aria-hidden="true"></i>  Dodaj semestr</a></td>
	</div>
	<div class="semesters_list">
		@foreach($semesters as $semester)
		<a href='/panel/semester/{{$semester->year}}/{{$semester->season}}' class="btn btn-default col-xs-12">{{$semester->year}} {{$semester->season}}</a>
		@endforeach
	</div>
@endsection('workspace')