@section('title') Page @stop
@extends('front.layout.master-inner')
@section('content-inner')
	<div class="page-header">
		<div class="container">
			<h2>{{ $page->title }}</h2>
		</div>
	</div>
	<div class="page-content">
		<div class="container">
			{!! $page->body !!}
		</div>
	</div>
@endsection