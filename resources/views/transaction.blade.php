@extends('layouts.template')

@section('title')
  Transaction
@endsection

@section('content')
  <div class="container pb-5">
    <div class="row">
      <div class="col-5">
        <div class="current-nft rounded-3">
          <img id="transactionNFTImage" src="./images/featured/yellow-and-brown.jpeg" class="card-img-top img-fluid"
            alt="Yellow and Brown" />
        </div>
        <div class="mt-4">
          <h4 class="fw-bold mb-2">Details</h4>
          <div>
            <div class="mb-2 d-flex justify-content-between">
              <span>Contact Address</span>
              <span class="text-primary" style="font-weight: 500">0x209a...e832</span>
            </div>
            <div class="mb-2 d-flex justify-content-between">
              <span>Token ID</span>
              <span class="text-primary" style="font-weight: 500">10921</span>
            </div>
            <div class="mb-2 d-flex justify-content-between">
              <span>Token Standard</span>
              <span style="font-weight: 500">ERC-721</span>
            </div>
            <div class="mb-2 d-flex justify-content-between">
              <span>Blockchain</span>
              <span style="font-weight: 500">Ethereum</span>
            </div>
            <div class="mb-2 d-flex justify-content-between">
              <span>Creator Fees</span>
              <span style="font-weight: 500">5%</span>
            </div>
            <div class="mb-2 d-flex justify-content-between">
              <span>Date</span>
              <span style="font-weight: 500">04/12/2022</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div>
          <div class="profile d-flex align-items-center">
            <img src="./images/profile.jpg" alt="" />
            <h6 class="text-black-50 m-0">
              <a href="#" class="text-tertiary text-decoration-none" id="transactionSeller">@andrzej_sapkowski</a>
            </h6>
          </div>
          <h2 id="transatctionNFTName" style="font-weight: 900">
            YELLOW AND BROWN
          </h2>
          <p class="mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quos
            repellat id voluptatibus blanditiis non ullam sint eum culpa
            fugiat odio eveniet nam, iste recusandae? Minima magnam
            perspiciatis saepe molestiae voluptatibus doloremque ratione fuga
            itaque?
          </p>
          <h6 class="fw-bold">Remaining Time</h6>
          <div class="nft-countdown-timer">
            <div class="d-flex countdown-timer">
              <div class="text-center px-3">
                <h3 id="days" class="mb-1 fw-bold text-dark rounded-2">00</h3>
                <h6 class="fw-light mb-0">Days</h6>
              </div>
              <div class="text-center px-3">
                <h3 id="hours" class="mb-1 fw-bold text-dark rounded-2">
                  00
                </h3>
                <h6 class="fw-light mb-0">Hours</h6>
              </div>
              <div class="text-center px-3">
                <h3 id="minutes" class="mb-1 fw-bold text-dark rounded-2">
                  00
                </h3>
                <h6 class="fw-light mb-0">Mins</h6>
              </div>
              <div class="text-center px-3">
                <h3 id="seconds" class="mb-1 fw-bold text-dark rounded-2">
                  00
                </h3>
                <h6 class="fw-light mb-0">Secs</h6>
              </div>
            </div>
          </div>
          <div class="mt-4">
            <form id="placeBidForm" class="w-75 mb-3" action="">
              <div class="input-group">
                <input id="myBid" type="number" min="0" class="form-control"
                  aria-label="Text input with dropdown button" />
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Metamask
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Metamask</a></li>
                  <li><a class="dropdown-item" href="#">AlphaWallet</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Coinbase</a>
                  </li>
                </ul>
              </div>
              <div id="price" class="text-black-50" style="height: 12px">
                Rp <span>0</span>
              </div>
              <div class="mt-4">
                <button class="btn btn-primary w-75 mb-2">
                  Place your bid
                  <i class="bi bi-arrow-right"></i>
                </button>
                <h6>
                  Current Bid:
                  <span class="text-primary" id="transactionCurrentBid">1.5 ETH</span>
                </h6>
              </div>
            </form>
          </div>
        </div>
        <div class="accordion mt-4" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Price History
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
              <div class="accordion-body">
                <table id="my-chart" style="--color: #03a696"
                  class="charts-css line show-labels show-primary-axis show-3-secondary-axes">
                  <tbody>
                    <tr>
                      <th scope="row">3/01</th>
                      <td style="--start: 0; --size: 0.3">
                        <span class="data"></span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3/02</th>
                      <td style="--start: 0.3; --size: 0.2"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/03</th>
                      <td style="--start: 0.2; --size: 0.275"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/04</th>
                      <td style="--start: 0.275; --size: 0.325"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/05</th>
                      <td style="--start: 0.325; --size: 0.45"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/06</th>
                      <td style="--start: 0.45; --size: 0.4"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/07</th>
                      <td style="--start: 0.4; --size: 0.6"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/08</th>
                      <td style="--start: 0.6; --size: 0.75"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/09</th>
                      <td style="--start: 0.75; --size: 0.675"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/10</th>
                      <td style="--start: 0.675; --size: 0.85"></td>
                    </tr>
                    <tr>
                      <th scope="row">3/11</th>
                      <td style="--start: 0.85; --size: 0.675"></td>
                    </tr>
                    <tr>
                      <th scope="row" class="fw-bold">3/12</th>
                      <td style="--start: 0.675; --size: 0.5">
                        <span class="data text-black fw-bold text-center">1.5 ETH</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Offers
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
              <div class="accordion-body p-2 pb-0">
                <table id="offersTable" class="table">
                  <thead>
                    <tr>
                      <th scope="col">Price</th>
                      <th scope="col">Rupiah</th>
                      <th scope="col">Expiration</th>
                      <th scope="col">From</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="fw-bold">1.5</span> ETH</td>
                      <td>Rp 73,791,547.5</td>
                      <td>1 day</td>
                      <td><a href="#">@lobster_eggbat</a></td>
                    </tr>
                    <tr>
                      <td><span class="fw-bold">1.25</span> ETH</td>
                      <td>Rp 61,492,956.25</td>
                      <td>about 4 hours</td>
                      <td><a href="">@anniehall_toad</a></td>
                    </tr>
                    <tr>
                      <td><span class="fw-bold">1.1</span> ETH</td>
                      <td>Rp 54,113,801.5</td>
                      <td>about 3 days</td>
                      <td><a href="">@tubacow_turkey</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
