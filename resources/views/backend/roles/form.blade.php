@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">                    
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>
                <div class="panel-body">
                    <form action="{{$formAction}}" enctype="multipart/form-data" method="post">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nombre
                                </label>
                                <input class="form-control" name="name" type="text" value="@if($role->name){{ $role->name }} @endif">
                                </input>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Descripción
                                </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">@if($role->description){{ $role->description}}@endif</textarea>
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
