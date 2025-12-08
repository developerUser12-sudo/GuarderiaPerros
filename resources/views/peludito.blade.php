@extends('layouts.app')
@section('content')
    <div class="container-fluid p-5 d-flex gap-5 flex-column justify-content-center align-items-center">
        <div class="card shadow-lg w-50 align-items-center p-5">
            <h1 class="titulosMorados story-script-regular">Registra a tu peludito</h1>
            <a href="{{ route('registrarperro') }}"><button class="btn verde text-light mt-3">Registrar</button></a>
        </div>
        <div class="card shadow-lg  align-items-center p-5">
            @if ($perrosCount > 0)
                <h3>Tus peluditos:</h3>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    @foreach ($perros as $perro)
                        <div class="rounded bordeVerde mt-2 p-2" style="width:360px">
                            <div class="d-flex flex-row gap-5 mb-5 justify-content-center">
                                <h4>{{ $perro->nombre }}</h4>
                                <img src="{{ $perro->foto }}" alt="" style="width:90px;height:90px">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <th>Peso</th>
                                            <td>{{ $perro->peso }} kg</td>
                                        </tr>

                                        <tr>
                                            <th>Edad</th>
                                            <td>{{ $perro->edad }} años</td>
                                        </tr>

                                        <tr>
                                            <th>Raza</th>
                                            <td>{{ $perro->raza }}</td>
                                        </tr>

                                        <tr>
                                            <th>Microchip</th>
                                            <td>{{ $perro->microchip }}</td>
                                        </tr>

                                        <tr>
                                            <th>Tipo de comida</th>
                                            <td>{{ str_replace('_', ' ', $perro->tipo_comida) }}</td>
                                        </tr>

                                        <tr>
                                            <th>Tamaño</th>
                                            <td>
                                                @if ($perro->tamanio == 'pequenio')
                                                    pequeño
                                                @else
                                                    {{ $perro->tamanio }}
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Sexo</th>
                                            <td>{{ $perro->sexo }}</td>
                                        </tr>

                                        <tr>
                                            <th>Esterilizado</th>
                                            <td>{{ $perro->esterilizado ? 'sí' : 'no' }}</td>
                                        </tr>

                                        <tr>
                                            <th>Vacunado</th>
                                            <td>{{ $perro->vacunado_al_dia ? 'sí' : 'no' }}</td>
                                        </tr>

                                        <tr>
                                            <th>Sociable con perros</th>
                                            <td>{{ $perro->sociable_con_perros ? 'sí' : 'no' }}</td>
                                        </tr>

                                        <tr>
                                            <th>Sociable con personas</th>
                                            <td>{{ $perro->sociable_con_personas ? 'sí' : 'no' }}</td>
                                        </tr>

                                        <tr>
                                            <th>Alergias</th>
                                            <td>{{ $perro->alergias ? $perro->alergias : 'ninguna' }}</td>
                                        </tr>

                                        <tr>
                                            <th>Enfermedades</th>
                                            <td>{{ $perro->enfermedades ? $perro->enfermedades : 'ninguna' }}</td>
                                        </tr>

                                        <tr>
                                            <th>Medicación</th>
                                            <td>{{ $perro->medicacion ? $perro->medicacion : 'ninguna' }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="d-flex flex-row gap-2">
                                    <form action="">
                                    <input type="submit" value="Editar" class="btn verde text-light">
                                </form>
                                <form action="" method="POST">
                                    <input type="submit" value="Eliminar" class="btn verde text-light">

                                </form>
                                </div>
                            </div>




                        </div>
                    @endforeach
                </div>
            @else
                <h4>Tus peluditos aparecerán aqui</h4>
            @endif
        </div>

    </div>

@endsection