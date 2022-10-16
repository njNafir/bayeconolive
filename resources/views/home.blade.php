@extends('layouts.app')

@section('content')
@include('components.errors')
<div class="container">
    <div class="row">
    	@role('Student')
    		<h1>Status: 
    			@if(is_logged_student_premium())
					<button class="btn btn-success">Active</button>
					<h2>{{\App\Models\Transaction::student_premium_remain_days() . ' Days Remaining'}}</h2>
    			@else
    				<button class="btn btn-danger">Inactive</button>
    			@endif
			</h1>	
		

    		@if(!is_logged_student_premium())
    			<a href="{{ action('PackageController@index')}}">Upgrate</a>
    		@endif
    	@endrole

    </div>
</div>
@endsection
