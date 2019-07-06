<?php
use Carbon\Carbon;
?>
@extends('layouts.general')

@section('titulo', 'CEAA | Reporte')

@section('encabezado')
<center>
<button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="window.print()">
            <i class="fa fa-download"></i> Generar PDF
</button>
<a href="{{ url('estrategia/reporte4') }}"><button class="btn btn-danger">Regresar</button></a>
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

<h4 align="center">Horas trabajadas por docentes </h4>

<div class="table-responsive">
     <table class="table table-hover table-striped table-bordered table-quitar-margen">
        <thead>
          <tr>
            <th>NIP</th>
            <th>Nombre Docente</th>
            <th>Horas Trabajadas</th>
          </tr>
        </thead>
        <tbody>
<tr>
              <td>2564879</td>
              <td>Victor Ceron </td>
              <td>{{$profe1}}</td>
            </tr>

            <tr>
              <td>5689741</td>
              <td>Frank Urrutia </td>
              <td>{{$profe2}}</td>
            </tr> 

            <tr>
              <td>5641245</td>
              <td>Francisco Mejia </td>
              <td>{{$profe3}}</td>
            </tr> 

            <tr>
              <td>5897841</td>
              <td>Wilfredo Garcia </td>
              <td>{{$profe4}}</td>
            </tr>   

            <tr>
              <td>5487441</td>
              <td>Jaime Gomez </td>
              <td>{{$profe5}}</td>
            </tr>   

            <tr>
              <td>56897454</td>
              <td>Aide Hernandez </td>
              <td>{{$profe6}}</td>
            </tr> 

            <tr>
              <td>2568741</td>
              <td>Regina Palacios </td>
              <td>{{$profe7}}</td>
            </tr> 

            <tr>
              <td>3265454</td>
              <td>Cornelio Diaz </td>
              <td>{{$profe8}}</td>
            </tr> 

            <tr>
              <td>2564874</td>
              <td>Ana Ceron </td>
              <td>{{$profe9}}</td>
            </tr>        
    </tbody>
  </table>
</div>

</div>
</div>

@endsection