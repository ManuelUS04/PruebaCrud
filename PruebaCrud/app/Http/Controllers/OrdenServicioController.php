<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Requests;

class OrdenServicioController extends Controller
{
    public function index(){
        return view('ordenservicio.nuevoorden');
    }
    public function pdf(){
        /* $pdf = PDF::loadView('ordenservicio.ordenserv');
    return $pdf->stream('invoice.pdf'); */
    }
}
