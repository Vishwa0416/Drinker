@extends('layouts')
@section('title', 'Contact Us')
@section('content')

<div class="container">
    <h3 class="text-center">Contact Us</h3>
    <p class="text-center">Feel free to get in touch with us by filling out the form below or reaching out via our
        social channels.</p>

    <!-- Contact Form -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('submit.form') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5"
                                placeholder="Write your message here" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary w-100">Send a Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .text-section {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: none;
    }

    h3 {
        font-weight: bold;
    }
</style>

@endsection