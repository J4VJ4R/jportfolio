<!-- navbar -->
<div class="nav1 container-fluid">
    <div class="container nav1">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="col-md-5 d-flex justify-content-center">
                <div class="navbar-brand" href="/">
                    <a href="/">
                        < Javier Jaramillo />
                    </a>
                </div>
                <button class="navbar-toggler mx-3 ml-4" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-0 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/alitas')}}">🙋‍♂️ Sobre mi <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/arepas')}}">🏆 Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{url('salchipapas')}}">🎖️ Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{url('/hamburguesas')}}">☕ Hablemos</a>
                    </li>
                    <li class="nav-item">
                        <!--<a class="nav-link disabled" href="#">Bebidas</a>-->
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="¿Que buscas?">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>  -->
            </div>
        </nav>
    </div>
</div>
