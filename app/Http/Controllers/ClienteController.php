<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::orderBy('id','desc')->paginate();
        return view('clienteIndex',compact('clientes'));
    }

    /**zz
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clienteCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
        
            'puesto'=>'required',
            
            'correo'=>'required',
            'contraseña'=>'required|max:9']);
        $cliente = new cliente();
        $cliente->nombre = $request->nombre;
        $cliente->puesto = $request->puesto;
        $cliente->correo = $request->correo;
        $cliente->contraseña = $request->contraseña;
        $cliente->save();
        return redirect()->route('clientes.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cliente)
    {
        $cliente = Cliente::find($cliente);
        return view ('clienteShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clienteEdit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
       
        $cliente->nombre = $request->nombre;
        
        $cliente->puesto = $request->puesto;
       
        $cliente->correo = $request->correo;
        $cliente->contraseña = $request->contraseña;

        $cliente->save();
        return redirect()->route('clientes.show',$cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
