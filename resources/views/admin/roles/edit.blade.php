@extends('admin.layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card easion-card">
            <div class="card-header">
                <div class="easion-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="easion-card-title">
                   <span class="mr-4">Editar rol</span>
                </div>
            </div>
            <div class="card-body">
                @include('admin.custom.message')
                <form method="POST" action="{{ route('admin.roles.update', $role->id)}}" enctype="">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="hidden" name="id" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputEmail4">Nombre</label>
                        <input type="text" 
                               name="name" 
                               class="form-control" id="inputEmail4" 
                               value="{{old('name',$role->name)}}"                               
                        >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Slug</label>
                            <input type="text" 
                                    name="slug" 
                                    class="form-control" 
                                    id="inputEmail4" 
                                    value="{{old('slug',$role->slug)}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Descripcion</label>
                            <input type="text" 
                                    name="description" 
                                    class="form-control" 
                                    id="inputPassword4" 
                                    value="{{old('description',$role->description)}}">
                        </div>
                        <div class="form-group col-md-12">
                            <hr>
                            <label for="inputState">Acceso Full</label><br>                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" 
                                id="fullaccessyes" 
                                name="full-access" 
                                value="yes" class="custom-control-input"
                                @if ( $role['full-access']=="yes") 
                                    checked 
                                @elseif (old('full-access')=="yes") 
                                    checked 
                                @endif
                                >
                                <label class="custom-control-label" for="fullaccessyes">Sí</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" 
                                        id="fullaccessno" 
                                        name="full-access" 
                                        value="no" 
                                        class="custom-control-input"
                                        @if ( $role['full-access']=="no") 
                                            checked 
                                        @elseif (old('full-access')=="no") 
                                            checked 
                                        @endif
                                >
                                <label class="custom-control-label" for="fullaccessno">No</label>
                              </div>
                        </div>
                        <div class="form-group col-md-12">
                            <hr>
                            <h5>Lista de permisos</h5>
                            @foreach ($permissions as $permission)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" 
                                        class="custom-control-input" id="permission_{{$permission->id}}" value="{{$permission->id}}" name="permission[]"
                                        @if( is_array(old('permission')) && in_array("$permission->id", old('permission'))    )
                                        checked
            
                                        @elseif( is_array($permission_role) && in_array("$permission->id", $permission_role)    )
                                            checked            
                                        @endif
                                >
                                <label class="custom-control-label" for="permission_{{$permission->id}}">
                                    {{$permission->name}} (
                                    {{$permission->description}})
                                </label>
                            </div>
                                
                            @endforeach
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3"><i class="far fa-save"></i> Guardar</button>
                    <a href="{{route('admin.roles.index')}}" class="btn btn-danger ml-3"><i class="fas fa-arrow-circle-left"></i> Cancelar</a>
                </form>
                
            </div>     
        </div>
    </div>   
</div>
@endsection('content')