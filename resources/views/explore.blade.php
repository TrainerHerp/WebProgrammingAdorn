@extends('layouts.template')

@section('title')
    Explore
@endsection
@section('content')
    <section class="my-5 pb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Top Seller Artist</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-2  row-cols-lg-4 row-cols-lg-5 g-5 ">
                @foreach($featuredArtists as $key=>$artist)
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="text-black-50 me-3">
                            {{sprintf('%02d',$key + 1)}}
                        </span>
                        <img class="border border-1 rounded-pill" style="width: 3.5rem; aspect-ratio: 1/1"
                             src="{{asset($artist->image)}}"
                             alt="">
                        <div class="ms-3">
                            <a href="" class="fw-bold mb-0 fs-5 d-block text-primary text-decoration-none">
                                {{$artist->username}}
                            </a>
                            <span>
                                Rp. {{number_format($artist->balance, 2, ',', '.')}}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">NFT Artwork</h2>
                <form action="{{request()->url()}}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" value="{{request()->get("search")}}"
                               placeholder="Search NFT">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon1">
                            <i class="bi bi-search"></i>
                        </button>
                        <div class="dropdown ms-2">
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-5 mb-0 bi bi-sort-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item"
                                       href="{{request()->fullUrlWithQuery(['sort'=>'newest'])}}">
                                        Newest
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                       href="{{request()->fullUrlWithQuery(['sort'=>'low_price'])}}">
                                        Lowest Price
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                       href="{{request()->fullUrlWithQuery(['sort'=>'high_price'])}}">
                                        Highest Price
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="dropdown ms-2">
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-5 mb-0 bi bi-filter"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item"
                                       href="{{request()->fullUrlWithoutQuery(['category'])}}">
                                        All
                                        @if(!request()->query('category'))
                                            <i class="bi bi-check text-primary"></i>
                                        @endif
                                    </a>
                                </li>

                                @foreach($categories as $category)
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{request()->fullUrlWithQuery(['category'=>$category->id  ])}}">
                                            {{$category->name}}
                                            @if(request()->get('category') == $category->id)
                                                <i class="bi bi-check text-primary"></i>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row row-cols-1 row-cols-sm-2  row-cols-lg-4 g-5">
                @foreach($nfts as $nft)
                    <div>
                        <div class="position-relative">
                            <img class="img-fluid nft-image" src="{{asset($nft->image)}}" alt="">
                            <span
                                class="d-block position-absolute category-badge py-1 px-2">{{$nft->category->name ?? ''}}</span>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-end">
                            <div>
                                <h5 class="mb-1">{{$nft->name}}</h5>
                                <h4 class="mb-0 fw-bold">
                                    Rp. {{number_format($nft->price, 2, ',', '.')}}
                                </h4>
                            </div>
                            <a href="{{route('nft.show', $nft->id)}}" class="btn-outline-primary btn">
                                Buy
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5 d-flex justify-content-end">
                {{$nfts->withQueryString()->links()}}
            </div>
        </div>
    </section>
@endsection
