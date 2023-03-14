<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['JS','AS','C']);
            return view('menu');
        
    }

    public function jefe(Request $request)
    {
        $request->user()->authorizeRoles(['JS']);
            return view('menuJS');
        
    }
    
    public function auxiliar(Request $request)
    {
        $request->user()->authorizeRoles(['JS','AS']);
        $tickets = ticket::orderBy('id','desc')->paginate();
            return view('ticketAuxIndex', compact('tickets'));
        
    }

    public function cliente(Request $request)
    {
        $request->user()->authorizeRoles(['JS','AS','C']);
            return view('ticketIndex');
        
    }

}
