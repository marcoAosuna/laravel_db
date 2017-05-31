<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

use App\Http\Requests;
use App\item;
use Storage;


class datosController extends Controller
{
   public function mostrar_datos()
{

  $datos=item::all();
	return view('ejem_dt',compact('datos'));
	}//fin function

public function mostrar_datos_server()
{
  
	 $datos=item::all();
	return view('ejem_dt',compact('datos'));
}//fin function	

}//fin class

