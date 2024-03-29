@extends('layouts.general')

@section('titulo', 'CEAA | Sub Director')

@section('encabezado', 'Sub Director')

@section('contenido')

@if(Session::has('message'))
     <p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

<div class="panel panel-default">
  <div class="panel-heading"><center><h4>Listado de asistencia de alumnos por cada grado de acuerdo a su género</h4></center></div>
  <div class="panel-body">
  
  {!!Form::open(array('url'=>'informe1Tactico','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}} 
      <div class="row">
        <div class="form-group"> 
          <div class="col-xs-4 col-md-offset-4">
            <center><label for="fecha1">Fecha Inicio</label></center>
            <input type="date" name="fecha1" id="fecha1" class="form-control" required="fecha1" placeholder="yyyy/mm/dd">
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="form-group"> 
          <div class="col-xs-4 col-md-offset-4">
            <center><label for="fecha2">Fecha Final</label></center>
            <input type="date" name="fecha2" id="fecha2" class="form-control" required="fecha2" placeholder="yyyy/mm/dd">
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="form-group"> 
          <div class="col-xs-4 col-md-offset-4">
            <center><label for="fecha2">Grado</label></center>
              <select name="nombre" id="nombre" class="form-control" required="nombre">
                      <option selected value="">Seleccione El Grado</option>
                      <option value="Primer Grado">Primer Grado</option>
                      <option value="Segundo Grado">Segundo Grado</option>
                      <option value="Tercer Grado">Tercer Grado</option>
                      <option value="Quarto Grado">Quarto Grado</option>
                      <option value="Quinto Grado">Quinto Grado</option>
                      <option value="Sexto Grado">Sexto Grado</option>
                      <option value="Septimo Grado">Septimo Grado</option>
                      <option value="Octavo Grado">Octavo Grado</option>
                      <option value="Noveno Grado">Noveno Grado</option>  
              </select>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="form-group"> 
          <div class="col-xs-4 col-md-offset-4">
            <center><label for="fecha2">Seccion</label></center>
              <select name="seccion" id="seccion" class="form-control" required="seccion">
                <option selected value="">Seleccione la seccion</option>
                <option value="A">A</option>  
              </select>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <center>
          <a href="#"><button class="btn btn-info">Generar reporte</button></a>
          <a href="{{ route('reportesTacticos.index') }}" class="btn btn-danger">Salir</a>
          <a href="#"><button class="btn btn-Warning">Ayuda</button></a>
        </center>
      </div>
  {!!Form::close()!!}
  </div>
</div>

@endsection