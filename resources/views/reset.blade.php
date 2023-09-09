@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Login</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.login') }}" method="POST">
            @csrf
            <div class="row gtr-uniform">
                <p>Enter your email to recieve the reset link</p>
                <div class="col-12 col-12-xsmall">
                    <input type="email" name="email" id="email" value="" placeholder="Email" required>
                </div>
                <br>
               
                <div class="col-12 my-3">
                    <button type="submit" class="primary">Reset Password</button>
                </div>    
            </div>
        </form>
    </div>
@endsection
