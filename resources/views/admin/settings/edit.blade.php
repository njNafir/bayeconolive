@extends('admin.layouts.layout')
@section('title') Edit Services @stop
@section('main')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">Edit Services</div>
				<div class="panel-body">
					{!! Form::open(['url' => action('AdminServiceController@update', $service->id), 'method' => 'put', 'class' => 'form-horizontal row-border', 'enctype' => 'multipart/form-data']) !!}

						{!! myText($title='Name', $field='name', $value=$service->name, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
						{!! mySelect($title='Category', $field='category_id', $data=\App\ServiceCategory::pluck('name', 'id'), $value=$service->category_id, ['placeholder' => 'Select Category', 'class' => 'form-control']) !!}
						{!! myText($title='Description', $field='description', $value=$service->description, ['placeholder' => 'Description', 'class' => 'form-control']) !!}

						{!! myTextArea($title='Body', $field='body', $value=$service->body, ['placeholder' => 'Body', 'class' => 'form-control']) !!}

						{!! myFile($title='Photo', $field='photo', ['placeholder' => 'Email', 'class' => 'form-control']) !!}

						{!! myText($title='Read More Link', $field='readmore_link', $value=$service->readmore_link, ['placeholder' => 'Read More Link', 'class' => 'form-control']) !!}

						{!! mySelect($title='Status', $field='status', $data=['1' => 'Active', '0' => 'Inactive'], $value=$service->status, ['placeholder' => 'Select Status', 'class' => 'form-control']) !!}

						{!! mySubmit($title='Save', ['class' => 'btn btn-lg btn-primary']) !!}

					{!! Form::close() !!}
					</form>
				</div>
			</div>
		</div>
		@include('admin.partials.copyright')
	</div><!--/.row-->
@endsection


