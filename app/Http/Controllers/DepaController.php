<?php

namespace App\Http\Controllers;
use App\Models\depa;
use Illuminate\Http\Request;

class DepaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depas = depa::orderBy('id','desc')->paginate();
        return view('depaIndex',compact('depas'));
    }

    /**zz
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depaCreate');
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
            'nombre'=>'required'
        ]);
            $depa = new depa();
        $depa->nombre = $request->nombre;
        
        
        $depa->save();
        return redirect()->route('depas.index');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($depa)
    {
        $depa = Depa::find($depa);
        return view ('depaShow', compact('depa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Depa $depa)
    {
        return view('depaEdit',compact('depa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depa $depa)
    {
       
        $depa->nombre = $request->nombre;
        
       

        $depa->save();
        return redirect()->route('depas.show',$depa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depa $depa)
    {
        $depa->delete();
        return redirect()->route('depas.index');
    }
}