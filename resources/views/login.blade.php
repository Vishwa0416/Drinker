@extends('layouts')
@section('title', 'Log In')
@section('content')

<div class="container">
    <h1>Welcome to Drinker!</h1>
    <p>Please Log In to continue</p>
    <form action="{{route('login.post')}}" method="post" class="ms-auto me-auto mt-3" style="width: 500px">
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection