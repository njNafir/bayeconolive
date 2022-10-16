@extends('layouts.app')
@section('title') Create Menu @stop

@section('css')
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">Add Menu</div>
				<div class="panel-body">
					{!! Form::open(['url' => action('AdminMenuController@store'), 'method' => 'post', 'class' => 'form-horizontal row-border', 'enctype' => 'multipart/form-data']) !!}


						{!! myText($title='Name', $field='name', $value='', ['placeholder' => 'Header Menu / Footer Menu', 'class' => 'form-control', 'required']) !!}

						{!! myText($title='Slug', $field='slug', $value='', ['placeholder' => 'header-menu / footer-menu', 'class' => 'form-control', 'required']) !!}


						{!! mySubmit($title='Save', ['class' => 'btn btn-lg btn-primary']) !!}

					{!! Form::close() !!}
						
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
@endsection



