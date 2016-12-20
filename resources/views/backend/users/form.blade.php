@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
                <div class="panel-body">
                    <form action="{{$formAction}}" enctype="multipart/form-data" method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nombre
                                </label>
                                <input class="form-control" name="name" type="text" value="@if($user->name){{ $user->name }} @endif">
                                </input>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role[]" multiple="multiple" multiple data-placeholder="Roles ...">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <button class="btn btn-default waves-effect waves-light" id="enviar" type="submit">
                                Enviar
                            </button>
                        </input>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
