@extends('admin.layouts.layout')
@section('title') Create Services @stop
@section('main')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">Add Services</div>
				<div class="panel-body">
					{!! Form::open(['url' => action('AdminServiceController@store'), 'method' => 'post', 'class' => 'form-horizontal row-border', 'enctype' => 'multipart/form-data']) !!}

						{!! myText($title='Name', $field='name', $value='', ['placeholder' => 'Name', 'class' => 'form-control']) !!}
						{!! mySelect($title='Category', $field='category_id', $data=\App\ServiceCategory::pluck('name', 'id'), $value=null, ['placeholder' => 'Select Category', 'class' => 'form-control']) !!}
						{!! myText($title='Description', $field='description', $value='', ['placeholder' => 'Description', 'class' => 'form-control']) !!}
						{!! myTextArea($title='Body', $field='body', $value='', ['placeholder' => 'Body', 'class' => 'form-control']) !!}

						{!! myFile($title='Photo', $field='photo', ['placeholder' => 'Email', 'class' => 'form-control']) !!}

						{!! myText($title='Read More Link', $field='readmore_link', $value='', ['placeholder' => 'Read More Link', 'class' => 'form-control']) !!}
						{!! mySelect($title='Status', $field='status', $data=['1' => 'Active', '0' => 'Inactive'], $value=null, ['placeholder' => 'Select Status', 'class' => 'form-control']) !!}

						{!! mySubmit($title='Save', ['class' => 'btn btn-lg btn-primary']) !!}

					{!! Form::close() !!}
						
					</form>
				</div>
			</div>
		</div>
		@include('admin.partials.copyright')
	</div><!--/.row-->
@endsection
