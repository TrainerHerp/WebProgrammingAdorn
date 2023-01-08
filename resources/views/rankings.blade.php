@extends('layouts.template')

@section('title')
  Rankings
@endsection

@section('content')
  <!-- Table -->
  <div class="pb-1" style="background-color: white;">
    <h2 class="text-center mb-4">
      Rankings
    </h2>
    <!-- Sort Dropdown -->
    <div class="dropdown" style="margin-bottom: 2rem; margin-left: 15rem;">
      <button class="btn dropdown-toggle text-white" style="width: 10rem;" type="button" data-bs-toggle="dropdown"
        aria-expanded="false" id="sortDropdownButton">
        Sort
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu bg-primary text-white" aria-labelledby="dropdownMenu1">
        <li class="dropdown-item"><a href="#" data-value="Seller" class="text-white"
            style="text-decoration: none; ">Seller</a></li>
        <li class="dropdown-item"><a href="#" data-value="Buyer" class="text-white"
            style="text-decoration: none;">Buyer</a></li>
        <li class="dropdown-item"><a href="#" data-value="Overall" class="text-white"
            style="text-decoration: none;">Overall</a></li>
      </ul>
    </div>
    <!-- Sort Dropdown end -->
    <div style="margin-left: 7rem; margin-right: 7rem;">
      <table class="table table-striped table-hover table-bordered text-center mx-auto">
        <thead>
          <tr>
            <th>
              Rank
            </th>
            <th>
              Profile Picture
            </th>
            <th>
              Username
            </th>
            <th>
              Floor Price
            </th>
          </tr>
        </thead>
        <tbody>
          <!-- 1 -->
          <tr>
            <td class="align-middle">1</td>
            <td>
              <img src="./assets/NFT/1 - NFT Bored Ape Yacht Club-20211214165446.webp" class="rounded-circle"
                style="height: 3rem; width: 3rem" alt="Bored Ape NFT" />
            </td>
            <td class="align-middle">
              <h6>Bored Ape NFT</h6>
            </td>
            <td class="align-middle">
              <h6>103</h6>
            </td>
          </tr>
          <!-- 2 -->
          <tr>
            <td class="align-middle">2</td>
            <td>
              <img src="./assets/NFT/2 - Mutant Ape Yacht.png" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="Mutant Ape Yacht" />
            </td>
            <td class="align-middle">
              <h6>Mutant Ape Yacht</h6>
            </td>
            <td class="align-middle">
              <h6>23.6</h6>
            </td>
          </tr>
          <!-- 3 -->
          <tr>
            <td class="align-middle">3</td>
            <td>
              <img src="./assets/NFT/3 - Kaizoku Mechanics.jpg" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="Kaizoku Mechanics" />
            </td>
            <td class="align-middle">
              <h6>Kaizoku Mechancics</h6>
            </td>
            <td class="align-middle">
              <h6>20.12</h6>
            </td>
          </tr>
          <!-- 4 -->
          <tr>
            <td class="align-middle">4</td>
            <td>
              <img src="./assets/NFT/4 - nft-from-cryptopunk-collection-was-mistakenly-sold-for-less-than-0.01.jpg"
                class="rounded-circle" style="height: 3rem; width: 3rem" alt="CryptoPunk NFT" />
            </td>
            <td class="align-middle">
              <h6>CryptoPunk NFT</h6>
            </td>
            <td class="align-middle">
              <h6>19.94</h6>
            </td>
          </tr>
          <!-- 5 -->
          <tr>
            <td class="align-middle">5</td>
            <td>
              <img src="./assets/NFT/5 - Muri by Haus NFT.webp" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="Muri by Haus" />
            </td>
            <td class="align-middle">
              <h6>Muri by Haus</h6>
            </td>
            <td class="align-middle">
              <h6>0.73</h6>
            </td>
          </tr>
          <!-- 6 -->
          <tr>
            <td class="align-middle">6</td>
            <td>
              <img src="./assets/NFT/6 - Ragnarok Meta NFT.png" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="Ragnarok Meta NFT" />
            </td>
            <td class="align-middle">
              <h6>Ragnarok Meta NFT</h6>
            </td>
            <td class="align-middle">
              <h6>151.23</h6>
            </td>
          </tr>
          <!-- 7 -->
          <tr>
            <td class="align-middle">7</td>
            <td>
              <img src="./assets/NFT/7 - OnChain Monkey NFT.png" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="OnChain Monkey NFT" />
            </td>
            <td class="align-middle">
              <h6>OnChain Monkey NFT</h6>
            </td>
            <td class="align-middle">
              <h6>37.81</h6>
            </td>
          </tr>
          <!-- 8 -->
          <tr>
            <td class="align-middle">8</td>
            <td>
              <img src="./assets/NFT/8 - MoonBird NFT.webp" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="MoonBird NFT" />
            </td>
            <td class="align-middle">
              <h6>MoonBird NFT</h6>
            </td>
            <td class="align-middle">
              <h6>45.61</h6>
            </td>
          </tr>
          <!-- 9 -->
          <tr>
            <td class="align-middle">9</td>
            <td>
              <img src="./assets/NFT/9 - Gutter Cat Gang.png" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="Gutter Cat Gang" />
            </td>
            <td class="align-middle">
              <h6>Gutter Cat Gang</h6>
            </td>
            <td class="align-middle">
              <h6>79.21</h6>
            </td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="align-middle">10</td>
            <td>
              <img src="./assets/NFT/10 - DeadFellaz NFT.webp" class="rounded-circle" style="height: 3rem; width: 3rem"
                alt="DeadFellaz NFT" />
            </td>
            <td class="align-middle">
              <h6>DeadFellaz NFT</h6>
            </td>
            <td class="align-middle">
              <h6>56.41</h6>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <ul class="pagination justify-content-center mb-4" id="tablePagination">
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
  <!-- Table end -->
@endsection
