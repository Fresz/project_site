@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Contact
        </div>
        {!! Form::open(['url' => 'contact/submit']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}

                {{Form::text('name', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'E-Mail Address')}}

                {{Form::text('email', 'example@gmail.com')}}
            </div>
            <div class="form-group">
                {{Form::label('message', 'Message')}}

                {{Form::textarea('message', 'Enter message')}}
            </div>
            <div class="form-group">
                {{Form::submit('Submit')}}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection