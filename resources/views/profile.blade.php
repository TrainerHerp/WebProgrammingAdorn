@extends('layouts.template')

@section('title')
  Profile
@endsection

@section('content')
  <!-- SELLER PROFILE SECTION -->
  <div class="pb-4 pt-2 mb-3">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 mb-3" style="height: 60vh;">
          <div class="row align-items-center justify-content-center" style="height: 100%;">
            <div class="col-6">
              <div class="row align-items-center justify-content-center py-3" style="width:100%;">
                <div class="col-12 d-flex align-items-center justify-content-between">
                  <div class="my-2">
                    <h1 id="sellerName">Radit Putra</h1>
                  </div>
                  <div class="pb-3">
                    <span class="fw-bold"><i class="fa fa-calendar me-2" aria-hidden="true"></i>Joined February
                      2022</span>
                  </div>
                </div>
                <div class="col-12">
                  <h5 class="mb-4">~Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. </p>
                </div>
                <div class="col-12">
                  <button class="btn btn-outline-primary">Follow me for more content!</button>
                </div>
              </div>
            </div>
            <div class="col-6 text-center card-featured-nft" style="border-radius: 10px;">
              <img id="sellerPhoto" src="./images/explore-man-1.jpg" style="height: 25rem; box-shadow: 16px 16px #025959;"
                alt="..." class="rounded shadow-sm">
            </div>
          </div>
        </div>
        <div class="col-12 mt-5 px-5">
          <h1 class="text-center mb-4 fw-bold">Activities</h1>
          <ul class="nav nav-pills nav-fill d-flex flex-wrap justify-content-between mt-2" id="myTab" role="tablist"
            style="left: 0px; margin:0px; width: 100%;">
            <li class="nav-item mb-3" role="presentation">
              <a class="nav-link btn-lg btn-nav-pill px-4 active" id="collection_tab" data-bs-toggle="tab"
                data-bs-target="#collection" type="button" role="tab" aria-controls="collection"
                aria-selected="true">
                <span style="font-size: 1.1rem; color: black;">Collection</span>
              </a>
            </li>
            <li class="nav-item mb-3" role="presentation">
              <a class="nav-link btn-lg btn-nav-pill px-4" id="created_tab" data-bs-toggle="tab" data-bs-target="#created"
                type="button" role="tab" aria-controls="created" aria-selected="true">
                <span style="font-size: 1.1rem; color: black;">Created</span>
              </a>
            </li>
            <li class="nav-item mb-3" role="presentation">
              <a class="nav-link btn-lg btn-nav-pill px-4" id="favorited_tab" data-bs-toggle="tab"
                data-bs-target="#favorited" type="button" role="tab" aria-controls="favorited" aria-selected="false">
                <span style="font-size: 1.1rem; color: black;">Favorited</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-12 px-5 pt-3 mb-4">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active collection" id="collection" role="tabpanel"
                aria-labelledby="collection_tab">
                <div style="height: 50vh;">
                  <h3 class="text-center mt-3">Empty</h3>
                </div>
              </div>

              <div class="tab-pane fade show created" id="created" role="tabpanel" aria-labelledby="created_tab">
                <div class="row align-items-center justify-content-start">
                  <div class="col-4">
                    <div class="card explore-card shadow">
                      <img src="./images/nft-explore-4.jpg" style="height: 15rem" class="card-img-top" alt="..." />
                      <div class="card-body text-center pb-0">
                        <h4 class="card-title mb-3">CAKRAWALA</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card explore-card shadow">
                      <img src="./images/nft-explore-5.jpg" style="height: 15rem" class="card-img-top" alt="..." />
                      <div class="card-body text-center pb-0">
                        <h4 class="card-title mb-3">LANGIT</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade show favorited" id="favorited" role="tabpanel" aria-labelledby="favorited_tab">
                <div class="d-flex align-items-center justify-content-start">
                  <div class="card explore-card shadow">
                    <img src="./images/nft-explore-2.jpg" style="height: 15rem" class="card-img-top" alt="..." />
                    <div class="card-body text-center pb-0">
                      <h4 class="card-title">HOTEL SIGN IN THE NIGHT</h4>
                      <p>By: Adiarja Pradipta</p>
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
  <!-- SELLER PROFILE SECTION END -->
@endsection
