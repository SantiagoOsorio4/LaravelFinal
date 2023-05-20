<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
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
        return view("estudiante.new");
    }


    public function store(Request $request)
    {
        $estudiantes = new Estudiante();
        $estudiantes-> id = $request->post('id');
        $estudiantes-> name = $request->post('name');
        $estudiantes-> last_name = $request->post('last_name');
        $estudiantes-> carrera_id = $request->post('carrera_id');
        $estudiantes-> Num = $request->post('Num');
        $estudiantes-> email = $request->post('email');
        $estudiantes->save();

        return redirect()->route("estudiante.index");
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
