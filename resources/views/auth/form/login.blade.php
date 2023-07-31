<!-- resources/views/auth/form/login.blade.php -->

@extends('layouts.app')

@include('layouts.header')

@section('content')
    <h2>Login</h2>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
    @csrf

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required autofocus>
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

@include('layouts.footer-form')

@endsection



