<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use App\VentasModel;
use App\DireccionesModel;
use App\MaterialesModel;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarVentasRequest;
use App\Http\Requests\ValidarMaterialesRequest;

class CRUDController extends Controller
{
    
    //--------------------------- Ventas  -----------------------------------------------

        public function guardarVentas(Request $request){
            dd($request);
            $usus = VentasModel::create($request->only('monto_total', 'direcciones_id', 'clientes_id'));
            return redirect()->route('registrarVentas');
        }
    
        public function registrarVentas()
        {
            return  view("templates.registrar_ventas");
        }
    
        public function ventas()
        {
            $usus = VentasModel::all();
            $comps = UsuariosModel::all();
            $todos = DireccionesModel::all();
            return  view("templates.ventas")
            ->with(['usus' => $usus])
            ->with(['comps' => $comps])
            ->with(['todos' => $todos]);
        }

        
        public function modificarVentas(VentasModel $id){
            return view("templates.editarVentas")
                ->with(['usu' => $id]);
        }
        public function salvarVentas(VentasModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('monto_total', 'direcciones_id', 'clientes_id'));

                return redirect()->route('ventas');

        }

        public function borrarVenta(VentasModel $id){
            $id->delete();
            return redirect()->route('ventas');
        }

        //--------------------------- materiales -----------------------------------------------
    
        public function Materiales() {
            $usus = MaterialesModel::all();
            return  view("templates.materiales")
            ->with(['usus' => $usus]);
        }

        public function registrarMateriales() {
            return  view("templates.registrar_materiales");
        }
        
        public function guardarMateriales(ValidarMaterialesRequest $request){
    
            $usus = MaterialesModel::create($request->only('nombre', 'tipo_material'));
            return redirect()->route('registrarMateriales');
        }
        
        public function modificarMateriales(MaterialesModel $id){
            return view("templates.editarMateriales")
                ->with(['usu' => $id]);
        }
        public function salvarMateriales(MaterialesModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('nombre', 'tipo_material'));

                return redirect()->route('materiales');
        }

        public function borrarMaterial(MaterialesModel $id){
            $id->delete();
            return redirect()->route('materiales');
        }

        //--------------------------- direcciones -----------------------------------------------
    

        public function Direcciones() {
            $usus = DireccionesModel::all();
            return  view("templates.direcciones")
            ->with(['usus' => $usus]);
        }

        public function registrarDirecciones() {
            return  view("templates.registrar_direcciones");
        }
        
        /*public function guardarDirecciones(ValidarDireccionesRequest $request){
    
            $usus = DireccionesModel::create($request->only('nombre', 'tipo_material'));
            return redirect()->route('registrarDirecciones');
        }
        
        public function modificarDirecciones(DireccionesModel $id){
            return view("templates.editarDirecciones")
                ->with(['usu' => $id]);
        }
        public function salvarDirecciones(DireccionesModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('nombre', 'tipo_material'));

                return redirect()->route('iniciar_sesion');
        }

        public function borrarDireccion(MaterialesModel $id){
            $id->delete();
            return redirect()->route('materiales');
        }*/
}

