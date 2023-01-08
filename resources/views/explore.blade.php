@extends('layouts.template')

@section('title')
  Explore
@endsection

@section('content')
  <!-- EXPLORE SECTION -->
  <div class="py-5 mb-4">
    <div class="container">
      <!-- Featured artist -->
      <div class="row my-3">
        <div class="col-12">
          <h1 class="fw-bold mb-4" style="color: white">Featured Artist</h1>
        </div>
        <div class="col-12 owl-carousel owl-theme">
          <div class="item">
            <div class="card">
              <img src="./images/explore-man-1.jpg" style="height: 20rem" class="card-img-top" alt="..." />
              <div class="card-body">
                <div class="card-body row text-center">
                  <div class="col-12">
                    <h3>Radit Putra</h3>
                  </div>
                  <div class="col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div>
                    <a href="seller-profile.html?src=./images/explore-man-1.jpg&name=Radit Putra"
                      class="btn btn-primary">Show More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- nft artwork -->
      <div class="row mt-5 pt-5">
        <div class="row">
          <div class="col-4 bg-white px-3 py-4"
            style="position: sticky; top: 150px; height: fit-content; border-radius: 10px;">
            <div class="row align-items-center justify-content">
              <div class="col-12">
                <h1 class="fw-bold text-center">NFT & Artwork</h1>
              </div>
              <div class="col-12 px-3 mt-3">
                <h4>Search</h4>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search here..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa fa-search"
                      aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="col-12 my-3 px-3">
                <h4>Category</h4>
                <select class="form-select" aria-label="Default select example">
                  <option selected disabled>Add Category</option>
                  <option value="">Trending</option>
                  <option value="">Top</option>
                  <option value="">Art</option>
                  <option value="">Domain</option>
                  <option value="">Music</option>
                  <option value="">Photography</option>
                  <option value="">Sports</option>
                  <option value="">Trading Card</option>
                  <option value="">Utility</option>
                  <option value="">Virtual Word</option>
                </select>
              </div>
              <div class="col-12 d-flex align-items-center flex-wrap">
                <span class="btn btn-primary my-1 mx-2" style="min-width:100px">Trending <i class="fa fa-times ms-3"
                    aria-hidden="true"></i></span>
                <span class="btn btn-primary my-1 mx-2" style="min-width:100px">Art <i class="fa fa-times ms-3"
                    aria-hidden="true"></i></span>
                <span class="btn btn-primary my-1 mx-2" style="min-width:100px">Photography <i class="fa fa-times ms-3"
                    aria-hidden="true"></i></span>
              </div>
              <div class="col-12 mt-4 px-3">
                <h4>Price</h4>
              </div>
              <div class="col-6 px-3">
                <h6>Minimal</h6>
                <input type="text" style="border-radius: 10px; height: 45px; border: 1px solid black;">
              </div>
              <div class="col-6 px-3">
                <h6>Maximal</h6>
                <input type="text" style="border-radius: 10px; height: 45px; border: 1px solid black;">
              </div>
              <div class="col-12 mt-3 text-end">
                <button class="btn btn-outline-primary" style="border-radius: 10px;">Filter Price</button>
              </div>
            </div>
          </div>
          <div class="col-8">
            <div class="row">
              <div class="col-4">
                <div class="card explore-card">
                  <img src="./images/featured/yellow-and-brown.jpeg" style="height: 15rem" class="card-img-top"
                    alt="..." />
                  <div class="card-body text-center pb-0">
                    <h4 class="card-title">YELLOW AND BROWN</h4>
                    <p>By: Andrzej Sapkowski</p>
                    <div class="row justify-content align-items-center mt-3">
                      <div class="col-8 mb-4">
                        <a href="transaction.html?src=./images/featured/yellow-and-brown.jpeg&nftName=Yellow and Brown&currentBid=7.50&seller=andrzej_sapkowski"
                          class="btn btn-primary">Place a Bid</a>
                      </div>
                      <div class="col-4 d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-heart btn-fav not-fav" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- EXPLORE SECTION END -->
@endsection
