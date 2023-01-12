@extends('layouts.template')

@section('title')
    Rankings
@endsection

@section('content')
    <!-- Top Seller -->
    <section class="text-white container-fluid py-5" style="background-color: #051821">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center justify-content-center mx-auto" style="margin-bottom: 2rem">
                    <h3 class="fw-bold mb-0">Top Seller</h3>
                </div>
                <table class="table table-striped table-dark table-hover table-bordered text-center"
                       style="border: white">
                    <tbody>
                    {{-- New --}}
                    <tr>
                        <th>Rank</th>
                        <th>Profile</th>
                        <th>Username</th>
                        <th>Worth</th>
                    </tr>
                    @foreach ($user as $key=>$use)
                        <tr>
                            <th scope='row'>{{ $key+1 }}</th>
                            <td>
                                <a href="{{route('user.show', $use->id)}}">
                                    <img src="{{ '/' . $use['image'] }}" class="rounded-circle"
                                         style="height: 3rem; width: 3rem"
                                         alt="User Image"/>
                                </a>
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
