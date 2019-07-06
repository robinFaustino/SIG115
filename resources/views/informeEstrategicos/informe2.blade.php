<?php
$data = 'nada';
$i=1;
?>

@extends('layouts.general')

@section('titulo', 'CEAA | Reporte')

@section('encabezado')
<center>
<button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="window.print()">
            <i class="fa fa-download"></i> Generar PDF
</button>
<a href="{{ url('estrategia/reporte2') }}"><button class="btn btn-danger">Regresar</button></a>
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

<h4 align="center">Asistencia de Docentes</h4>

<div class="table-responsive">
     <table class="table table-hover table-striped table-bordered table-quitar-margen">
        <thead>
          <tr>
            <th>Nombre Docente</th>
            <th>Asistencias</th>
          </tr>
        </thead>
        <tbody>         		
          	<tr>
          		<td>Victor Ceron </td>
          		<td>{{$primero}}</td>
            </tr>

            <tr>
          		<td>Frank Urrutia </td>
          		<td>{{$segundo}}</td>
            </tr> 

            <tr>
              <td>Francisco Mejia </td>
              <td>{{$tercero}}</td>
            </tr> 

            <tr>
              <td>Wilfredo Garcia </td>
              <td>{{$quarto}}</td>
            </tr>   

            <tr>
              <td>Jaime Gomez </td>
              <td>{{$quinto}}</td>
            </tr>   

            <tr>
              <td>Aide Hernandez </td>
              <td>{{$sexto}}</td>
            </tr> 

            <tr>
              <td>Regina Palacios </td>
              <td>{{$septimo}}</td>
            </tr> 

            <tr>
              <td>Cornelio Diaz </td>
              <td>{{$octavo}}</td>
            </tr> 

            <tr>
              <td>Ana Ceron </td>
              <td>{{$noveno}}</td>
            </tr> 
		</tbody>
	</table>
</div>

</div>
</div>

@endsection







