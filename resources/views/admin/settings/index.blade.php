@extends('layouts.app')
@section('title') Settings @stop

@section('css')
	<link rel="stylesheet" href="{{asset('css/settings.css')}}">
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="setting-box">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
						
							<div class="settings-content">
								<div class="col-md-12">
							        {{-- <h3>Left Tabs</h3> --}}
							        <hr/>
							        <div class="col-md-3 col-xs-12"> <!-- required for floating -->
							          <!-- Nav tabs -->
							          <ul class="nav nav-tabs tabs-left">
							          	@if(count(config('setting_fields', [])) )
							          		<?php $i = 0; ?>
					                        @foreach(config('setting_fields') as $section => $fields)
					                        	<li @if($i == 0) class="active" @endif >
					                        		<a href="#{{ $section }}" data-toggle="tab">
					                        		<i class="{{ Arr::get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>
					                        		{{ $fields['title'] }}
					                        		</a>
					                        	</li>
					                        	<?php $i++; ?>
					                        @endforeach
					                    @endif
							            {{-- <li class="active"><a href="#Tab-1" data-toggle="tab">Tab-1</a></li>
							            <li><a href="#Tab-2" data-toggle="tab">Tab-2</a></li>
							            <li><a href="#Tab-3" data-toggle="tab">Tab-3</a></li>
							            <li><a href="#Tab-4" data-toggle="tab">Tab-4</a></li> --}}
							          </ul>
							        </div>

							        <div class="col-md-9 col-xs-12">

							        	@if (session('status'))
						                    <div class="alert alert-success">
						                        {{ session('status') }}
						                    </div>
						                @endif

										<form method="post" action="{{ route('settings.store') }}" class="" role="form" enctype="multipart/form-data">
							                {!! csrf_field() !!}
								            <!-- Tab panes -->
								            <div class="tab-content">
									          	@if(count(config('setting_fields', [])) )
										          	<?php $i = 0; ?>
							                        @foreach(config('setting_fields') as $section => $fields)
														<div class="tab-pane @if($i == 0) active @endif " id="{{$section}}">
															@foreach($fields['elements'] as $field)
				                                                @includeIf('admin.settings.fields.' . $field['type'] )
				                                            @endforeach
														</div>
														<?php $i++; ?>
							                        @endforeach
							                    @endif
									            {{-- <div class="tab-pane active" id="Tab-1">Tab-1 Tab.</div>
									            <div class="tab-pane" id="Tab-2">Tab-2 Tab.</div>
									            <div class="tab-pane" id="Tab-3">Tab-3 Tab.</div>
									            <div class="tab-pane" id="Tab-4">Tab-4 Tab.</div> --}}
									        </div>
					                        <div class="col-md-12">
					                            <button class="btn-primary btn">
					                                Save Settings
					                            </button>
					                        </div>
					                    </form>    
							        </div>
							        <div class="clearfix"></div>
						       </div>
							</div><!--end of settings-content -->
						</div>
					</div>
					
				</div><!-- /.panel-->
			</div><!--end of settings-box-->
		</div><!--/ col-md-12 -->
	</div><!--/ row -->
@endsection	