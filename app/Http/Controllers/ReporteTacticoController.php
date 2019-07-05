<?php

namespace DSIproject\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DSIproject\Grado;
use DB;
use Carbon\Carbon;

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
        $alum = DB::select('SELECT * FROM alumnos');
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

    public function informe2(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        $nombre=$request->get('nombre');
        $seccion=$request->get('seccion');

        //dd("funciona");

        if($fechaI<=$fechaF)
        {
            //dd("funciona");

            $resul=DB::table('asistencias')
                ->join('alumnos','asistencias.alumno_id','=','alumnos.id')
                ->join('grados','asistencias.grado_id','=','grados.id')
                ->where('grados.nombre','=',$nombre)
                ->where('grados.seccion','=',$seccion)
                ->where('asistencias.asistencia','=',0)
                ->where('asistencias.fecha','>=',$fechaI)
                ->where('asistencias.fecha','<=',$fechaF)
                ->select('alumnos.nombre as nombreAlum','alumnos.apellido','grados.nombre','alumnos.genero','asistencias.fecha')
                ->orderBy('alumnos.genero')
                ->get();

            //dd($resul);
            if(count($resul)!=0) {

                return view('informeTactico.informe2')
                        ->with('resul', $resul)
                        ->with('fechaI', $fechaI)
                        ->with('fechaF', $fechaF)
                        ->with('nombre', $nombre)
                        ->with('seccion', $seccion);

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


    public function informe3(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        $genero=$request->get('genero');
        $noveno=0;
        $segundo=0;
        //dd($genero);

        //dd($request->all());

        if($fechaI<=$fechaF)
        {
            //dd("funciona");
            $resul=DB::table('alumno_grado')
                ->join('alumnos','alumno_grado.alumno_id','=','alumnos.id')
                ->join('grados','alumno_grado.grado_id','=','grados.id')
                ->where('alumnos.genero','=',$genero)
                ->where('alumno_grado.estado','=','reprobado')
                ->where('alumno_grado.created_at','>=',$fechaI)
                ->where('alumno_grado.created_at','<=',$fechaF)
                ->select('alumnos.nombre as nombreAlum','alumnos.apellido','grados.nombre','alumnos.genero','grados.id','alumno_grado.estado')
                ->get();
            //$resul

            if(count($resul)!=0) {
                foreach ($resul as $resul) {
                    if($resul->id==1)
                    {
                        $segundo=$segundo+1;  
                    }elseif ($resul->id==3) {
                        $noveno=$noveno+1;
                    }   
                }
                //dd($segundo);
                return view('informeTactico.informe3')
                        ->with('segundo', $segundo)
                        ->with('fechaI', $fechaI)
                        ->with('fechaF', $fechaF)
                        ->with('noveno', $noveno)
                        ->with('genero', $genero);

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

    public function informe4(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        //$genero=$request->get('genero');
        $noveno=0; $segundo=0; $sexto=0; $quinto=0; $primero=0; $quarto=0; $tercero=0; $septimo=0; $octavo=0;
        //dd($segundo);

        if($fechaI<=$fechaF)
        {
            //dd("funciona");
            $resul=DB::table('grado_laboratorio')
                ->join('laboratorios','grado_laboratorio.laboratorio_id','=','laboratorios.id')
                ->join('grados','grado_laboratorio.grado_id','=','grados.id')
                ->where('grado_laboratorio.fecha','>=',$fechaI)
                ->where('grado_laboratorio.fecha','<=',$fechaF)
                ->select('laboratorios.nombre as nombreLab','grados.nombre','grados.id','grado_laboratorio.utiliza','grados.seccion')
                ->orderBy('grados.id')
                ->get();
            //dd($resul);
            if(count($resul)!=0) {

                foreach ($resul as $resul) {
                    $nomLap=$resul->nombreLab;
                    if($resul->id==1)
                    {
                        $segundo=$segundo+1;  
                    }elseif ($resul->id==3) {
                        $noveno=$noveno+1;
                    }elseif ($resul->id==4) {
                        $sexto=$sexto+1;
                    }elseif ($resul->id==5) {
                        $quinto=$quinto+1;
                    }elseif ($resul->id==6) {
                        $primero=$primero+1;
                    }elseif ($resul->id==7) {
                        $quarto=$quarto+1;
                    }elseif ($resul->id==8) {
                        $tercero=$tercero+1;
                    }elseif ($resul->id==9) {
                        $septimo=$septimo+1;
                    }elseif ($resul->id==10) {
                        $octavo=$octavo+1;
                    }   
                }

                //dd($nomLap);
                return view('informeTactico.informe4')
                        ->with('fechaI', $fechaI)
                        ->with('fechaF', $fechaF)
                        ->with('primero',$primero)
                        ->with('segundo', $segundo)
                        ->with('tercero', $tercero)
                        ->with('quarto', $quarto)
                        ->with('quinto', $quinto)
                        ->with('sexto', $sexto)
                        ->with('septimo', $septimo)
                        ->with('octavo', $octavo)
                        ->with('noveno', $noveno)
                        ->with('nomLap', $nomLap);

            }else{
                //dd("si se encuentra elementos");
                Session::flash('message', 'No existen registro con esos parametros');
                return redirect('tactico/reporte4');
            // no está vacío
            }

        }
        else{
            Session::flash('message', 'Error la fecha inicial debe ser menor o igual que la fecha final');
            return redirect('tactico/reporte4');
        }   
    }

    public function informe5(Request $request)
    {
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        $total = 0;

         if($fechaI<=$fechaF)
        {
            //dd("funciona");
            $registros = DB::table('jornadas')
            ->join('docentes','jornadas.docente_id','=','docentes.id')
            ->join('users','docentes.user_id','=','users.id')
            ->where('fecha','>=',$fechaI)
            ->where('fecha','<=',$fechaF)
            ->groupBy('users.nombre', 'users.apellido', 'docentes.nip', 'jornadas.hora_entrada', 'jornadas.hora_salida')
            ->orderBy('docentes.id')
            ->select('users.nombre as nombre', 'users.apellido as apellido', 'docentes.nip as nip', 'jornadas.hora_entrada as entrada', 'jornadas.hora_salida as salida')
            ->get();

           // dd($registros);
            //$carbon = new Carbon;

            return view('informeTactico.informe5')
                    ->with('fechaI',$fechaI)
                    ->with('fechaF',$fechaF)
                    ->with('registros',$registros)
                    ->with('total', $total);

            dd($registros);
        } else{
            dd("error");
        }

    }
    
    public function informe6(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        $nombre=$request->get('nombre');
        $seccion=$request->get('seccion');
        $criterio=$request->get('criterio');

        if($fechaI<=$fechaF)
        {
            //dd("funciona");
            $resul=DB::table('alumno_grado')
                ->join('alumnos','alumno_grado.alumno_id','=','alumnos.id')
                ->join('grados','alumno_grado.grado_id','=','grados.id')
                ->where('alumno_grado.created_at','>=',$fechaI)
                ->where('alumno_grado.created_at','<=',$fechaF)
                ->where('alumno_grado.conducta','=',$criterio)
                ->where('grados.nombre','=',$nombre)
                ->where('grados.seccion','=',$seccion)
                ->select('alumnos.nombre as nombreAlum','alumnos.apellido','alumnos.genero','grados.nombre','grados.seccion','alumno_grado.conducta')
                ->orderBy('alumnos.genero')
                ->get();
            //dd($resul);

            if(count($resul)!=0) {

                //dd("funciona");
                return view('informeTactico.informe6')
                        ->with('fechaI', $fechaI)
                        ->with('fechaF', $fechaF)
                        ->with('seccion',$seccion)
                        ->with('nombre',$nombre)
                        ->with('resul', $resul);

            }else{
                //dd("si se encuentra elementos");
                Session::flash('message', 'No existen registro con esos parametros');
                return redirect('tactico/reporte6');
            // no está vacío
            }


        }
        else{
            //dd('error');
            Session::flash('message', 'Error la fecha inicial debe ser menor o igual que la fecha final');
            return redirect('tactico/reporte6');
        } 

    }

}
