@extends('layouts.master')



@section('content')

    <div class="container">

        <h2>Home Page</h2>
        <br><br>

        @if (auth()->check())
            <h1 class="text-center">Howdy , {{ auth()->user()->name }} !</h1>
        @endif

        <br><br>

        @if (! auth()->check())
            <h1 class="text-center">You Are Not Logged In !</h1>
        @endif


        <br><br>

        @include('layouts.errors')


    </div>

@endsection