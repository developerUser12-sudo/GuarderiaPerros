@extends('layouts.app')
@section('content')

    <div class="container-fluid d-flex gap-5 flex-column justify-content-center align-items-center">
        <div class="card shadow-lg w-50 align-items-center p-4">
            <h5>Registrar a tu peludito</h5>
            <form action="{{ route('registrarperropost') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="microchip">Microchip</label>
                    <input type="text" id="microchip" class="form-control" name="microchip" required>
                    @error('microchip')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" id="peso" class="form-control" name="peso" required>
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" class="form-control" name="edad" required>
                </div>
                <div class="form-group">
                    <label for="raza">Raza</label>
                    <input type="text" id="raza" class="form-control" name="raza" required>
                </div>
                <div class="form-group">
                    <label for="tipo_comida">Tipo de comida</label>
                    <select class="form-control" name="tipo_comida" id="tipo_comida" required>
                        <option value="pienso_normal">Pienso normal</option>
                        <option value="pienso_sensible">Pienso sensible</option>
                        <option value="casera">Casera</option>
                        <option value="mixta">Mixta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tamanio">Tamaño</label>
                    <select class="form-control" name="tamanio" id="tamanio" required>
                        <option value="pequenio">Pequeño</option>
                        <option value="mediano">Mediano</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo" required>
                        <option value="macho">Macho</option>
                        <option value="hembra">Hembra</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input class="form-control" type="file" name="foto" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="esterilizado">Está esterilizado</label>
                    <select class="form-control" name="esterilizado" id="esterilizado" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="vacunado_al_dia">Está vacunado al día</label>
                    <select class="form-control" name="vacunado_al_dia" id="vacunado_al_dia" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sociable_con_perros">Es sociable con otros perros</label>
                    <select class="form-control" name="sociable_con_perros" id="sociable_con_perros" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sociable_con_personas">Es sociable con las personas</label>
                    <select class="form-control" name="sociable_con_personas" id="sociable_con_personas" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alergias">Alergias (si tiene)</label>
                    <input type="text" id="alergias" class="form-control" name="alergias">
                </div>
                <div class="form-group">
                    <label for="enfermedades">Enfermedades (si tiene)</label>
                    <input type="text" id="enfermedades" class="form-control" name="enfermedades">
                </div>
                <div class="form-group">
                    <label for="medicacion">Medicación necesitada (si tiene)</label>
                    <input type="text" id="medicacion" class="form-control" name="medicacion">
                </div>
                <input type="submit" class="btn verde text-light" value="Registrar">
            </form>
        </div>
    </div>
@endsection