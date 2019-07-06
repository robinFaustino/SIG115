@extends('layouts.general')

@section('titulo', 'CEAA | Reporte')

@section('encabezado')
<center>
<button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="window.print()">
            <i class="fa fa-download"></i> Generar PDF
</button>
<a href="{{ url('estrategia/reporte5') }}"><button class="btn btn-danger">Regresar</button></a>
<a href="#"><button class="btn btn-info">Ayuda</button></a>
</center>

@endsection

@section('contenido')
<div class="box box-primary">
<div class="box-header with-border">

<div class="row">
    <div class="col-xs-12 col-sm-4">
    	<h5>Usuario: Director</h5>
    </div>

    <div class="col-xs-12 col-sm-4">
  	    <h4 align="center">
  		Centro Escolar El Torogoz <br>
		Canton San Antonio Abajo <br>
		Santiago Nonualco, La Paz<br>
		Codigo 12053 <br>
  	    </h4>
  	<center>
		<img src="{{ asset('img/sistema/logo_ceaa.png') }}" style="width: 104px; height:139px;" >
	</center>
    </div>

    <div class="col-xs-12 col-sm-4">
  		<h5 align="right">Periodo de tiempo:   {{$fechaI}}-{{$fechaF}}</h5>
    </div>

</div>

<h4 align="center">Porcentaje de alumnos sobresalientes de todos los grados</h4>

<div class="table-responsive">
     <table class="table table-hover table-striped table-bordered table-quitar-margen">
        <thead>
          <tr>
            <th>Grado</th>
            <th>Alumnos sobresalientes</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>Primero</td>
              <td>{{$primero}}%</td>
            </tr>

            <tr>
              <td>Segundo  </td>
              <td>{{$segundo}}%</td>
            </tr> 

            <tr>
              <td>Tercer</td>
              <td>{{$tercero}}%</td>
            </tr> 

            <tr>
              <td>Cuarto</td>
              <td>{{$quarto}}%</td>
            </tr>   

            <tr>
              <td>Quinto</td>
              <td>{{$quinto}}%</td>
            </tr>   

            <tr>
              <td>Sexto</td>
              <td>{{$sexto}}%</td>
            </tr> 

            <tr>
              <td>Septimo</td>
              <td>{{$septimo}}%</td>
            </tr> 

            <tr>
              <td>Octavo</td>
              <td>{{$octavo}}%</td>
            </tr> 

            <tr>
              <td>Noveno</td>
              <td>{{$noveno}}%</td>
            </tr>         
		</tbody>
	</table>
</div>

</div>
</div>

@endsection