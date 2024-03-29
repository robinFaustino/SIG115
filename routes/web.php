<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| NOTA
|--------------------------------------------------------------------------
| Si no tienes usuarios ni roles de usuario en la base de datos, saca del
| grupo las rutas de roles y usuarios. Por si no quieres hacerlo con tinker
| o desde phpMyAdmin y accede a ellas con su url correspondiente.
|
| Roles: http://localhost:8000/roles
| Usuarios: Roles: http://localhost:8000/users
*/

/**
 * Solo tienen acceso usuarios autentificados.
 */
Route::group(['middleware' => 'auth'], function() {

    /**
     * Solo tienen acceso usuarios con rol de director.
     *
     */
    Route::group(['middleware' => ['admin']], function() {

    // Roles de usuario.
        Route::resource('roles', 'RolController');

        // Usuarios.
        Route::resource('users', 'UserController');
 });
    Route::group(['middleware' => 'direc'], function() {

        // Materias.
        Route::resource('materias', 'MateriaController');

        //Nivel Educativo
        Route::resource('nivel', 'NivelEducativoController');

        // Grados
        Route::resource('grados', 'GradoController');

        // Años
        Route::resource('anios','AnioController');

        // Valores
        Route::resource('valores','ValorController'); 

        

    });

    /**
     * Solo tienen acceso usuarios con rol de director o secretaria.
     */
    Route::group(['middleware' => 'secre'], function() {

        // Docentes.
        Route::resource('docentes', 'DocenteController');

        //Jornada laboral
        Route::resource('jornadas','JornadaController');

        // Pago de alimentos.
        Route::resource('pagos', 'PagoController');
        Route::post('pagos/{pago}/store', 'PagoController@store2')->name('pagos.store2');
        Route::delete('pagos/{pago}/destroy', 'PagoController@destroy2')->name('pagos.destroy2');

        // Recursos.
        Route::resource('recursos', 'RecursoController');

        // Inventarios.
        Route::resource('inventarios', 'InventarioController');
        Route::post('inventarios/{inventario}/store', 'InventarioController@store2')->name('inventarios.store2');
        Route::delete('inventarios/{recurso}/destroy', 'InventarioController@destroy2')->name('inventarios.destroy2');
    });

    // Alumnos.
    Route::resource('alumnos','AlumnoController');

    // Récord de notas.
    Route::get('alumnos/{alumno}/{grado}/record', 'AlumnoController@record')->name('alumnos.record');

    // Matriculas.
    Route::resource('matriculas','MatriculaController');

    // Notas.
    Route::get('notas', 'NotaController@index')->name('notas.index');
    Route::get('notas/{gra_mat}/edit', 'NotaController@edit')->name('notas.edit');
    Route::put('notas/update', 'NotaController@update')->name('notas.update');

    // Conducta.
    Route::get('notas/conducta/{grado}/edit', 'NotaController@editConducta')->name('conducta.edit');
    Route::put('notas/conducta/update', 'NotaController@updateConducta')->name('conducta.update');

    // Evaluaciones.
    Route::get('evaluaciones/{gra_mat}/create', 'EvaluacionController@create')->name('evaluaciones.create');
    Route::post('evaluaciones/store', 'EvaluacionController@store')->name('evaluaciones.store');
    Route::get('evaluaciones/{gra_mat}/{evaluacion}/subir', 'EvaluacionController@subir')->name('evaluaciones.subir');
    Route::get('evaluaciones/{gra_mat}/{evaluacion}/bajar', 'EvaluacionController@bajar')->name('evaluaciones.bajar');
    Route::get('evaluaciones/{evaluacion}/edit', 'EvaluacionController@edit')->name('evaluaciones.edit');
    Route::put('evaluaciones/{evaluacion}/update', 'EvaluacionController@update')->name('evaluaciones.update');
    Route::get('evaluaciones/{evaluacion}', 'EvaluacionController@destroy')->name('evaluaciones.destroy');

    // Reportes de notas.
    Route::get('notas/{grado}/reportes', 'NotaController@createReporte')->name('notas.create-reporte');
    Route::post('notas/reportes/descargar', 'NotaController@downloadReporte')->name('notas.reporte');

    // Ranking.
    Route::get('notas/{grado}/ranking', 'NotaController@ranking')->name('notas.ranking');

    // Vista de la Pagina Reportes
    Route::get('reportes', function(){
	    return view('pdf.principal');
    })->name('reportes');

    // Para descargar PDF de Grados
    Route::get('descargar/grados', 'GradoController@pdf')->name('grados.pdf');

Route::group(['middleware' => ['estra']], function() {
    //para reportes
        Route::resource('reportesEstrategicos','ReporteEstrategicoController');

    //ruta para la vista de parametros reportes estrategicos
    Route::get('estrategia/reporte', 'ReporteEstrategicoController@reportes')
    ->name('reportesEstrategicos.reporte');
    Route::get('estrategia/reporte2', 'ReporteEstrategicoController@reportes2')
    ->name('reportesEstrategicos.reporte2');
    Route::get('estrategia/reporte3', 'ReporteEstrategicoController@reportes3')
    ->name('reportesEstrategicos.reporte3');
    Route::get('estrategia/reporte4', 'ReporteEstrategicoController@reportes4')
    ->name('reportesEstrategicos.reporte4');
    Route::get('estrategia/reporte5', 'ReporteEstrategicoController@reportes5')
    ->name('reportesEstrategicos.reporte5');

    //informe estrategicos
    Route::post('informe1Extrategico', 'ReporteEstrategicoController@informe');
    Route::post('informe2Extrategico', 'ReporteEstrategicoController@informeDocente');
    Route::post('informe3Extrategico', 'ReporteEstrategicoController@informe3');
    Route::post('informe4Extrategico', 'ReporteEstrategicoController@informe4');
    Route::post('informe5Extrategico', 'ReporteEstrategicoController@informe5');

 });

Route::group(['middleware' => ['tacti']], function() {
    
        //para reportes tactico de subdirector
        Route::resource('reportesTacticos','ReporteTacticoController');

    //rutas para las vista de parametros reportes tacticos
    Route::get('tactico/reporte', 'ReporteTacticoController@reportes')
    ->name('reportesTacticos.reporte');
    Route::get('tactico/reporte2', 'ReporteTacticoController@reportes2')
    ->name('reportesTacticos.reporte2');
    Route::get('tactico/reporte3', 'ReporteTacticoController@reportes3')
    ->name('reportesTacticos.reporte3');
    Route::get('tactico/reporte4', 'ReporteTacticoController@reportes4')
    ->name('reportesTacticos.reporte4');
    Route::get('tactico/reporte5', 'ReporteTacticoController@reportes5')
    ->name('reportesTacticos.reporte5');
    Route::get('tactico/reporte6', 'ReporteTacticoController@reportes6')
    ->name('reportesTacticos.reporte6');

    //informe tactico
    Route::post('informe1Tactico', 'ReporteTacticoController@informe');
    Route::post('informe2Tactico', 'ReporteTacticoController@informe2');
    Route::post('informe3Tactico', 'ReporteTacticoController@informe3');
    Route::post('informe4Tactico', 'ReporteTacticoController@informe4');
    Route::post('informe5Tactico', 'ReporteTacticoController@informe5');
    Route::post('informe6Tactico', 'ReporteTacticoController@informe6');
 });

    // Para descargar PDF de Docentes
    Route::get('descargar/docentes', 'DocenteController@pdf')->name('docentes.pdf');

    // Para descargar PDF de niveles
    Route::get('descargar/niveles', 'NivelEducativoController@pdf')->name('nivel.pdf');

    // Para descargar PDF de MAterias
    Route::get('descargar/materias', 'MateriaController@pdf')->name('materias.pdf');

    // Para descargar PDF de Jornadas Laborales
    Route::get('descargar/jornadas', 'JornadaController@pdf')->name('jornadas.pdf');

    // Editar imagen de perfil.
    Route::put('/{user}', 'HomeController@actualizarImagen')->name('actualizar-imagen');
    
    // Editar contraseña.
    Route::put('/{user}/password', 'HomeController@actualizarPassword')->name('actualizar-password');

});

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'HomeController@index')->name('register');