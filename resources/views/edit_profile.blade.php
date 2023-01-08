@extends('layouts.template')

@section('title')
  Edit Profile
@endsection

@section('content')
  <!-- Profile -->
  <section class="container-fluid mt-5 mb-5 px-5">
    <div class="row justify-content-center">
      <div class="col-9 py-4 px-5" style="border: 5px solid #025959; border-radius: 20px;">
        <h2 class="fw-bold mb-4">Profile Settings</h2>
        <form action="" id="profile-form" autocomplete="off">
          <div class="row mb-4">
            <div class="profile-picture col-3 d-flex flex-column align-items-center">
              <span class="fw-bold mb-3">Profile Image</span>
              <label for="profile-picture">
                <div class="image-group rounded-circle">
                  <img src="assets/placeholder-image.png" class="img-thumbnail rounded-circle" alt="profile-picture"
                    style="width: 12rem; height: 12rem">
                  <div class="image-icon-container rounded-circle bg-primary">
                    <img src="assets/image-icon.webp" alt="image-icon" class="image-icon">
                  </div>
                </div>
              </label>
              <input id="profile-picture" type="file">
            </div>
            <div class="col-9 ps-5">
              <div class="mb-3">
                <label for="full-name" class="profile-form-label form-label required">Full Name</label>
                <input type="text" class="form-control" id="full-name" placeholder="Full Name" required>
              </div>
              <div class="mb-3">
                <label for="username" class="profile-form-label form-label required">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label for="email" class="profile-form-label form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com" disabled>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="bio" class="profile-form-label form-label">Bio</label>
            <textarea class="form-control" id="bio" rows="2" placeholder="Tell your story to the world!"></textarea>
          </div>
          <div class="mb-5">
            <div class="fw-bold mb-3">Links</div>
            <div class="form-floating mb-1">
              <input type="text" class="form-control" id="floatingInput" placeholder="Instagram">
              <label for="floatingInput">Instagram</label>
            </div>
            <div class="form-floating mb-1">
              <input type="text" class="form-control" id="floatingInput" placeholder="Twitter">
              <label for="floatingInput">Twitter</label>
            </div>
            <div class="form-floating mb-1">
              <input type="text" class="form-control" id="floatingInput" placeholder="Your Site">
              <label for="floatingInput">Your Site</label>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="wallet" class="col-2 profile-form-label form-label">Wallet 1</label>
            <div class="col-5">
              <input type="text" id="wallet" class="form-control" placeholder="Metamask" disabled>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
              <input type="text" id="wallet" class="form-control" placeholder="0 ETH" disabled>
            </div>
          </div>
          <div class="mb-5 row">
            <label for="add-wallet" class="col-2 profile-form-label form-label">Add Wallet</label>
            <div class="col-5">
              <select class="form-select" aria-label="add-wallet">
                <option selected value="coinbase">Coinbase</option>
                <option value="alphawallet">AlphaWallet</option>
              </select>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
              <button type="button" class="btn btn-primary">Connect</button>
            </div>
          </div>
        </form>
        <button type="submit" form="profile-form" value="profile-submit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </section>
  <!-- Profile End -->
@endsection
