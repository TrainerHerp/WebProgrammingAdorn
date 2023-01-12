@extends('layouts.template')

@section('title')
    Add Item
@endsection

@section('content')
    @if(session()->has('unauthorized_msg'))
        {{ session()->get('unauthorized_msg') }}
    @endif
        <div class="col-md-5 form-animation">
            <h2 class="mb-4">Add Item</h2>
            @if ($errors->any())
                <div class="text-center"><strong class="text-danger">{{ $errors->first() }}</strong></div>
            @endif
            {{-- <form id="register-form" autocomplete="off" onsubmit="event.preventDefault(); validation()"> --}}
            <form action="/nft" method="POST" class="mt-3" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                  </div>
                <div class="mb-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                </div>
                <div class="mb-3 w-100">
                    <label for="category">Category</label>
                    <select name="category" class="form-select mt-2" aria-label="Default select example">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary text-white">
                    Add Item
                </button>
            </form>
        </div>
    <!-- Register End -->
@endsection
