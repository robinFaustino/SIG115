<?php

namespace DSIproject\Http\Controllers;

use Illuminate\Http\Request;
use DSIproject\Grado;
use DB;

class ReporteEstrategicoController extends Controller
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
        return view('reportesEstrategicos.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportes(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');

        return view('reportesEstrategicos.reporte1')->with('grados', $grados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportes2(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');

        return view('reportesEstrategicos.reporte2')->with('grados', $grados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportes3(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');

        return view('reportesEstrategicos.reporte3')->with('grados', $grados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportes4(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');

        return view('reportesEstrategicos.reporte4')->with('grados', $grados);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportes5(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');

        return view('reportesEstrategicos.reporte5')->with('grados', $grados);
    }

    public function informe(Request $request)
    {
        $grados = DB::select('SELECT * FROM grados');
        $fechaI=$request->get('fecha1');
        $fechaF=$request->get('fecha2');
        $grado1='0';
        $grado2='0';
        //dd($grado2);
        //dd($fechaI);
        //dd($fechaN);
        //dd($fechaI);
        if($fechaI<=$fechaF)
        {
            //dd($fechaI);
            //, 'AND','fecha','<=',$fechaF
            $dato1=DB::table('asistencias')->where('fecha','>=',$fechaI)->where('fecha','<=',$fechaF)->get();
            $dato2=DB::table('asistencias')->where('fecha','>=',$fechaI)->where('fecha','<=',$fechaF)->get();
            //$dato1 = DB::select('SELECT * FROM asistencias WHERE fecha='?'',$fechaI);
            //dd($dato1);
            if(count($dato1)!=0) {
                
                foreach ($dato1 as $dato1) {

                    if($dato1->grado_id== 1){
                        //dd($dato1->grado_id);
                        $grado1=$dato1->asistencia+$grado1;
                    }elseif($dato1->grado_id== 3){
                        //dd($dato1->grado_id);
                        $grado2=$dato1->asistencia+$grado2;
                    }
                    
                }
                //dd($grado2);

                return view('informeEstrategicos.informe1')->with('dato2', $dato2)->with('grado1', $grado1)->with('grado2', $grado2)->with('fechaI', $fechaI)->with('fechaF', $fechaF);
            }else{
                //dd("si se encuentra elementos");
                dd("No se encuentra elementos");
            // no está vacío
            }

            //dd($dato1);
        }
        else{
            dd('error');
        }

        //return view('reportesEstrategicos.informe1')->with('grados', $grados);
    }

    public function create()
    {
        return view("reportesEstrategicos.reporte1"); 
    }
//
/*    public function store(ExperienciaLaboralFormRequest $request)
    {
        $experiencia = new ExperienciaLaboral;
        $experiencia->nombrepuesto=$request->get('nombrepuesto');
        $experiencia->fechainicio=$request->get('fechainicio');
        $experiencia->fechafin=$request->get('fechafin');
        $experiencia->funcion=$request->get('funcion'); 
        $experiencia->nombreorganizacion=$request->get('nombreorganizacion');
        $experiencia->telefonoorganizacion=$request->get('telefonoorganizacion');
        $experiencia->correoorganizacion=$request->get('correoorganizacion');
        $experiencia->save();
        //dd($request->all());

        return Redirect::to('experienciaLaboral');
    }

    public function show(Request $request)
    {

        $experiencia = DB::select('SELECT * FROM experiencia_laboral');

        return view('experienciaLaboral.registros')->with('experiencia',$experiencia);

    }

    public function edit($id)
    {
        //return view("experienciaLaboral.edit",["expe"=>ExperienciaLaboral::findOrFail($id)]);
    }

    public function update(ExperienciaLaboralFormRequest $request,$id)
    {
        $experiencia=ExperienciaLaboral::findOrFail($id);
        $experiencia->nombrepuesto=$request->get('nombrepuesto');
        $experiencia->fechainicio=$request->get('fechainicio');
        $experiencia->fechafin=$request->get('fechafin');
        $experiencia->funcion=$request->get('funcion'); 
        $experiencia->nombreorganizacion=$request->get('nombreorganizacion');
        $experiencia->telefonoorganizacion=$request->get('telefonoorganizacion');
        $experiencia->correoorganizacion=$request->get('correoorganizacion');
        $experiencia->update();
        //dd($request->all());
        
        return Redirect::to('experienciaLaboral/show');
    }

    public function destroy($id)
    {
        $experiencia=ExperienciaLaboral::findOrFail($id);
        $experiencia->delete();
        
        return Redirect::to('experienciaLaboral/show');
    }*/
}
