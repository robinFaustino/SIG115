@extends('layouts.general')

@section('titulo', 'CEAA | Director')

@section('encabezado', 'Director')

@section('subencabezado', 'Gestión')

@section('breadcrumb')
<li>
  <i class="fa fa-users"></i> Personal
</li>
<li class="active">
  Director
</li>
@endsection

@section('contenido')

<div class="panel panel-default">
 	<div class="panel-heading"><center><h4>Reportes Estrategicos</h4></center></div>
 	<div class="panel-body">
 		<div class="row">
        <div class="col-md-4">
            <center>
          		<h3>Asistencia de alumnos</h3>
          		<p>Se mostrará un listado de la asistencia de los alumnos de acuerdo a su grado y sección</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesEstrategicos.reporte') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>
       
        <div class="col-md-4">
            <center>
          		<h3>Asistencia de profesores</h3>
          		<p>Se mostrará un listado con la asistencia de los profesores</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesEstrategicos.reporte2') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>

        <div class="col-md-4">
            <center>
          		<h3>Índice de reprobados todos los grados</h3>
          		<p>Se mostrará un listado por grado y sección de los alumnos reprobados</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesEstrategicos.reporte3') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>
       
        <div class="col-md-4">
            <center>
          		<h3>Porcentaje de alumnos ausentes de todos los grados</h3>
          		<p>Se mostrará un listado por grado y sección del total de los alumnos ausentes</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesEstrategicos.reporte4') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>

        <div class="col-md-4">
            <center>
          		<h3>Porcentaje de alumnos sobresalientes</h3>
          		<p>Se mostrará una lista de los alumnos sobresalientes de acuerdo a su grado y sección</p>
          		<p><a class="btn btn-primary btn-flat" href="{{ route('reportesEstrategicos.reporte5') }}" role="button">Ver &raquo;</a></p>
          	</center>
        </div>

      </div>
 		
 	</div>
</div>

@endsection