@extends('layouts.template')

@section('title')
  Register
@endsection

@section('content')
  <!-- Register -->
  <section class="container-fluid login-register">
    <div class="row px-4 py-2 mt-5 align-items-center" style="height: 85vh">
      <div class="col-md-4 title-animation align-items-center text-center px-5 me-5">
        <h3 class="mb-4">
          Sign up now to join the largest Indonesian NFT community!
        </h3>
        <h5 class="text-muted mb-5">Have an account already?</h5>
        <a href="/login" class="btn btn-primary">
          Sign In
        </a>
      </div>
      <div class="col-1 vertical-line" style="border-left: solid 3px #025959; height: 75vh"></div>
      <div class="col-md-5 form-animation">
        <h2 class="mb-4">Register</h2>
        @if ($errors->any())
          <div class="text-center"><strong class="text-danger">{{ $errors->first() }}</strong></div>
        @endif
        {{-- <form id="register-form" autocomplete="off" onsubmit="event.preventDefault(); validation()"> --}}
        <form action="/user" method="POST" class="mt-3" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            {{-- <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" /> --}}
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            {{-- <div class="invalid-feedback" id="email-invalid">
                Please enter a valid email
                </div> --}}
          </div>
          <div class="mb-3">
            {{-- <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" /> --}}
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            {{-- <div class="invalid-feedback" id="username-invalid">
                Username must be at least 3 characters long
                </div> --}}
          </div>
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
          </div>
          <div class="mb-3">
            {{-- <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" /> --}}
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            {{-- <div class="form-text mt-0">
                Password must be at least 8 characters long, contains a number
                and an uppercase letter
                </div>
                <div class="invalid-feedback" id="password-invalid"></div> --}}
          </div>
          <div class="mb-3">
            <label for="password-confirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password-confirm" name="password-confirm"
              placeholder="Confirm Password" />
          </div>
          <button type="submit" class="btn btn-primary text-white">
            Register
          </button>
        </form>
      </div>
    </div>
  </section>
  <!-- Register End -->
@endsection
