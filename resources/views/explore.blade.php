@extends('layouts.template')

@section('title')
    Explore
@endsection
{{--TODO add pagination--}}
@section('content')
    <!-- EXPLORE SECTION -->
    <section class="my-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>NFT Artwork</h2>
                <form action="{{request()->url()}}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" value="{{request()->get("search")}}"
                               placeholder="Search NFT">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon1">
                            <i class="bi bi-search"></i>
                        </button>
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
                            <button class="btn-outline-primary btn">
                                Buy
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section>
    <!-- EXPLORE SECTION END -->
@endsection
