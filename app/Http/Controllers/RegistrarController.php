<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perro;
use Cloudinary\Cloudinary;
use Illuminate\Validation\Rule;

class RegistrarController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'microchip' => 'required|string|size:15|unique:perros,microchip',
            'peso' => 'required|numeric|min:1',
            'edad' => 'required|numeric|min:0',
            'raza' => 'required|string|max:255',
            'tipo_comida' => 'required|string',
            'tamanio' => 'required|string',
            'sexo' => 'required|string',
            'esterilizado' => 'required|string',
            'vacunado_al_dia' => 'required|string',
            'sociable_con_perros' => 'required|string',
            'sociable_con_personas' => 'required|string',
            'alergias' => 'nullable|string|max:255',
            'enfermedades' => 'nullable|string|max:255',
            'medicacion' => 'nullable|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:4096',
        ], ['microchip.unique' => 'Este microchip ya está registrado. Por favor, verifica el número.', 'microchip.size' => 'El microchip debe contener 15 dígitos']);

        $validated['user_id'] = auth()->id();

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
            'url' => ['secure' => true],
        ]);

        $uploadedFile = $cloudinary->uploadApi()->upload(
            $request->file('foto')->getRealPath(),
            ['folder' => 'perros']
        );

        $validated['foto'] = $uploadedFile['secure_url'];


        Perro::create($validated);

        return redirect()->route('peludito');
    }
    public function encontrarPerroActualizar($id)
    {
        $perro = Perro::find($id);
        return view('actualizarperro', compact('perro'));
    }
    public function actualizarPerro(Request $request, $id)
    {
        $perro = Perro::find($id);

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'microchip' => [
                'required',
                'string',
                'size:15',
                Rule::unique('perros')->ignore($perro->id),
            ],
            'peso' => 'required|numeric|min:1',
            'edad' => 'required|numeric|min:0',
            'raza' => 'required|string|max:255',
            'tipo_comida' => 'required|string',
            'tamanio' => 'required|string',
            'sexo' => 'required|string',
            'esterilizado' => 'required|string',
            'vacunado_al_dia' => 'required|string',
            'sociable_con_perros' => 'required|string',
            'sociable_con_personas' => 'required|string',
            'alergias' => 'nullable|string|max:255',
            'enfermedades' => 'nullable|string|max:255',
            'medicacion' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
        ], [
            'microchip.unique' => 'Este microchip ya está registrado. Por favor, verifica el número.',
            'microchip.size' => 'El microchip debe contener 15 dígitos',
        ]);


        if ($request->hasFile('foto')) {
            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key' => env('CLOUDINARY_API_KEY'),
                    'api_secret' => env('CLOUDINARY_API_SECRET'),
                ],
                'url' => ['secure' => true],
            ]);

            $uploadedFile = $cloudinary->uploadApi()->upload(
                $request->file('foto')->getRealPath(),
                ['folder' => 'perros']
            );

            $validated['foto'] = $uploadedFile['secure_url'];
        }

        $perro->update($validated);

        return redirect()->route('peludito');
    }

    public function destroy($id)
    {
        $perro = Perro::find($id);
        $perro->delete();

        return redirect()->route('peludito');
    }
}
