@extends('layouts.app')

@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ route('logout') }}">Logout</a>

        @section('content')
        <div class="flex-center position-ref full-height">
            <h1>Messages</h1>
            @if(count($messages) > 0)
                <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->message}}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
        @endsection

@else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif