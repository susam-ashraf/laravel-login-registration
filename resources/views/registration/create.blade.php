@extends('layouts.master')



@section('content')

    <div class="container">

        <h1>Register Now</h1>

        <br><br>

        <form method="post" action="/register">

            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success ">Register</button>

            @include('layouts.errors')

        </form>

    </div>

@endsection