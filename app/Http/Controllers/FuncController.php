<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo csrf_token();
        $funcionarios = Funcionario::all();
        return $funcionarios;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Funcionario $funcionario)
    {
        //
        $funcionario::create($request->all());
        return "success";
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        //
        $funcionario-> fill($request->all());
        $funcionario->save();
        return "success";
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        Funcionario::destroy($id);
        return "success";
    }
}
