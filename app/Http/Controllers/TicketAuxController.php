<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\depa;
use App\Models\Cliente;

class TicketAuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = ticket::orderBy('id','desc')->paginate();
        return view('ticketAuxIndex',compact('tickets'));
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
        return view ('ticketAuxShow', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( ticket $ticket)
    {
        return view('ticketAuxEdit',compact('ticket'));
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
        $ticket->comentariosToCliente = $request->comentarios;
    

        $ticket->save();
        return redirect()->route('ticketsAux.show',$ticket);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('ticketsAux.index');
    }

    public function reporte($ticket)
    {
        $ticket = ticket::find($ticket);
        return view('ticketAuxReporte',compact('ticket'));
    }
}
