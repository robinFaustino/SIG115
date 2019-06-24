@extends('layouts.general')

@section('titulo', 'CEAA | Sub Director')

@section('encabezado', 'Sub Director')

@section('contenido')


<div class="panel panel-default">
 	<div class="panel-heading"><center><h4>Alumnos ausentes por grado</h4></center></div>
 	<div class="panel-body">
	
 	{!!Form::open(array('url'=>'informe2Tactico','method'=>'POST','autocomplete'=>'off'))!!}
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
                      @foreach ($grados as $grados)
                      <option value="{{$grados->nombre}}">{{$grados->nombre}}
                      </option>
                      @endforeach  
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
                <option value="B">B</option>     
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