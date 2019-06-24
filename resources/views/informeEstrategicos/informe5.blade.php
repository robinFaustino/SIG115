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
  		Centro Escolar Anastasio Aquino <br>
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
            <th>Nombre Alumno</th>
            <th>Grado</th>
            <th>Materia</th>
            <th>Nota</th>
          </tr>
        </thead>
        <tbody>
        @foreach($registros as $registro)          		
          	<tr>
          		<td>{{ $registro->nombreAlum }} {{ $registro->apellidoAlum }}</td>
              <td>{{ $registro->grado }}</td>
              <td>{{ $registro->materia }}</td>
              <td>{{ $registro->nota }}</td>
            </tr>
        @endforeach         
		</tbody>
	</table>
</div>

</div>
</div>

@endsection