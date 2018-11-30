@extends('layouts.layout')

@section('title',"Crear Estación:")

@section('content')
<div class="card">
    <h2 class="card-header">Crear Estación:</h2>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <h5>Por favor corrige los errores debajo:</h5>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ url('/propietarios')}}">
        {!! csrf_field() !!} <!-- para evitar ataques maliciosos en el metodo POST-->

        <div class="container col-md-10 col-md-offset-1">

            <h4 class="card-header">Datos Generales:</h4>

            <div class="row">
                <div class="col-sm-12">
                    <label for="descripcion">Nombre:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Nombre de la Estación de Servicio"value="{{ old('descripcion') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nroper_Cre">Número Permiso CRE:</label>
                    <input type="text" class="form-control" name="nroper_Cre" id="nroper_Cre" placeholder="Número de Permiso ante la CRE"value="{{ old('nroper_Cre') }}">
                </div>
                <div class="col-sm-6">
                    <label for="rfc_estacion">Número RFC:</label>
                    <input type="text" class="form-control" name="rfc_estacion" id="rfc_estacion" placeholder="Número RFC de la Estación"value="{{ old('rfc_estacion') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nombre_propietario">Propietario:</label>
                    <input type="text" class="form-control" name="nombre_propietario" id="nombre_propietario" placeholder="Nombre del Propietario"value="{{ old('nombre_propietario') }}">
                </div>
                <div class="col-sm-6">
                    <label for="nombre_grupo">Grupo:</label>
                    <input type="text" class="form-control" name="nombre_grupo" id="nombre_grupo" placeholder="Grupo"value="{{ old('nombre_grupo') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nombre_responsable">Nombre Responsable:</label>
                    <input type="text" class="form-control" name="nombre_responsable" id="nombre_responsable" placeholder="Nombre del Responsable"value="{{ old('nombre_responsable') }}">
                </div>
                <div class="col-sm-6">
                    <label for="email_responsable">Correo Electrónico Responsable:</label>
                    <input type="email" class="form-control" name="email_responsable" id="email_responsable" placeholder="nombre@dominio.com" value="{{ old('email_responsable') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <label for="nro_estacion">Número Estación:</label>
                    <input type="text" class="form-control" name="nro_estacion" id="nro_estacion" placeholder="Número de Estación PEMEX"value="{{ old('nro_estacion') }}">
                </div>
                <div class="col-sm-3">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="codigo"value="{{ old('codigo') }}">
                </div>
                <div class="col-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres"value="{{ old('nombre') }}">
                </div>
            </div>

        </div>

        <div class="row"></div>

        <div class="container col-md-10 col-md-offset-1">
            
            <h4 class="card-header">Ubicación y contacto:</h4>
                  
            <div class="row">
                <div class="col-sm-4">
                    <label for="entidad_federal">Entidad Federal:</label>
                    <select class="form-control" name="entidad_federal">
                        <option selected="true" value="true">Activo</option>
                        <option value="false">Inactivo</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="ciudad">Ciudad:</label>
                    <select class="form-control" name="ciudad">
                        <option selected="true" value="true">Activo</option>
                        <option value="false">Inactivo</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="municipio">Municipio:</label>
                    <select class="form-control" name="municipio">
                        <option selected="true" value="true">Activo</option>
                        <option value="false">Inactivo</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="calle">Calle:</label>
                    <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle"value="{{ old('Calle') }}">
                </div>
                <div class="col-sm-4">
                    <label for="colonia">Colonia:</label>
                    <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia"value="{{ old('colonia') }}">
                </div>
                <div class="col-sm-2">
                    <label for="codigo_postal">Cód.Postal:</label>
                    <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" placeholder="Codigo Posta"value="{{ old('codigo_postal') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="telefono1">Número de Telefóno 1:</label>
                    <input type="text" class="form-control" name="telefono1" id="telefono1" placeholder="Número de Telefono 1"value="{{ old('telefono1') }}">
                </div>
                <div class="col-sm-6">
                    <label for="telefono2">Número de Telefóno 2:</label>
                    <input type="text" class="form-control" name="telefono2" id="telefono2" placeholder="Número de Telefono 2"value="{{ old('telefono2') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="celular1">Número de Celular 1:</label>
                     <input type="text" class="form-control" name="celular1" id="celular1" placeholder="Número de Celular 1"value="{{ old('celular1') }}">
                </div>
                <div class="col-sm-6">
                    <label for="celular2">Número de Celular 2:</label>
                    <input type="text" class="form-control" name="celular2" id="celular2" placeholder="Número de Celular 2"value="{{ old('celular2') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="email_estacion">Correo Electrónico Estación:</label>
                    <input type="email" class="form-control" name="email_estacion" id="email_estacion" placeholder="nombre@dominio.com" value="{{ old('email') }}">
                </div>
                <div class="col-sm-6">
                    <label for="sitioweb">Sitio Web:</label>
                    <input type="text" class="form-control" name="sitioweb" id="sitioweb" placeholder="Sitio Web"value="{{ old('sitioweb') }}">
                </div>
            </div>
        </div>

        <div class="row"></div>

        <div class="container col-md-10 col-md-offset-1">

            <h4 class="card-header">Constitución y Repressentación Legal:</h4>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nro_instrumento">Nro. Instrumento:</label>
                    <input type="text" class="form-control" name="nro_instrumento" id="nro_instrumento" placeholder="Número del Instrumento" value="{{ old('nro_instrumento') }}">
                </div>
                <div class="col-sm-6">
                    <label for="fecha_constitucion">Fecha Constitución:</label>
                    <input type="text" class="form-control" name="fecha_constitucion" id="fecha_constitucion" placeholder="Fecha Constitución" value="{{ old('fecha_constitucion') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="notario_constitucion">Nombre Notario:</label>
                    <input type="text" class="form-control" name="notario_constitucion" id="notario_constitucion" placeholder="Nombre y Apellido Notario Constitución" value="{{ old('notario_constitucion') }}">
                </div>
                <div class="col-sm-6">
                    <label for="ciudad_constitucion">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad_constitucion" id="ciudad_constitucion" placeholder="Ciudad Constitución" value="{{ old('ciudad_constitucion') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nro_instrumento">Nombre Representante Legal:</label>
                    <input type="text" class="form-control" name="nro_instrumento" id="nro_instrumento" placeholder="Número del Instrumento" value="{{ old('nro_instrumento') }}">
                </div>
                <div class="col-sm-6">
                    <label for="fecha_constitucion">Fecha emisióm:</label>
                    <input type="text" class="form-control" name="fecha_constitucion" id="fecha_constitucion" placeholder="Fecha Constitución" value="{{ old('fecha_constitucion') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="nro_instrumento">Nro. Instrumento:</label>
                    <input type="text" class="form-control" name="nro_instrumento" id="nro_instrumento" placeholder="Número del Instrumento" value="{{ old('nro_instrumento') }}">
                </div>
                <div class="col-sm-6">
                    <label for="fecha_constitucion">Fecha Representación:</label>
                    <input type="text" class="form-control" name="fecha_constitucion" id="fecha_constitucion" placeholder="Fecha Constitución" value="{{ old('fecha_constitucion') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="notario_constitucion">Nombre Notario:</label>
                    <input type="text" class="form-control" name="notario_constitucion" id="notario_constitucion" placeholder="Nombre y Apellido Notario Constitución" value="{{ old('notario_constitucion') }}">
                </div>
                <div class="col-sm-6">
                    <label for="ciudad_constitucion">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad_constitucion" id="ciudad_constitucion" placeholder="Ciudad Constitución" value="{{ old('ciudad_constitucion') }}">
                </div>
            </div>
        </div>

        <div class="container col-md-10 col-md-offset-1">
            <div class="col-sm-12">
                    <label for="estatus">COMBOS:</label>
                    <select class="form-control" name="estatus">
                        <option selected="true" value="true">Activo</option>
                        <option value="false">Inactivo</option>
                    </select>
            </div>
               
            <button type="submit" class="btn btn-primary">Guardar Propietario</button>
            <a href="{{route('propietarios.index')}}" class="btn btn-link">Regresar al listado de Textos Creados</a>
        </div>
        </form>
    </div>
</div>
@endsection
