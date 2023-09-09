@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Login</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.login') }}" method="POST">
            @csrf
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                    <input type="email" name="email" id="email" value="" placeholder="Email" required>
                </div>
                <br>
                <div class="col-12 col-12-xsmall">
                    <input type="password" name="password" id="pass" value="" placeholder="Password" required>
                </div>
                <br>
                <div class="col-12">
                    <a href="{{ route('dashboard.login.reset') }}">Forgot Password? Reset Here</a>
                </div>
                <br>
                <div class="col-12 my-3">
                    <button type="submit" class="primary">Login</button>
                </div>             
            </div>
        </form>
    </div>
@endsection
