{{-- @dd($user) --}}

@extends('layouts.template')

@section('title')
  Home
@endsection

@section('content')
    {{-- Part 1 --}}
    <header class="container-fluid p-0 part1-bg">
        <div class="container py-5">
        <div class="row">
            <div class="col-6">
            <h1 class="text-white header__title">
                Discover, create, and sell <br />
                extraordinary
                <span class="text-primary">NFTs</span>
            </h1>
            <p class="text-white lh-base fs-5 mt-4">
                The world's largest marketplace for non fungible token <br />
                (NFT) artist and collector!
            </p>
            <button class="btn btn-primary btn-lg mt-4 fw-light">
                Get Started
            </button>
            </div>
            <div class="col-6 d-flex justify-content-center">
            <div class="card card-featured-nft">
                <img src="{{ asset('image/adorn/galaxies.jpeg') }}" class="card-img-top" style="height: 100%" alt="..." />
                <div class="card-body bg-light header-img-bg">
                    <div class="row mb-3">
                        <div class="col">
                        <h6 class="text-secondary">NFT</h6>
                        <h4 class="card-title text-uppercase text-primary">
                            Find an NFT of your own!
                        </h4>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>

    {{-- Part 2 --}}
    <section class="statistic-numbers bg-dark container-fluid py-5">
        <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="text-white">
                <div class="d-flex justify-content-center">
                <div class="text-center px-5">
                    <h1 class="fw-bold">
                    <span class="value">74000</span>
                    </h1>
                    <h6 class="text-white-50 fw-light">Artwork</h6>
                </div>
                <div class="text-center px-5">
                    <h1 class="fw-bold value">16000</h1>
                    <h6 class="text-white-50">Auction</h6>
                </div>
                <div class="text-center px-5">
                    <h1 class="fw-bold value">9000</h1>
                    <h6 class="text-white-50">Artists</h6>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    {{-- Most Popular - New --}}
    <section class="bg-light container-fluid py-5">
        <div class="container">
            <h2 class="text-center">Most Popular Arts</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4 m-2 most-popular">
                @foreach ($popular as $pop)
                  <div class="col">
                    <div class="card h-100 text-center mb-3" style="...">
                        <div class="card-img-container">
                            <img class="card-img" src="{{ '/'.$pop['image'] }}" alt="Image Not Found" style="...">
                        </div>
                      <div class="card-body">
                        <h5 class="card-title">{{ $pop->name }}</h5>
                        <h5 class="card-text mb-0 fw-bold text-dark">Rp.{{ $pop->price }}</h5>
                      </div>
                      <div class="flex">
                        {{-- UPDATE --}}
                        <a href="/detail/{{ $pop->id }}" type="submit" class="btn btn-primary w-100">Buy</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
        </div>
    </section>

  <!-- Category -->
  <section class="text-black container py-5">
    <h2 class="fw-bold mb-0 mx-auto">Category</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-2">
        @foreach ($category as $items)
          <div class="col">
            <div class="card h-100 text-center mb-3" style="...">
              <img class="card-img text-center category-cards" src="{{ '/'.$items['image'] }}" alt="Image Not Found" style="height:15rem; width:15rem">
              <div class="card-body">
                <h5 class="card-title">{{ $items->name }}</h5>
              </div>
              <div class="flex">
                {{-- UPDATE --}}
                <a href="#" type="submit" class="btn btn-primary w-50">More Detail</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
  </section>
  <!-- Category end-->

    <!-- Top Seller -->
    <section class="text-white container-fluid py-5" style="background-color: #051821">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center justify-content-center mx-auto" style="margin-bottom: 2rem">
                    <h3 class="fw-bold mb-0">Top Seller</h3>
                </div>
                <table class="table table-striped table-dark table-hover table-bordered text-center" style="border: white">
                    <tbody>
                        {{-- New --}}
                        <tr>
                        <th>Rank</th>
                        <th>Profile</th>
                        <th>Username</th>
                        <th>Worth</th>
                        </tr>
                        @foreach ($user as $use)
                        <tr>
                        <th scope='row'>{{ $loop->iteration }}</th>
                            <td>
                            <img src="{{ '/'.$use['image'] }}" class="rounded-circle"
                                style="height: 3rem; width: 3rem" alt="User Image" />
                            </td>
                            <td class="text-white align-middle">
                            <h6>{{ $use['username'] }}</h6>
                            </td>
                            <td class="text-white align-middle">
                            <h6>{{ $use['balance'] }}</h6>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>
    </section>
@endsection
