{{-- @dd($nft_owned) --}}

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
                    <h1 id="sellerName">{{ $username }}</h1>
                  </div>
                  <div class="pb-3">
                    <span class="fw-bold"><i class="fa fa-calendar me-2" aria-hidden="true"></i>Joined
                      {{ $created_at }}</span>
                  </div>
                </div>
                <div class="col-12">
                  <h5 class="mb-4">@ {{ $username }}</h5>
                  <p>{{ $bio }}</p>
                </div>
              </div>
            </div>
            <div class="col-6 text-center card-featured-nft" style="border-radius: 10px;">
              <img id="sellerPhoto" src="{{ asset($image) }}" style="height: 25rem; box-shadow: 16px 16px #025959;"
                alt="..." class="rounded shadow-sm">
            </div>
          </div>
          {{-- Edit Profile --}}
          <a href="/edit-profile" class="btn btn-primary" style="width:5rem; height:2rem; padding:0.2rem; margin-left:8rem">Edit</a>
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
          </ul>

        </div>
        <div class="col-12 px-5 pt-3 mb-4">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active collection" id="collection" role="tabpanel" aria-labelledby="collection_tab">
                {{-- <div style="height: 50vh;">
                  <h3 class="text-center mt-3">Empty</h3>
                </div> --}}
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-5">
                    @foreach($nft_owned as $post)
                        {{-- <div class="col-4">
                            <div class="card explore-card shadow">
                                <img src="{{ asset($post->image) }}" alt="">
                                <p>{{ $post->name }}</p>
                            </div>
                        </div> --}}
                        <div>
                            <div class="position-relative">
                                <img class="img-fluid nft-image" src="{{asset($post->image)}}" alt="">
                                <span
                                    class="d-block position-absolute category-badge py-1 px-2">{{$post->category->name ?? ''}}</span>
                            </div>
                            <div class="mt-3 d-flex justify-content-between align-items-end">
                                <div>
                                    <h5 class="mb-1">{{$post->name}}</h5>
                                    <h4 class="mb-0 fw-bold">
                                        Rp. {{number_format($post->price, 2, ',', '.')}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              </div>

              <div class="tab-pane fade show created" id="created" role="tabpanel" aria-labelledby="created_tab">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-5">
                    @foreach($nft_created as $item)
                        <div>
                            <div class="position-relative">
                                <img class="img-fluid nft-image" src="{{asset($item->image)}}" alt="">
                                <span
                                    class="d-block position-absolute category-badge py-1 px-2">{{$item->category->name ?? ''}}</span>
                            </div>
                            <div class="mt-3 d-flex justify-content-between align-items-end">
                                <div>
                                    <h5 class="mb-1">{{$item->name}}</h5>
                                    <h4 class="mb-0 fw-bold">
                                        Rp. {{number_format($item->price, 2, ',', '.')}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                  {{-- <div class="col-4">
                    <div class="card explore-card shadow">
                      <img src="./images/nft-explore-5.jpg" style="height: 15rem" class="card-img-top" alt="..." />
                      <div class="card-body text-center pb-0">
                        <h4 class="card-title mb-3">LANGIT</h4>
                      </div>
                    </div>
                  </div> --}}
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
