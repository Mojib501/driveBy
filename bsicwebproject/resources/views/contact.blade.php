@extends('layouts.master')
@section('content')
<h1>Contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-groupe">
      {{Form::label('name', 'Name')}}
      {{Form::text('name','', ['class' => 'form-control', 'placeholder'=>'Enter your Name'])}}
    </div>
    <div class="form-groupe">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '',['class' => 'form-control', 'placeholder'=>'Enter your email'])}}
    </div>
    <div class="form-groupe">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '',['class' => 'form-control', 'placeholder'=>'Enter your Message'])}}
    </div>
    <div class="">
      {{Form::submit('Submit',['class' => 'btn btn-primary'])}}

    </div>
{!! Form::close() !!}
@endsection
