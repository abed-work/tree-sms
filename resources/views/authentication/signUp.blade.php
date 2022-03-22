@extends('layouts.admin')

@section('title','sign up')
    
@section('content')
    <div class="signUp">
        <form action="{{ route('sign-up') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="confirmPassword">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phoneNumber" id="">
            </div>
            <div class="form-group">
                <button type="submit">send</button>
            </div>
        </form>
    </div>
@endsection