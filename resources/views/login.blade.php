@extends('layouts.template')

@section('title')
  Login
@endsection

@section('content')
  <!-- Login -->
  <section class="container-fluid">
    <div class="row px-4 py-2 align-items-center" style="height: 70vh">
      <div class="col-4 title-animation align-items-center text-center px-5 me-5">
        <h3 class="mb-4">Don't have an account yet?</h3>
        <h5 class="text-muted mb-5">
          Sign up now to join the largest Indonesian NFT community!
        </h5>
        <button class="btn btn-primary" onclick="gotoRegister()">
          Sign Up
        </button>
      </div>
      <div class="col-1 vertical-line mt-1" style="border-left: solid 3px #025959; height: 75vh"></div>
      <div class="col-6 pe-5 form-animation">
        <h1 class="text-center mb-5">Welcome Back</h1>
        <h4 class="mt-5 mb-4">Login</h4>
        <form id="login-form" autocomplete="off" onsubmit="event.preventDefault(); gotoProfile()">
          <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" required />
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required />
            <div class="position-relative">
              <i class="bi-eye togglePassword" onclick="showPassword()"></i>
            </div>
            <a href="" class="text-decoration-none">
              <div class="form-text text-end">Forget password?</div>
            </a>
          </div>
          <button type="submit" form="login-form" value="login-submit" class="btn btn-primary">
            Login
          </button>
        </form>
      </div>
    </div>
  </section>
  <!-- Login End -->
@endsection
