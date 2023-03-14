<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\depa;
use App\Models\Cliente;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = ticket::orderBy('id','desc')->paginate();
        return view('ticketIndex',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $depa = depa::all();
        return view('ticketCreate', compact('depa','clientes'));
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
            'autor'=>'required',
            'departamento'=>'required',
            'clasificacion'=>'required',
            'detalles'=>'required']);
        $ticket = new ticket();
        $ticket->autor = $request->autor;
        $ticket->departamento = $request->departamento;
        $ticket->clasificacion = $request->clasificacion;
        $ticket->detalles = $request->detalles;
        $ticket->estatus = 'En Proceso';
        $ticket->auxiliar= 'Pendiente';
        $ticket->comentariosToCliente = '';
        $ticket->comentariosTOauxiliar= '';
        $ticket->save();
        return redirect()->route('tickets.index');
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
        return view ('ticketShow', compact('ticket'));
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
        return view('ticketEdit',compact('ticket', 'depa','clientes'));
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
        $ticket->autor = $request->autor;
        $ticket->departamento = $request->departamento;
        $ticket->clasificacion = $request->clasificacion;
        $ticket->detalles = $request->detalles;
    

        $ticket->save();
        return redirect()->route('tickets.show',$ticket);
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
        return redirect()->route('tickets.index');
    }

    public function cancelar(ticket $ticket)
    {
        $ticket->estatus = 'Cancelador por Cliente';
        $ticket->save();
        return redirect()->route('tickets.show',$ticket);
    }
}
