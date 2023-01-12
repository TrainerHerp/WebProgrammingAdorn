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
        @if ($errors->any())
            <div class="text-center"><strong class="text-danger">{{ $errors->first() }}</strong></div>
        @endif
        <form action="/edit-profile" method="POST" id="profile-form" autocomplete="off">
            @csrf
            @method('PATCH')
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="(5-20 letters)" value="{{ $username }}" required>
            </div>
            <div class="mb-5" style="height: 5rem">
                <label for="bio" class="form-label">Bio</label>
                <textarea type="text" class="form-control" id="bio" name="bio" placeholder="(min 5 letters)" required>{{ $bio }}</textarea>
            </div>
        </form>
        <button type="submit" form="profile-form" value="profile-submit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </section>
  <!-- Profile End -->
@endsection
