<?php

namespace App\Http\Controllers;

use App\Expedientes;
use Illuminate\Http\Request;

class ExpedientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['expedientes']= Expedientes::paginate(5);
        return view('expedientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expedientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $fechahoy=date("Y-m-d");
        //Obtenemos los datos de la tabla expedientes donde la fecha coincida 
        //del dia de hoy.
        $filas = \DB::table('expedientes')->whereFecha($fechahoy)->count();
        $cantidad = 0;
        //Para ver si es que existe la variable filas.
        if (isset($filas)) $cantidad = $filas+1;
        else $cantidad = 1;
        //Obtenemos los valores del formulario excepto el token que es para la seguridad de ataques xss
        $datosExpediente = request()->except('_token');
        //El numero de registro es la fecha de hoy y la cantidad de expedientes que haya
        //Si no hay entonces la cantidad es 1, eso se muestra en la validación de $filas
       $datosExpediente['numRegistro'] = $fechahoy."-".strval($cantidad);
       $datosExpediente['fecha'] = $fechahoy;
       $datosExpediente['atencion'] = "Pendiente";
       //Insertamos los datos en la tabla expediente por la siguiente sentencia
       \DB::insert('insert into expedientes(tipoExpediente,
                                descripcion,
                                observaciones,
                                tipoDocumento,
                                numRegistro,
                                fecha,
                                atencion ) 
                    values (?, ?, ?, ?, ?, ?, ?)', 
                    [$datosExpediente['tipoExpediente'],
                    $datosExpediente['descripcion'],
                    $datosExpediente['observaciones'],
                    $datosExpediente['tipoDocumento'],
                    $datosExpediente['numRegistro'],
                    $datosExpediente['fecha'],
                    $datosExpediente['atencion']]);
        //redireccionamos a la página /expedientes;
       return redirect('expedientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expedientes  $expedientes
     * @return \Illuminate\Http\Response
     */
    public function show(Expedientes $expedientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expedientes  $expedientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $expediente = Expedientes::findOrFail($id);
        return view('expedientes.edit', compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expedientes  $expedientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosExpediente=request()->except(['_token','_method']);
        $datosExpediente['atencion'] = "Aceptado";
        Expedientes::where('id','=',$id)->update($datosExpediente);
        $expediente = Expedientes::findOrFail($id);
        return redirect('expedientes');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expedientes  $expedientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expedientes::destroy($id);
        return redirect('expedientes');
    }
}
