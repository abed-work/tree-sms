@extends('layouts.admin')

@section('title','sign up')

@section('content')
    <div class="login">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <button>send</button>
            </div>
        </form>
    </div>
@endsection