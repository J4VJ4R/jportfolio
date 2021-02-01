@extends('welcome')
@include('partials.nav')
@section('section')
    <!-- CARDS ALITAS -->
    <div class="container mt-5 tab-pane " id="alitas" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/alitas/alitasbbq.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">6 Piezas</h5>
                    <p class="card-text">Papa a la francesa</p>
                    <p class="card-text">Salsa BBQ</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    $8.000
                </button>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/alitas/alitasbbq2.webp')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">9 Piezas</h5>
                    <p class="card-text">Papa a la francesa</p>
                    <p class="card-text">Salsa BBQ</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    $11.000
                </button>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/alitas/alitasbbq3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">12 Piezas</h5>
                    <p class="card-text">Papa a la francesa</p>
                    <p class="card-text">Salsa BBB</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    $15.000
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4 mb-4">
            <button class="btn btn-secondary">
                Más productos
            </button>
        </div>
    </div>
    @include('partials.footer')
