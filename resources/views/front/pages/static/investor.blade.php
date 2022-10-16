@section('title') Request For Invest @stop
@extends('front.layout.master-inner')
@section('content-inner')
    <!-- START SECTION CONTACT US -->
    <section class="contact-us">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-10 col-lg-offset-2">
                    {{-- <h3 class="mb-4">Coming Soon</h3> --}}
                    <h3 class="mb-4">Request For Invest</h3>
                    @include('components.errors')
                    <form action="/investor/store" method="post" enctype='multipart/form-data' class="investor-jquery-form">
                        <div class="row">
                            <!-- Name Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Email Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Phone Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('phone', 'Phone:') !!}
                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- City Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('city', 'City:') !!}
                                {!! Form::text('city', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Country Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('country', 'Country:') !!}
                                {!! Form::select('country', \App\Models\Country::pluck('name','name')->toArray(), null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Address Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('address', 'Address:') !!}
                                {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Message Type Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('message_type', 'Message Type:') !!}
                                {!! Form::select('message_type', ['Interested to know about Bay Economic Zone' => 'Interested to know about Bay Economic Zone', 'Interested to land purchase' => 'Interested to land purchase', 'Interested to setup factory' => 'Interested to setup factory', 'Interested to start a Joint venture' => 'Interested to start a Joint venture', 'Others' => 'Others'], null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Message Details Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('message_details', 'Message Details:') !!}
                                {!! Form::textarea('message_details', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- 'bootstrap / Toggle Switch Status Field' -->
                            {{-- <div class="form-group col-sm-6">
                                {!! Form::label('status', 'Status:') !!}
                                <label class="checkbox-inline">
                                    {!! Form::hidden('status', 0) !!}
                                    {!! Form::checkbox('status', 1, null,  ['data-toggle' => 'toggle']) !!}
                                </label>
                            </div> --}}


                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                {{-- <a href="{{ route('admin.investors.index') }}" class="btn btn-default">Cancel</a> --}}
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->
@endsection
