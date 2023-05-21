<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use App\Models\Carrera;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiante::all();
        return view("estudiante.index",["estudiantes" => $estudiantes]);
    }


    public function create()
    {
        $carreras  = Carrera::pluck('Nom_Car','id');
        return view('estudiante.new', compact('carreras'));
    }


    public function store(Request $request)
    {
        $estudiantes = new Estudiante();
        $estudiantes-> name = $request->post('name');
        $estudiantes-> last_name = $request->post('last_name');
        $estudiantes-> carrera_id = $request->post('carrera_id');
        $estudiantes-> Num = $request->post('Num');
        $estudiantes-> email = $request->post('email');
        $estudiantes->save();
        return redirect()->route('estudiante.index')->with('success', 'Estudiante registrado exitosamente');
    }


    public function show( $id)
    {
        //
    }


    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        $carreras  = Carrera::pluck('Nom_Car','id');
        return view('estudiante.edit', compact('carreras','estudiante'));

    }

    public function update(Request $request, $id)
    {
        $estudiantes = new Estudiante($id);
        $estudiantes-> id = $request->post('id');
        $estudiantes-> name = $request->post('name');
        $estudiantes-> last_name = $request->post('last_name');
        $estudiantes-> carrera_id = $request->post('carrera_id');
        $estudiantes-> Num = $request->post('Num');
        $estudiantes-> email = $request->post('email');
        $estudiantes->save();
        return redirect()->route('estudiante.index')->with('success', 'Estudiante registrado exitosamente');
    }


    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->route("estudiante.index");
    }
}
