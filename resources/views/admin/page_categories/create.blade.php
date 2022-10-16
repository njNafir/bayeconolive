@extends('layouts.app')
@section('title') Page Category @stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">Add Page Category</div>
				<div class="panel-body">
					{!! Form::open(['url' => action('AdminPageCategoryController@store'), 'method' => 'post', 'class' => 'form-horizontal row-border']) !!}

						{{ csrf_field() }}

						{!! myText($title='Name', $field='name', $value='', ['placeholder' => 'Name', 'class' => 'form-control']) !!}

						{!! mySelect($title='Status', $field='status', $data=['1' => 'Active', '2' => 'Inactive'], $value=null, ['placeholder' => 'Select Status', 'class' => 'form-control']) !!}

						{!! mySubmit($title='Save', ['class' => 'btn btn-lg btn-primary']) !!}

					{!! Form::close() !!}
						
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
@endsection
