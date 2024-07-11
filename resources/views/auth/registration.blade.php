@extends('layouts')
@section('title', 'Register')
@section('content')

<div class="container">
    <h1>Registration</h1>
    <p>Please register to continue</p>
    <form action="{{ route('registration.post') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Birthday:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="ageCheck" name="age_check" required>
            <label class="form-check-label" for="ageCheck">I confirm that I am 18 years old or older</label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

@endsection