<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Http\Requests\VehiculoRequest;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    public function index () {

      $vehiculos = Vehiculo::orderBy("id","ASC")->paginate();
    	return view('vehiculos.index',compact('vehiculos'));
    }
   
    public function show ($id) { 

    	$vehiculos = Vehiculo::find($id);
        return view('vehiculos.show',compact('vehiculos'));
    }

 


    public function create () {


        return view('vehiculos.create');
    }

     public function store (VehiculoRequest $request) {
          
          $vehiculos = new Vehiculo;

       /* if ($request->file('file')){

          $path = Storage::disk('public')->put('image',$request->file('file'));
          $vehiculos->fill(['file' => asset($path)])->save(); 
        }*/

           $vehiculos->apodo = $request->apodo;
           $vehiculos->modelo = $request->modelo;
           $vehiculos->año = $request->año;

           $vehiculos->save();
        

       return redirect()->route('vehiculos.index')
                        ->with('info','el vehiculo ha sido guardado exitosamente');

     }
 
  public function edit ( $id ) { 

        $vehiculos = Vehiculo::find($id);
        return view('vehiculos.edit',compact('vehiculos'));
    }  

    public function update (VehiculoRequest $request, $id) {
 
      /* if ($request->file('file')){

          $path = Storage::disk('public')->put('image',$request->file('file'));
          $vehiculos->fill(['file' => asset($path)])->save(); 
        }*/


           $vehiculos = Vehiculo::find($id);
           $vehiculos->apodo = $request->apodo;
           $vehiculos->modelo = $request->modelo;
           $vehiculos->año = $request->año;

           $vehiculos->save();


       return redirect()->route('vehiculos.index')
                        ->with('info','el vehiculo ha sido actualzizado exitosamente');

     }

    public function destroy ($id) { 

        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return back()->with('info','el vehiculo ha sido eliminado exitosamente');

}








}