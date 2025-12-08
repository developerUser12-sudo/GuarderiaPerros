@extends('layouts.app')
@section('content')
    <div class="container-fluid px-5 ">
        <div class="row g-0 rounded  bordeVerde ">
            <div class="col-12 col-lg-6 p-4 d-flex  flex-column justify-content-center">
                <h2>Nombre empresa</h2>
                <p>En [Nombre de tu guardería] cuidamos a tu perro como se merece.
                    Contamos con amplias zonas verdes, casetas seguras, control veterinario de documentación y espacios
                    pensados para que tu compañero disfrute durante todo el día.
                    Nuestro objetivo es que cada peludito se sienta como en casa, mientras tú tienes la tranquilidad de
                    saber que está en buenas manos.</p>
            </div>
            <div class="col-12 col-lg-6">
                <img class="rounded img-fluid"
                    src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2FtcG98ZW58MHx8MHx8fDA%3D"
                    alt="">
            </div>
        </div>
    </div>
    <div>
        <h1 class="titulosMorados story-script-regular text-center">Un lugar mágico para los peluditos</h1>
    </div>
    <div id="carouselExample" class="carousel slide container-xxl ">
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2FtcG98ZW58MHx8MHx8fDA%3D"
                    class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2FtcG98ZW58MHx8MHx8fDA%3D"
                    class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2FtcG98ZW58MHx8MHx8fDA%3D"
                    class="d-block w-100 rounded" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="accordion accordion-flush " id="accordionFlushExample">
        <div class="accordion-item ">
            <h2 class="accordion-header ">
                <button class="accordion-button collapsed verde text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    ¿Cuál es el horario de la guardería?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Abrimos de lunes a viernes de 7:00 a 17:00. Los perros se recogen al final del
                    día. No ofrecemos cuidado nocturno por el momento.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed verde text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    ¿En qué consiste la sección "Tu peludito"?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">La sección "Tu peludito" te permite registrar a tu perro en tu cuenta, de manera
                    que al traerlo a la guardería no tendrás que repetir información como su nombre, edad o peso. Solo será
                    necesario verificar su cartilla sanitaria, microchip y vacunaciones, asegurando un ingreso rápido y
                    seguro.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed verde text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    ¿Es obligatorio registrar al perro online?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">No, es opcional. Si lo haces online, ahorrarás tiempo al llegar. De todas
                    formas, será necesario traer los papeles físicos (vacunas, cartilla sanitaria, dietas).</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed verde text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    ¿Qué comida reciben los perros?
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Disponemos de pienso estándar y sensible. Si tu perro necesita dieta especial,
                    por favor traela desde casa, ya que en caso contrario, no se aceptará al perro.</div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5 mb-5">
        <h1 class="titulosMorados story-script-regular">¿Quieres traer a tu peludito?</h1>
        <a href="{{ route('reservar') }}"><button class="btn verde text-light mt-5">Reserva aquí</button></a>

    </div>

@endsection