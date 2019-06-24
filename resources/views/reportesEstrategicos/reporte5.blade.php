@extends('layouts.general')

@section('titulo', 'CEAA | Director')

@section('encabezado', 'Director')

@section('contenido')


<div class="panel panel-default">
 	<div class="panel-heading"><center><h4>Porcentaje de alumnos sobresalientes</h4></center></div>
 	<div class="panel-body">
	
 	{!!Form::open(array('url'=>'informe4Extrategico','method'=>'POST','autocomplete'=>'off'))!!}
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
            <center><label for="nota">Promedio de Notas</label></center>
            <select name="nota" id="nota" class="form-control" required="Nota Promedio">
              <option value="">-- Seleccione una opción --</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
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