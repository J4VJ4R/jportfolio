<!-- CAROUSEL -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-fluid"  src="{{asset('images/alitas1.jpg')}}" alt="alitas bbq">
            <div class="carousel-caption d-none d-md-block">
                <h3 class="display-1">ALITAS BBQ</h3>
                <p class="lead">DESDE $8.000</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{asset('images/arepas1.jpg')}}" alt="arepas">
            <div class="carousel-caption d-none d-md-block">
                <h3>DELICIOSAS AREPAS</h3>
                <p>DESDE $3.000</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{asset('images/hamburguesa.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>DELICIOSAS HAMBURGUESAS</h3>
                <p>DESDE $?.000</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{asset('images/salchi.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>QUEDATE EN CASA</h3>
                <p>COMIENDO SALCHIPAPA</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
