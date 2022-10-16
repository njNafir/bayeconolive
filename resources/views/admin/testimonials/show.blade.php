@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Testimonial
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="form-group">
                        <label for="name">ID:</label>
                        <p>{{ $testimonial->id }}</p>
                    </div>
                    @include('admin.testimonials.show_fields')
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
