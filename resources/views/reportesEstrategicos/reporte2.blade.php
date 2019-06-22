@extends('layouts.general')

@section('titulo', 'CEAA | Director')

@section('encabezado', 'Director')

@section('contenido')

<style type="text/css">
body{text-align: center;
	background-color: red;
}

#contenedor{
width: 800px;
margin: 0 auto;
text-align: left;
}
</style>

<div class="panel panel-default">
 	<div class="panel-heading"><center><h4>Asistencia de los docentes</h4></center></div>
 	<div class="panel-body">
	
 	{!!Form::open(array('url'=>'informe2Extrategico','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}	
 	    <div class="row">
 	    	<div class="form-group"> 
    			<div class="col-xs-4 col-md-offset-4">
    				<center><label for="fechafin">Fecha Inicio</label></center>
    				<input type="date" name="fecha1" id="fecha1" class="form-control" required="fecha1" placeholder="yyyy/mm/dd">
  				</div>
  			</div>
  		</div>

  		<br>

  		<div class="row">
 	    	<div class="form-group"> 
    			<div class="col-xs-4 col-md-offset-4">
    				<center><label for="fechafin">Final</label></center>
    				<input type="date" name="fecha2" id="fecha2" class="form-control" required="fecha2" placeholder="yyyy/mm/dd">
  				</div>
  			</div>
  		</div>

  		<br>

  		<div class="row">
 	    	<center>
 	    		<a href="#"><button class="btn btn-info">Generar reporte</button></a>
 	    		<a href="#"><button class="btn btn-danger">Salir</button></a>
 	    		<a href="#"><button class="btn btn-Warning">Ayuda</button></a>
 	    	</center>
  		</div>
 	{!!Form::close()!!}
 	</div>
</div>

@endsection