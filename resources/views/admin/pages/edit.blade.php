@extends('layouts.app')
@section('title') Page Edit @stop

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css">
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">Edit Page</div>
				<div class="panel-body">
					{!! Form::open(['url' => action('AdminPageController@update', $page->id), 'method' => 'put', 'class' => 'form-horizontal row-border', 'enctype' => 'multipart/form-data']) !!}

						{!! myText($title='Title', $field='title', $value=$page->title, ['placeholder' => 'Title', 'class' => 'form-control']) !!}

						{!! myText($title='Slug', $field='slug', $value=$page->slug, ['placeholder' => 'Slug', 'class' => 'form-control']) !!}

						{!! myTextArea($title='Body', $field='body', $value=$page->body, ['id' => 'summernote', 'placeholder' => 'Content', 'class' => 'form-control']) !!}

						{!! mySelect($title='Category', $field='category_id', $data=\App\PageCategory::pluck('name', 'id'), $value=$page->category_id, ['placeholder' => 'Select Category', 'class' => 'form-control']) !!}

						{!! myFile($title='Photo', $field='photo', ['placeholder' => 'Photo', 'class' => 'form-control']) !!}
						
						{!! myText($title='Meta Title', $field='meta_title', $value=$page->meta_title, ['placeholder' => 'Meta Title', 'class' => 'form-control']) !!}

						{!! myText($title='Meta Description', $field='meta_description', $value=$page->meta_description, ['placeholder' => 'Meta Description', 'class' => 'form-control']) !!}

						{!! myText($title='Meta Keyword', $field='meta_keyword', $value=$page->meta_keyword, ['placeholder' => 'Meta Keyword', 'class' => 'form-control']) !!}
						
						{!! mySelect($title='Status', $field='status', $data=['1' => 'Active', '0' => 'Inactive'], $value=$page->status, ['placeholder' => 'Select Status', 'class' => 'form-control']) !!}

						{!! mySubmit($title='Save', ['class' => 'btn btn-lg btn-primary']) !!}

					{!! Form::close() !!}
						
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
@endsection


@section('bodyScope')
	{{-- //https://summernote.org/getting-started/ --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

	<script>
		$(document).ready(function() {
		  $('#summernote').summernote({
		  	height: 400
		  });
		});
	</script>
@endsection