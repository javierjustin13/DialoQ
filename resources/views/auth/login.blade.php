@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('title', 'Login')

@section('login')
{{-- aku belom bisa atur cssnyaa --}}
{{-- <div class="success-message">
    @include('widgets.success-message')
</div> --}}
<section class="login">
    <div class="loginimg"><img src="/image/dialoQ-register.png" alt="Image"></div>
    <form name="loginform" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="container">
            <div class="logintitle">Login</div>

            <div class="inputtitle">Email</div>
            <div class="form-group"><input class="inputbox" type="email" name="email"
                    placeholder="example@gmail.com"></div>
            @error('email')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="inputtitle">Password</div>
            <div class="form-group"><input class="inputbox" type="password" name="password"
                    placeholder="more than 8 characters"></div>
            @error('password')
                <span class="error text-danger">{{ $message }}</span>
            @enderror

            <div class="question">Don't have an account yet? <a href="/register">Register here</a></div>            <button class="submitbtn" type="submit">Submit</button>
            <p class="error submit-error"></p>
            <p class="success register-success"></p>
        </div>
    </form>
</section>
@endsection
