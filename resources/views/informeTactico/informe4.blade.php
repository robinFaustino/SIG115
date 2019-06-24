@extends('layouts.general')

@section('titulo', 'CEAA | Reporte')

@section('encabezado')
<center>
<button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="window.print()">
            <i class="fa fa-download"></i> Generar PDF
</button>
<a href="{{ url('tactico/reporte4') }}"><button class="btn btn-danger">Regresar</button></a>
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

<h4 align="center">Utilización de los laboratorios de informaticos</h4>

<div class="table-responsive">
     <table class="table table-hover table-striped table-bordered table-quitar-margen">
        <thead>
          <tr>
            <th>Laboratorio</th>
            <th>Grado</th>
            <th>Veces Utilizado</th>
          </tr>
        </thead>
        <tbody>          		
          	<tr>
              <td>{{$nomLap}}</td>
          		<td>Primero</td>
              <td>{{$primero}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Segundo</td>
              <td>{{$segundo}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Tercero</td>
              <td>{{$tercero}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Quarto</td>
              <td>{{$quarto}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Quinto</td>
              <td>{{$quinto}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Sexto</td>
              <td>{{$sexto}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Septimo</td>
              <td>{{$septimo}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Octavo</td>
              <td>{{$octavo}}</td>
            </tr>

            <tr>
              <td>{{$nomLap}}</td>
              <td>Noveno</td>
              <td>{{$noveno}}</td>
            </tr> 
		</tbody>
	</table>
</div>

</div>
</div>

@endsection