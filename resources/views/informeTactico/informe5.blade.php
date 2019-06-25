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
        @foreach($registros as $registro)             
            <tr>
              <td>{{ $registro->nip }}</td>
              <td>{{ $registro->nombre }} {{ $registro->apellido }}</td>
              <td>

                <?php
/*
                 $entra= $registro->entrada;
                  $format = "H:i:s";
                  $horas = DateTime::createFromFormat($format, $entra);
                  $entrada= $horas->format(Datetime::ATOM);
                 // $horas = new date($entrada);
                  $sali= $registro->salida;
                  $horas2 = DateTime::createFromFormat($format, $sali);
                  $salida= $horas2->format(Datetime::ATOM);
                 // echo $salida->modify($entrada);
                   echo date_diff( DateTimeInterface $entrada, DateTimeInterface $salida [, bool $absolute = FALSE ] ) : DateInterval
                   */

              ?></td>
            </tr>
        @endforeach         
    </tbody>
  </table>
</div>

</div>
</div>

@endsection