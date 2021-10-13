@extends('admin.layouts.dashboard')
@section('css_page')
<link rel="stylesheet" href="{{asset('css/dash/jquery.dataTables.min.css')}}">
@endsection
@section('content')
<h3 class="dash-title">Normativas internas</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="easion-card">
            <div class="card-header">
                <div class="easion-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="easion-card-title">
                    <span class="mr-4">Nueva normativa</span>                    
                </div>                
            </div>
            <div class="card-body">
                <form method="POST" action={{route('admin.normative.store')}} enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="hidden" name="id" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Numero de normativa</label>
                            <input type="text" name="numero" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Version</label>
                            <input type="text" name="version" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Tipo documento</label>
                            <select id="inputState" name="tipo" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">Reglamento</option>
                                <option value="2">Procedimiento</option>
                                <option value="3">Resolucion gerencial</option>
                                <option value="4">Memorandum</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Estado</label>
                            <select id="inputState" name="estado" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">Vigente</option>
                                <option value="2">Derogado</option>
                                <option value="3">Anulado</option>
                            </select>
                        </div>
            
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Proceso al que pertenece</label>
                            <select id="inputState" name="proceso" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">Operativo</option>
                                <option value="2">Estrategico</option>
                                <option value="3">Soporte</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Fecha de publicacion</label>
                            <input type="date" name="fechapublicacion" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Fecha de emision</label>
                            <input type="date" name="fechaemision" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Descripcion o sumilla</label>
                            <textarea class="form-control" name="descripcion" name="" id="" rows="2"></textarea>
                        </div>
                    </div>
            
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Seleccionar archivo</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
            
                    <button type="submit" class="btn btn-primary "><i class="far fa-save"></i> Guardar</button>
                    <a href="{{route('admin.normative.index')}}" class="btn btn-danger "><i class="fas fa-arrow-circle-left"></i> Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')