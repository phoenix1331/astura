@extends('app')
@section('content')
<div class="inner-banner"></div>
<div class="container">
    <div class="content main">
        <div class="row">
            <div class="col-lg-12">
                @if(!empty($message))
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      {{ $message }}
                  </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
             <h1>{{$title}}</h1>
                <p>
                Please get in touch:<br />
                info@astura.co.uk<br />
                +44 (0) 1633 302 069<br />
                Alternatively leave us a message here<br />
                </p>
            </div>
            <div class="col-lg-6">
            <div class="form-create">
                {!! Form::model( [ 'files'=> true, 'route' => ['jobs.store']]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}<br />
                    {!! Form::text('name') !!}
                </div>
                 
                <div class="form-group">
					{!! Form::label('email', 'Email:') !!}<br />
					{!! Form::text('email') !!}
                </div>
                 
                <div class="form-group">
                    {!! Form::label('message', 'Message:') !!}<br />
                    {!! Form::textarea('message') !!}
                </div>
                 
                <div class="form-group">
                    {!! Form::submit('Submit', array('class' => 'btn-primary')) !!}
                </div>
                    {!! Form::close() !!}
                </div>  
            </div>
        </div>
    </div> <!-- Close content -->
</div> <!-- Close container -->
@endsection