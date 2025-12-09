@extends('layouts.app')
@section('content')

    <div class="container-fluid d-flex gap-5 flex-column justify-content-center align-items-center">
        <div class="card shadow-lg w-50 align-items-center p-4">
            <h5>Editar peludito</h5>

            <form action="{{ route('actualizarperro', $perro->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" value="{{ $perro->nombre }}" required>
                </div>

                <div class="form-group">
                    <label for="microchip">Microchip</label>
                    <input type="text" id="microchip" class="form-control" name="microchip" value="{{ $perro->microchip }}"
                        required>

                    @error('microchip')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" id="peso" class="form-control" name="peso" value="{{ $perro->peso }}" required>
                </div>

                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" class="form-control" name="edad" value="{{ $perro->edad }}" required>
                </div>

                <div class="form-group">
                    <label for="raza">Raza</label>
                    <input type="text" id="raza" class="form-control" name="raza" value="{{ $perro->raza }}" required>
                </div>

                <div class="form-group">
                    <label for="tipo_comida">Tipo de comida</label>
                    <select class="form-control" name="tipo_comida" id="tipo_comida" required>
                        <option value="pienso_normal" {{ $perro->tipo_comida == 'pienso_normal' ? 'selected' : '' }}>Pienso
                            normal</option>
                        <option value="pienso_sensible" {{ $perro->tipo_comida == 'pienso_sensible' ? 'selected' : '' }}>
                            Pienso sensible</option>
                        <option value="casera" {{ $perro->tipo_comida == 'casera' ? 'selected' : '' }}>Casera</option>
                        <option value="mixta" {{ $perro->tipo_comida == 'mixta' ? 'selected' : '' }}>Mixta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tamanio">Tamaño</label>
                    <select class="form-control" name="tamanio" id="tamanio" required>
                        <option value="pequenio" {{ $perro->tamanio == 'pequenio' ? 'selected' : '' }}>Pequeño</option>
                        <option value="mediano" {{ $perro->tamanio == 'mediano' ? 'selected' : '' }}>Mediano</option>
                        <option value="grande" {{ $perro->tamanio == 'grande' ? 'selected' : '' }}>Grande</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo" required>
                        <option value="macho" {{ $perro->sexo == 'macho' ? 'selected' : '' }}>Macho</option>
                        <option value="hembra" {{ $perro->sexo == 'hembra' ? 'selected' : '' }}>Hembra</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="foto">Foto (súbela si quieres cambiarla)</label>
                    <input class="form-control" type="file" name="foto" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="esterilizado">Esterilizado</label>
                    <select class="form-control" name="esterilizado" id="esterilizado" required>
                        <option value="1" {{ $perro->esterilizado == 1 ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ $perro->esterilizado == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vacunado_al_dia">Vacunado al día</label>
                    <select class="form-control" name="vacunado_al_dia" id="vacunado_al_dia" required>
                        <option value="1" {{ $perro->vacunado_al_dia == 1 ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ $perro->vacunado_al_dia == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sociable_con_perros">Sociable con perros</label>
                    <select class="form-control" name="sociable_con_perros" id="sociable_con_perros" required>
                        <option value="1" {{ $perro->sociable_con_perros == 1 ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ $perro->sociable_con_perros == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sociable_con_personas">Sociable con personas</label>
                    <select class="form-control" name="sociable_con_personas" id="sociable_con_personas" required>
                        <option value="1" {{ $perro->sociable_con_personas == 1 ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ $perro->sociable_con_personas == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alergias">Alergias</label>
                    <input type="text" id="alergias" class="form-control" name="alergias" value="{{ $perro->alergias }}">
                </div>

                <div class="form-group">
                    <label for="enfermedades">Enfermedades</label>
                    <input type="text" id="enfermedades" class="form-control" name="enfermedades"
                        value="{{ $perro->enfermedades }}">
                </div>

                <div class="form-group">
                    <label for="medicacion">Medicación</label>
                    <input type="text" id="medicacion" class="form-control" name="medicacion"
                        value="{{ $perro->medicacion }}">
                </div>

                <input type="submit" class="btn verde text-light" value="Guardar cambios">
            </form>
        </div>
    </div>

@endsection