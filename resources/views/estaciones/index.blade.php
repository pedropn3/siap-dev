@extends('layouts.layout')
@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1" align="justify" >{{ $title }}</h1>

        <p>
            <a href="{{route('estaciones.create')}}" class="btn btn-primary ">Crear nueva Estacion</a>
        </p>
    </div>

    @if ($estacions->isNotEmpty())
    <table class="table">
      <thead class="thead-dark">
        <tr >
          <th scope="col">#</th>
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Responsable</th>
          <th scope="col">email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($estacions as $estacion)
        <tr>
          <th scope="row">{{ $estacion->id }}</th>
          <td>{{ $estacion->codigo }}</td>
          <td>{{ $estacion->nombre }}</td>
          <td>{{ $estacion->descripcion }}</td>
          <td>{{ $estacion->nombre_Responsable }}</td>
          <td>{{ $estacion->email_responsable }}</td>
        <?php
        if($estacion->estatus) $estatus='Activo';
        else $estatus='Inactivo';
        ?>
          <td>{{ $estatus }}</td>
          <td>
            <form action="{{ route('estaciones.destroy', $estacion) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{route('estaciones.show',$estacion)}}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{route('estaciones.edit',$estacion)}}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
        <p>No hay estaciones registrados.</p>
    @endif
@endsection

@section('sidebar')
@parent
<!--    <h2>Barra Lateral Personalizada!</h2> -->
@endsection
