@extends('layouts.general')

@section('titulo', 'CEAA | Reporte')

@section('encabezado')
<center>
<button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="window.print()">
            <i class="fa fa-download"></i> Generar PDF
</button>
<a href="{{ url('tactico/reporte3') }}"><button class="btn btn-danger">Regresar</button></a>
<a href="#"><button class="btn btn-info">Ayuda</button></a>
</center>

@endsection

@section('contenido')
<div class="box box-primary">
<div class="box-header with-border">

<div class="row">
    <div class="col-xs-12 col-sm-4">
    	<h5>Usuario: Sub Director</h5>
    </div>

    <div class="col-xs-12 col-sm-4">
  	    <h3 align="center">
  		Centro Escolar Anastasio Aquino <br>
		Canton San Antonio Abajo <br>
		Santiago Nonualco, La Paz<br>
		Codigo 12053 <br>
  	    </h3>
  	<center>
		<img src="{{ asset('img/sistema/logo_ceaa.png') }}" style="width: 104px; height:139px;" >
	</center>
    </div>

    <div class="col-xs-12 col-sm-4">
  		<h5 align="right">Periodo de tiempo:   {{$fechaI}}-{{$fechaF}}</h5>
    </div>

</div>

<h4 align="center">Total de alumnos reprobados por grado de acuerdo a su género</h4>
<?php

  if($genero=='M'){
    $genero='Masculino';
  }else{
    $genero='Femenino';
  }

?>
<div class="table-responsive">
     <table class="table table-hover table-striped table-bordered table-quitar-margen">
        <thead>
          <tr>
            <th>Grado:</th>
            <th>Reprobado:</th>
            <th>Genero:</th>
            <th>Estado:</th>
          </tr>
        </thead>
        <tbody>          		
          	<tr>
          		<td>Primero</td>
              <td>{{$primero}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Segundo</td>
              <td>{{$segundo}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Tercero</td>
              <td>{{$tercero}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Quarto</td>
              <td>{{$quarto}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Quinto</td>
              <td>{{$quinto}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Sexto</td>
              <td>{{$sexto}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Septimo</td>
              <td>{{$septimo}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Octavo</td>
              <td>{{$octavo}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr>

            <tr>
              <td>Noveno</td>
              <td>{{$noveno}}</td>
              <td>{{$genero}}</td>
              <td>Reprobados</td>
            </tr> 
		</tbody>
	</table>
</div>

</div>
</div>

@endsection







