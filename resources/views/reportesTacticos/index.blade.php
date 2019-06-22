@extends('layouts.general')

@section('titulo', 'CEAA | Sub Director')

@section('encabezado', 'Sub Director')

@section('subencabezado', 'Gestión')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Personal
</li>
<li class="active">
  Sub Director
</li>
@endsection

@section('contenido')

<div class="panel panel-default">
 	<div class="panel-heading"><center><h4>Reportes Tacticos</h4></center></div>
 	<div class="panel-body">
 		<div class="row">
        <div class="col-md-4">
            <center>
          		<h3>Listado de asistencias de alumnos por grado</h3>
          		<p>Se mostrará un listado de la asistencia de los alumnos de acuerdo a su grado, sección y género</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesTacticos.reporte') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>
       
        <div class="col-md-4">
            <center>
          		<h3>Listados de alumnos aunsente por grado</h3>
          		<p>Se mostrará un listado de los alumnos por grado y sección del total de los alumnos ausentes</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesTacticos.reporte2') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>

        <div class="col-md-4">
            <center>
          		<h3>Total de alumnos reprobados por grado</h3>
          		<p>Se mostrará un listado por grado, sección y genero de los alumnos reprobados</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesTacticos.reporte3') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>
       
        <div class="col-md-4">
            <center>
          		<h3>Utilizacion de los laboratorio</h3>
          		<p>Se mostrará un listado con el grado, sección y la utilización del laboratorio informático</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesTacticos.reporte4') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>

        <div class="col-md-4">
            <center>
          		<h3>Total de horas trabajada por docentes</h3>
          		<p>Se mostrará un listado con los nombres de los docentes y el total de horas trabajadas</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesTacticos.reporte5') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>

        <div class="col-md-4">
            <center>
              <h3>Indice conductual de los alumnos por grado</h3>
              <p>Se mostrará un listado con el grado, sección y el índice conductual de los alumnos</p>
              <p><a class="btn btn-primary btn-flat" href="{{ route('reportesTacticos.reporte6') }}" role="button">Ver &raquo;</a></p>
            </center>
        </div>

      </div>
 		
 	</div>
</div>

@endsection