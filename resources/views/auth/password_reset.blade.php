@extends('layouts')
@section('title', 'Reset Password')
@section('content')

<div class="container">
    <h1>Reset Password</h1>
    <form action="{{ route('password.email') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </form>
</div>

@endsection