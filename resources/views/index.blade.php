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
                <img src="{{ asset('storage/img/adorn/galaxies.jpeg') }}" class="card-img-top" style="height: 100%" alt="..." />
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
  <!-- Most Popular -->
  <section class="bg-light container-fluid py-5">
    <div class="container">
      <h2 class="text-center">Most Popular Arts</h2>
      <div class="row">
        <div id="mostPopularWrapper" class="col-12 my-4 position-relative p-0">
          <div id="mostPopularArtCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner py-3 px-1">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/silhouete.webp" class="card-img-top" style="height: 24rem"
                        alt="Silhouette of Person Standing on Field" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Photography</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Silhouette of Person
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">0.198 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/silhouete.webp&nftName=Silhouette of Person&currentBid=0.198&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/dock-sunset.webp" class="card-img-top" style="height: 24rem"
                        alt="Dock  Sunset" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Virtual</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Dock Sunset
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">10.00 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/dock-sunset.webp&nftName=Dock Sunset&currentBid=10.00&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/record.webp" class="card-img-top" style="height: 24rem"
                        alt="Black Record" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Music</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Black Record
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">0.410 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/record.webp&nftName=Black Record&currentBid=0.410&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/spiral.jpeg" class="card-img-top" style="height: 24rem"
                        alt="Spiral" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Art</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Spiral
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">53.20 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/spiral.jpeg&nftName=Spiral&currentBid=53.20&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/basket.jpeg" class="card-img-top" style="height: 24rem"
                        alt="Basketball Court" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Sport</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Basketball Court
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">12.40 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/basket.jpeg&nftName=Basketball Court&currentBid=12.40&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/racket.jpeg" class="card-img-top" style="height: 24rem"
                        alt="Racket and Balls" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Sport</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Racket and Balls
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">1.120 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/racket.jpeg&nftName=Racket and Balls&currentBid=1.120&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/yellow-and-brown.jpeg" class="card-img-top" style="height: 24rem"
                        alt="Yellow and Brown" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Art</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Yellow and Brown
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">7.500 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/yellow-and-brown.jpeg&nftName=Yellow and Brown&currentBid=7.50&seller=andrzej_sapkowski"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/textured.webp" class="card-img-top" style="height: 24rem"
                        alt="Textured Ball" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Virtual</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              Textured Ball
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">0.140 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/textured.webp&nftName=Textured Ball&currentBid=0.140"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card w-100 card-nft">
                      <img src="./images/featured/yellowred.webp" class="card-img-top" style="height: 24rem"
                        alt="YellowRed Citrus" />
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-secondary">Photography</h6>
                            <h4 class="card-title text-uppercase text-primary">
                              YellowRed Citrus
                            </h4>
                          </div>
                          <div class="col d-flex text-end align-items-center justify-content-end">
                            <h2 class="mb-0 fw-bold text-dark">6.89 ETH</h2>
                          </div>
                        </div>
                        <div class="row align-items-end">
                          <div class="col">
                            <a href="transaction.html?src=./images/featured/yellowred.webp&nftName=YellowRed Citrus&currentBid=6.89"
                              class="btn btn-primary w-100">
                              Place a bid
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="slide-prev" href="#mostPopularArtCarousel" role="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left text-white"></i>
          </button>
          <button class="slide-next" href="#mostPopularArtCarousel" role="button" data-bs-slide="next">
            <i class="bi bi-chevron-right text-white"></i>
          </button>
        </div>
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
              <img class="card-img text-center" src="{{ '/'.$items['image'] }}" alt="Image Not Found" style="height:20rem; width:auto">
              <div class="card-body">
                <h5 class="card-title">{{ $items->name }}</h5>
              </div>
              {{-- <div class="flex"> --}}
                {{-- UPDATE --}}
                {{-- <a href="/detail/{{ $post->id }}" type="submit" class="btn btn-dark w-50">More Detail</a> --}}
              {{-- </div> --}}
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

        <!-- Sort Dropdown -->
        <div class="dropdown" style="margin-bottom: 2rem">
          <button class="btn dropdown-toggle text-white" style="width: 10rem" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" id="sortDropdownButton">
            Sort
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu bg-primary text-white" aria-labelledby="dropdownMenu1">
            <li class="dropdown-item">
              <a href="#" data-value="This Week" class="text-white" style="text-decoration: none">This Week</a>
            </li>
            <li class="dropdown-item">
              <a href="#" data-value="This Month" class="text-white" style="text-decoration: none">This
                Month</a>
            </li>
            <li class="dropdown-item">
              <a href="#" data-value="This Year" class="text-white" style="text-decoration: none">This Year</a>
            </li>
          </ul>
        </div>
        <!-- Sort Dropdown end -->

        <table class="table table-striped table-dark table-hover table-bordered text-center" style="border: white">
          <tbody>
            <!-- 1 -->
            <tr>
              <td class="text-white align-middle">1</td>
              <td>
                <img src="./assets/NFT/1 - NFT Bored Ape Yacht Club-20211214165446.webp" class="rounded-circle"
                  style="height: 3rem; width: 3rem" alt="Bored Ape NFT" />
              </td>
              <td class="text-white align-middle">
                <h6>Bored Ape NFT</h6>
              </td>
              <td class="text-white align-middle">
                <h6>Floor Price : 103</h6>
              </td>
            </tr>
            <!-- 2 -->
            <tr>
              <td class="text-white align-middle">2</td>
              <td>
                <img src="./assets/NFT/2 - Mutant Ape Yacht.png" class="rounded-circle"
                  style="height: 3rem; width: 3rem" alt="Mutant Ape Yacht" />
              </td>
              <td class="text-white align-middle">
                <h6>Mutant Ape Yacht</h6>
              </td>
              <td class="text-white align-middle">
                <h6>Floor Price : 23.6</h6>
              </td>
            </tr>
            <!-- 3 -->
            <tr>
              <td class="text-white align-middle">3</td>
              <td>
                <img src="./assets/NFT/3 - Kaizoku Mechanics.jpg" class="rounded-circle"
                  style="height: 3rem; width: 3rem" alt="Kaizoku Mechanics" />
              </td>
              <td class="text-white align-middle">
                <h6>Kaizoku Mechanics</h6>
              </td>
              <td class="text-white align-middle">
                <h6>Floor Price : 20.12</h6>
              </td>
            </tr>
            <!-- 4 -->
            <tr>
              <td class="text-white align-middle">4</td>
              <td>
                <img src="./assets/NFT/4 - nft-from-cryptopunk-collection-was-mistakenly-sold-for-less-than-0.01.jpg"
                  class="rounded-circle" style="height: 3rem; width: 3rem" alt="CryptoPunk NFT" />
              </td>
              <td class="text-white align-middle">
                <h6>CryptoPunk NFT</h6>
              </td>
              <td class="text-white align-middle">
                <h6>Floor Price : 19.94</h6>
              </td>
            </tr>
            <!-- 5 -->
            <tr>
              <td class="text-white align-middle">5</td>
              <td>
                <img src="./assets/NFT/5 - Muri by Haus NFT.webp" class="rounded-circle"
                  style="height: 3rem; width: 3rem" alt="Muri by Haus" />
              </td>
              <td class="text-white align-middle">
                <h6>Muri by Haus</h6>
              </td>
              <td class="text-white align-middle">
                <h6>Floor Price : 0.73</h6>
              </td>
            </tr>
          </tbody>
        </table>
        <ul class="pagination justify-content-center" id="tablePagination">
          <li class="page-item">
            <a class="page-link" href="#">prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">next</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
@endsection
