<div class="container mt-5 specialty">
    <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
        <li class="nav-item ">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#arepas" role="tab"
               aria-controls="pills-home" aria-selected="true">🙋‍♂️ Sobre mi </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#trabajos" role="tab"
               aria-controls="pills-profile" aria-selected="false">🏆 Trabajos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#salchipapas" role="tab"
               aria-controls="pills-contact" aria-selected="false">🎖️ Experiencia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#hamburguesas" role="tab"
               aria-controls="pills-contact" aria-selected="false">☕ Hablemos</a>
        </li>
    </ul>
</div>

<div class="tab-content" id="pills-tabContent">
    <!-- cards sobre mi -->
    <div class="container mt-5 tab-pane active" id="arepas" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top card-img-top-sobremi" src="{{asset('images/cards/sobremi/javier.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Javier Jaramillo</h5>
                    <p class="card-text">Full-Stack en crecimiento</p>
                    <p class="card-text">Estudiante de Ingeniería de sistemas en último semestre</p>
                    <p class="card-text">Desarrollador Front-End</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    👨‍🚀 Prohibido rendirse
                </button>
            </div>
            <div class="card">
                <img class="card-img-top card-img-top-sobremi" src="{{asset('images/cards/sobremi/tecnologies.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tecnologías</h5>
                    <p class="card-text">Front-end con bootstrap, JS, html5, CSS.
                        Back-end con PHP
                        Frameworks - Laravel
                        Base de datos MySQL y SQL
                        Despliegue de productos en servidores APACHE, WHM y cPanel .
                        He trabajado con metodología SCRUM en mis proyectos</p>
                    <p class="card-text">Frontend Developer</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    Habla menos, actúa más.
                </button>
            </div>
            <div class="card">
                <img class="card-img-top card-img-top-sobremi" src="{{asset('images/cards/sobremi/softskills.jpg')}}"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Habilidades Blandas test for git</h5>
                    <p class="card-text">Soy muy creativo, resiliente, enfocado en encontrar soluciones a pesar de la
                        adversidad para lograr el éxito en mi vida y profesionalmente.</p>
                    <p class="card-text">Soy amable, asertivo en mi comunicación, busco enfrentar con disciplina cada momento de mi vida
                    , soy honesto, leal, busco la mayor eficiencia en mi tiempo para ser más productivo</p>
                    <p class="card-text">Me gusta ayudar a los demas en todo lo que esté en mis manos y cuando trabajo
                    en equipo procuro cumplir con lo que me asignan a tiempo.</p>
                </div>
                <button class="btn btn-primary font-weight-bold">
                    Primero el Ser
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4 mb-4">
            <button class="btn btn-secondary">
                Más de mi
            </button>
        </div>
    </div>
    <!-- CARDS trabajos -->
    <div class="container mt-5 tab-pane " id="trabajos" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top " src="{{asset('images/cards/trabajos/ilumedical.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://ilumedical.com/" target="_blank">Ilumedical</a></h5>
                    <p class="card-text">Desarrollo web</p>
                    <p class="card-text">Página creada con, Wordpress modificada con Elementor</p>
                    <p class="card-text">El proyecto consistió en tomar el trabajo web que estaba en código viejo y pasarlo a una tecnología más
                    actualizada para poder crear un catálogo virtual que en nuestro caso optamos por hacerlo de forma rápida con el administrador
                    de contenidos Wordpress junto con Elementor que nos permite modificar internamente los componenetes de un sitio web rápidamente.</p>
                </div>
                <button class="btn btn-primary-works  btn-primary font-weight-bold">
                    CSS - HTML5 - MYSQL - CPANEL - ELEMENTOR - PHP <br> FOTOGRAFÍA - PHOTOSHOP LIGHTROOM
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
    <!-- CARDS SALCHIPAPAS -->
    <div class="container mt-5 tab-pane " id="salchipapas" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                <img class="card-img-top" src="{{asset('images/cards/arepas/arepapolloycarne.png')}}"
                     alt="Card image cap">
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
    <!-- CARDS HAMBURGUERs -->
    <div class="container mt-5 tab-pane " id="hamburguesas" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/cards/hamburguesas/hamburguesas1.png')}}"
                     alt="Card image cap">
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
                <img class="card-img-top" src="{{asset('images/cards/hamburguesas/hamburguesas1.png')}}"
                     alt="Card image cap">
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
                <img class="card-img-top" src="{{asset('images/cards/hamburguesas/hamburguesas3.png')}}"
                     alt="Hamburguesa doble">
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
</div>
