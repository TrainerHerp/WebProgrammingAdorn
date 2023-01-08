@extends('layouts.template')

@section('title')
  Register
@endsection

@section('content')
  <!-- Register -->
  <section class="container-fluid">
    <div class="row px-4 py-2 align-items-center" style="height: 70vh">
      <div class="col-md-4 title-animation align-items-center text-center px-5 me-5">
        <h3 class="mb-4">
          Sign up now to join the largest Indonesian NFT community!
        </h3>
        <h5 class="text-muted mb-5">Have an account already?</h5>
        <button class="btn btn-primary" onclick="gotoLogin()">Sign In</button>
      </div>
      <div class="col-1 vertical-line" style="border-left: solid 3px #025959; height: 75vh"></div>
      <div class="col-md-5 form-animation">
        <h2 class="mb-4">Register</h2>
        <form id="register-form" autocomplete="off" onsubmit="event.preventDefault(); validation()">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" />
            <div class="invalid-feedback" id="email-invalid">
              Please enter a valid email
            </div>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" />
            <div class="invalid-feedback" id="username-invalid">
              Username must be at least 3 characters long
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" />
            <div class="form-text mt-0">
              Password must be at least 8 characters long, contains a number
              and an uppercase letter
            </div>
            <div class="invalid-feedback" id="password-invalid"></div>
          </div>
          <div class="mb-3">
            <label for="password-confirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password-confirm" placeholder="Confirm Password" />
          </div>
          <div class="mb-4">
            <label for="wallets-selection" class="form-label">Wallet</label>
            <select class="form-select" aria-label="wallets-selection">
              <option selected value="metamask">Metamask</option>
              <option value="coinbase">Coinbase</option>
              <option value="alphawallet">AlphaWallet</option>
            </select>
          </div>
        </form>
        <button type="submit" form="register-form" value="register-submit" class="btn btn-primary text-white">
          Register
        </button>
      </div>
    </div>
  </section>
  <!-- Register End -->
@endsection
