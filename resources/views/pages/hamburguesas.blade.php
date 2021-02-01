@extends('welcome')
@include('partials.nav')
@section('section')
<!-- CARDS HAMBURGUERs -->
<div class="container mt-5 tab-pane " id="hamburguesas" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="{{asset('images/cards/hamburguesas/hamburguesas1.png')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">HAMBURGUESA SENCILLA</h5>
                <p class="card-text">Carne de la casa</p>
                <p class="card-text">Pan bimbo</p>
                <p class="card-text">Queso</p>
                <p class="card-text">Jamón</p>
                <p class="card-text">Salsas al gusto</p>
                <p class="card-text">Lechuga</p>
                <p class="card-text">Tomate</p>
                <p class="card-text">Cebolla</p>
                <p class="card-text">Ripio</p>
            </div>
            <button class="btn btn-primary font-weight-bold">
                $8.500
            </button>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('images/cards/hamburguesas/hamburguesas1.png')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">HAMBURGUESA ESPECIAL</h5>
                <p class="card-text">Carne de la casa</p>
                <p class="card-text">Pan bimbo</p>
                <p class="card-text">Queso</p>
                <p class="card-text">Jamón</p>
                <p class="card-text">Salsas al gusto</p>
                <p class="card-text">Lechuga</p>
                <p class="card-text">Tomate</p>
                <p class="card-text">Cebolla</p>
                <p class="card-text">Ripio</p>
                <p class="card-text">Pollo desmechado o huevo al gusto</p>
            </div>
            <button class="btn btn-primary font-weight-bold">
                $10.000
            </button>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('images/cards/hamburguesas/hamburguesas3.png')}}" alt="Hamburguesa doble">
            <div class="card-body">
                <h5 class="card-title">HAMBURGUESA DOBLE</h5>
                <p class="card-text">Doble carne de la casa</p>
                <p class="card-text">Pan bimbo</p>
                <p class="card-text">Doble queso</p>
                <p class="card-text">Doble Jamón</p>
                <p class="card-text">Salsas al gusto</p>
                <p class="card-text">Lechuga</p>
                <p class="card-text">Tomate</p>
                <p class="card-text">Cebolla</p>
                <p class="card-text">Ripio</p>
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

