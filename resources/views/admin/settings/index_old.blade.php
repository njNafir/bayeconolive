@extends('admin.layouts.layout')
@section('title') Settings @stop
@section('main')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						{{-- <div class="col-md-4">
							<a href="{{ action('AdminServiceController@create') }}" class="btn btn-primary">+Add New</a>
						</div>
						<div class="col-md-3 col-md-offset-5">
							<form action="{{ action('AdminServiceController@search') }}">
								<div class="form-group">
									<input type="text" name="keyword" class="form-control" placeholder="Search" value="{{ request('keyword') ? request('keyword') : '' }}">
								</div>
							</form>
						</div> --}}
					</div>
				</div>
				<div class="panel-body btn-margins">
					<div class="col-md-12">
						<div class="container">
					        <div class="row">
					            <div class="col-md-8 col-md-offset-2">

					                @if (session('status'))
					                    <div class="alert alert-success">
					                        {{ session('status') }}
					                    </div>
					                @endif

					                <form method="post" action="{{ route('settings.store') }}" class="form-horizontal" role="form">
					                    {!! csrf_field() !!}
					                    @if(count(config('setting_fields', [])) )

					                        @foreach(config('setting_fields') as $section => $fields)
					                            <div class="panel panel-info">
					                                <div class="panel-heading">
					                                    <i class="{{ array_get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>
					                                    {{ $fields['title'] }}
					                                </div>

					                                <div class="panel-body">
					                                    <p class="text-muted">{{ $fields['desc'] }}</p>
					                                </div>

					                                <div class="panel-body">
					                                    <div class="row">
					                                        <div class="col-md-8">
					                                            @foreach($fields['elements'] as $field)
					                                                @includeIf('admin.pages.settings.fields.' . $field['type'] )
					                                            @endforeach
					                                        </div>
					                                    </div>
					                                </div>

					                            </div>
					                            <!-- end panel for {{ $fields['title'] }} -->
					                        @endforeach

					                    @endif

					                    <div class="row m-b-md">
					                        <div class="col-md-12">
					                            <button class="btn-primary btn">
					                                Save Settings
					                            </button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div><!-- /.panel-->
		</div><!--/ col-md-12 -->
		@include('admin.partials.copyright')
	</div><!--/ row -->
@endsection	