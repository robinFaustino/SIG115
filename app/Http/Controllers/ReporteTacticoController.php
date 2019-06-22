<?php

namespace DSIproject\Http\Controllers;

use Illuminate\Http\Request;
use DSIproject\Grado;
use DB;

class ReporteTacticoController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index(Request $request)
    {
       /** if ($request)
        {
            $roles = DB::select('SELECT * FROM roles');
            $query=trim($request->get('searchText'));
            $user=DB::table('users')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('id','ASC')
            ->paginate(7);
            return view('admin.usuarios.index',["user"=>$user,"searchText"=>$query])->with('roles',$roles);
        }**/
        return view('reportesTacticos.index');

    }

    public function reportes(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $grados1 = DB::select('SELECT * FROM grados');
        //dd($grados);

        return view('reportesTacticos.reporte1')->with('grados', $grados)->with('grados1', $grados1);
    }

    public function reportes2(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        //dd("funciona reporte2");

        return view('reportesTacticos.reporte2')->with('grados', $grados);
    }

    public function reportes3(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        //dd("funciona reporte3");

        return view('reportesTacticos.reporte3')->with('grados', $grados);
    }

    public function reportes4(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        //dd("funciona reporte4");

        return view('reportesTacticos.reporte4')->with('grados', $grados);
    }

    public function reportes5(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        //dd("funciona reporte5");

        return view('reportesTacticos.reporte5')->with('grados', $grados);
    }

    public function reportes6(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        //dd("funciona reporte6");

        return view('reportesTacticos.reporte6')->with('grados', $grados);
    }

    public function informe(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        $nombre=$request->get('nombre');
        $seccion=$request->get('seccion');
        //dd($request->all());

        if($fechaI<=$fechaF)
        {
            //dd("funciona");
            $resul=DB::table('asistencias')
                ->join('alumnos','asistencias.alumno_id','=','alumnos.id')
                ->join('grados','asistencias.grado_id','=','grados.id')
                ->where('grados.nombre','=',$nombre)
                ->where('grados.seccion','=',$seccion)
                ->where('asistencias.asistencia','=',1)
                ->where('asistencias.fecha','>=',$fechaI)
                ->where('asistencias.fecha','<=',$fechaF)
                ->select('alumnos.nombre as nombreAlum','alumnos.apellido','grados.nombre','alumnos.genero','asistencias.fecha')
                ->orderBy('alumnos.genero')
                ->get();

            //dd($resul);
            if(count($resul)!=0) {

                return view('informeTactico.informe1')
                        ->with('resul', $resul)
                        ->with('fechaI', $fechaI)
                        ->with('fechaF', $fechaF);

            }else{
                //dd("si se encuentra elementos");
                dd("No se encuentra elementos");
            // no está vacío
            }

        }
        else{
            dd('error');
        }

    }
}
