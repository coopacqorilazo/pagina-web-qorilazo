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
                   <span class="mr-4">Ver : Información del rol {{old('name',$role->name)}}</span>
                </div>
            </div>
            <div class="card-body">
                @include('admin.custom.message')
                <form method="" action="" enctype="">
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
                                value="{{$role->name}}" 
                                disabled                              
                            >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Slug</label>
                            <input type="text" 
                                    name="slug" 
                                    class="form-control" 
                                    id="inputEmail4" 
                                    value="{{$role->slug}}"
                                    disabled
                            >
                                    
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Descripcion</label>
                            <input type="text" 
                                    name="description" 
                                    class="form-control" 
                                    id="inputPassword4" 
                                    value="{{$role->description}}"
                                    disabled
                            >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Fecha de creacion</label>
                            <input type="text" 
                                    name="description" 
                                    class="form-control" 
                                    id="inputPassword4" 
                                    value="{{$role->created_at}}"
                                    disabled
                            >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Fecha de actualizacion</label>
                            <input type="text" 
                                    name="fecha_actualizacion" 
                                    class="form-control" 
                                    id="inputPassword4" 
                                    value="{{$role->updated_at}}"
                                    disabled
                            >
                        </div>
                        <div class="form-group col-md-12">
                            <hr>
                            <label for="inputState">Acceso Full</label><br>                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" 
                                        id="fullaccessyes" 
                                        disabled
                                        name="full-access" 
                                        value="yes" class="custom-control-input"
                                        @if ( $role['full-access']=="yes") 
                                            checked 
                                        @endif
                                >
                                <label class="custom-control-label" for="fullaccessyes">Sí</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" 
                                        disabled
                                        id="fullaccessno" 
                                        name="full-access" 
                                        value="no" 
                                        class="custom-control-input"
                                        @if ( $role['full-access']=="no") 
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
                                        @if( is_array($permission_role) && in_array("$permission->id", $permission_role)    )
                                            checked            
                                        @endif
                                        disabled
                                >
                                <label class="custom-control-label" for="permission_{{$permission->id}}">
                                    {{$permission->name}} (
                                    {{$permission->description}})
                                </label>
                            </div>
                                
                            @endforeach
                            
                        </div>
                    </div>
                    @can('haveaccess', 'role.edit')
                    <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-warning"> <i class="far fa-edit"></i> Editar </a>
                    @endcan
                    <a href="{{route('admin.roles.index')}}" class="btn btn-danger ml-3"><i class="fas fa-arrow-circle-left"></i> Cancelar</a>
                </form>
                
            </div>     
        </div>
    </div>   
</div>
@endsection('content')