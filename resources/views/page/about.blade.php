@extends('layouts.page')

@section('content')

@include('inc.page.mission')
<div class="well">
	@include('inc.page.team')
</div>

@include('inc.page.investor')
@include('inc.page.contact')

@endsection