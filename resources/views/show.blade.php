@extends('layouts.template')

@section('title')
  Transaction
@endsection

@section('content')
  <div class="container pb-5">
    <div class="row">
      <div class="col-5">
        <div class="current-nft rounded-3">
          <img id="transactionNFTImage" src="{{ $nft->image_url }}" class="card-img-top img-fluid"
            alt="{{ $nft->name }}" />
        </div>
      </div>
      <div class="col-6">
        <div>
          <div class="profile d-flex align-items-center">
            <img src={{ '/' . $owner->image_url }} alt="" />
            <h6 class="text-black-50 m-1">
              <a href="/user/{{ $owner->id }}" class="text-tertiary text-decoration-none"
                id="transactionSeller">{{ $owner->username }}</a>
            </h6>
          </div>
          <h2 id="transatctionNFTName" style="font-weight: 900">
            {{ $nft->name }}
          </h2>
          <p class="mt-2">
            {{ $nft->description }}
          </p>
          <div class="mt-4">
            <form id="placeBidForm" class="w-75 mb-3" action="">
              <div class="input-group">
                <input id="myBid" type="number" min="0" class="form-control"
                  aria-label="Text input with dropdown button" />
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Metamask
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Metamask</a></li>
                  <li><a class="dropdown-item" href="#">AlphaWallet</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Coinbase</a>
                  </li>
                </ul>
              </div>
              <div id="price" class="text-black-50" style="height: 12px">
                Rp <span>0</span>
              </div>
              <div class="mt-4">
                <button class="btn btn-primary w-75 mb-2">
                  Place your bid
                  <i class="bi bi-arrow-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
