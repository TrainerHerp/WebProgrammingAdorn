@extends('layouts.template')

@section('title')
  Transaction
@endsection

@section('content')
  <div class="container pb-5 mt-5">
    <div class="row">
      <div class="col-5 me-4">
        <div class="current-nft rounded-3">
          <img id="transactionNFTImage" src="{{ asset($nft->image) }}" class="card-img-top img-fluid"
            alt="{{ $nft->name }}" />
        </div>
      </div>
      <div class="col-6 border border-2 border-primary p-4 rounded-3">
        <div class="profile d-flex align-items-center">
          <img src="{{ asset($owner->image) }}" alt="">
          <h6 class="text-black-50 m-1">
            <a href="/user/{{ $owner->id }}" class="text-tertiary text-decoration-none"
              id="transactionSeller">{{ $owner->username }}</a>
          </h6>
        </div>
        <h2 id="transatctionNFTName" style="font-weight: 900">
          {{ $nft->name }}
        </h2>
        <p class="mt-2">
        <h6>{{ $nft->description }}</h6>
        </p>
        @if ($creator->id == $owner->id)
          <h5 class="mt-4">Price: Rp {{ $nft->price }}</h5>
        @endif
        <h6 class="mt-2">Created by: <a href="/user/{{ $creator->id }}"
            class="text-tertiary text-decoration-none">{{ $creator->username }}</a></h6>
        @auth
          @if ($creator->id == $owner->id && Auth::user()->id != $owner->id)
            <div class="mt-4">
              <form id="placeBidForm" class="w-75 mb-3" action="/buy/{{ $nft->id }}" method="post">
                @csrf
                <div class="input-group">
                  <button class="btn btn-primary" type="submit">Buy NFT</button>
                  <select class="form-select">
                    <option value="1" selected>OVO</option>
                    <option value="2">GoPay</option>
                    <option value="3">Virtual Account</option>
                    <option value="4">Credit Card</option>
                  </select>
                </div>
              </form>
            </div>
          @endif
        @else
          <div class="d-flex justify-content-center">
            <button class="btn btn-outline-primary btn-lg justify-content-center mt-5">
              <h5 class="m-0">
                <a href="/login" class="text-tertiary text-decoration-none">Login To Buy NFT</a>
              </h5>
            </button>
          </div>
        @endauth
      </div>
    </div>
  </div>
@endsection
