@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="button-right">
            <a href="{{ url('admin/roles/create') }}" class="btn btn-primary" role="button">Añadir Rol</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $rol)
                            <tr>
                                <th scope="row">{{ $loop->index }}</th>
                                <td>{{ $rol->name }}</td>
                                <td>{{ $rol->description }}</td>
                                <td><a href="{{ url('admin/roles/'.Hashids::encode($rol->id).'/edit') }}">Editar</a> | <a href="{{ url('admin/roles/destroy/'.Hashids::encode($rol->id).'') }}">Borrar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
