<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\depa;
use App\Models\Cliente;

class TicketJsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = ticket::orderBy('id','desc')->paginate();
        return view('ticketJsIndex',compact('tickets'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket)
    {
        $ticket = ticket::find($ticket);
        return view ('ticketJsShow', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( ticket $ticket)
    {
        $clientes = Cliente::all();
        $depa = depa::all();
        return view('ticketJsEdit',compact('ticket','depa','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        $ticket->estatus = $request->estatus;
        $ticket->comentariosToAuxiliar = $request->comentarios;
        $ticket->autor = $request->autor;
        $ticket->departamento = $request->departamento;
        $ticket->clasificacion = $request->clasificacion;
        $ticket->detalles = $request->detalles;
        $ticket->auxiliar = $request->auxiliar;
        $ticket->comentariosToCliente = $request->comentariosCliente;
        $ticket->save();
        return redirect()->route('ticketsJs.show',$ticket);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('ticketsJs.index');
    }

    public function comentarios( ticket $ticket)
    {
        return view('ticketJsComentarios',compact('ticket'));
    }

    
}
