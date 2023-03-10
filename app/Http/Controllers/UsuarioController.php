<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\rol;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datos['roles']=rol::paginate(5);
        return view('usuario.create',$datos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosUsuario=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosUsuario['Foto']=$request->file('Foto')->store('usuario_images','public');
        }
        usuario::insert();
        return response()->json($datosUsuario);
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
