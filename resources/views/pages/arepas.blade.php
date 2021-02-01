@extends('welcome')
@include('partials.nav')
@section('section')
    <!-- cards arepas -->
    <div class="container mt-5 tab-pane active" id="arepas" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/arepas/arepapollo.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">AREPA DE POLLO</h5>
                    <p class="card-text">Salsa de la casa</p>
                    <p class="card-text">Pollo desmechado</p>
                    <p class="card-text">Queso</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    $4.300
                </button>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/arepas/arepacarne.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">AREPA DE CARNE</h5>
                    <p class="card-text">Salsa de la casa</p>
                    <p class="card-text">Carne desmechada</p>
                    <p class="card-text">Queso</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    $4.300
                </button>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/arepas/arepapolloycarne.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">AREPA DE POLLO Y CARNE</h5>
                    <p class="card-text">Salsa de la casa</p>
                    <p class="card-text">Carne desmechada</p>
                    <p class="card-text">Pollo desmechado</p>
                    <p class="card-text">Queso</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    $4.500
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
