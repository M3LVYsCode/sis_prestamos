<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(materia $materia): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(materia $materia): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, materia $materia): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materia $materia): RedirectResponse
    {
        //
    }
}
