<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDirectorioRequest;
use App\Http\Requests\UpdateDirectorioRequest;
use Illuminate\Http\Request;
use App\Models\Directorio;
use Directory;

class DirectorioController extends Controller
{
    public function index(Request $request)
    {
        if($request->has ('txtBuscar')){
            $directorios = Directorio::where('nombre','LIKE','%'.$request->txtBuscar.'%')
            ->orWhere('telefono',$request->txtBuscar)
            ->get();
        }else{
            $directorios =Directorio::all();
        }
        return $directorios;
    }

    private function cargarArchivo($file){
        $nombreArchivo=time() . "_" . $file->getClientOriginalExtension();
        $file->move(public_path('fotografias'),$nombreArchivo);
        return $nombreArchivo;
    }

    public function store(CreateDirectorioRequest $request)
    {
        if($request->has('foto'))
            $input['foto'] = $this->cargarArchivo($request->foto);
        $input = $request ->all();
        Directorio::create($input);
        return response()->json([
            'res' => true,
            'message'=>'Registro creado correctamente'
        ],200);
    }

    public function show(Directorio $directorio)
    {
        return $directorio;
    }

    public function update(UpdateDirectorioRequest $request,Directorio $directorio)
    {
        $input = $request->all();
        if($request->has('foto'))
            $input['foto'] = $this->cargarArchivo($request->foto);
        $directorio->update($input);
        return response()->json([
            'res' => true,
            'message'=>'Registro actualizado correctamente'
        ],200);
    }

    public function destroy($id)
    {
        Directorio::destroy($id);
        return response()->json([
            'res' => true,
            'message'=>'Registro eliminado correctamente'
        ],200);
    }
}
