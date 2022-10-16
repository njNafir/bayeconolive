<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $investor->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $investor->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $investor->phone }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{{ $investor->city }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $investor->country }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $investor->address }}</p>
</div>

<!-- Message Type Field -->
<div class="form-group">
    {!! Form::label('message_type', 'Message Type:') !!}
    <p>{{ $investor->message_type }}</p>
</div>

<!-- Message Details Field -->
<div class="form-group">
    {!! Form::label('message_details', 'Message Details:') !!}
    <p>{{ $investor->message_details }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $investor->status_buttons() !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $investor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $investor->updated_at }}</p>
</div>

