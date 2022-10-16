@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Slider
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($slider, ['route' => ['admin.sliders.update', $slider->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.sliders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection