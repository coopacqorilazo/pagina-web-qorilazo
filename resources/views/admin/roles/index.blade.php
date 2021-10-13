@extends('admin.layouts.dashboard')
@section('css_page')
<link rel="stylesheet" href="{{asset('css/dash/jquery.dataTables.min.css')}}">
@endsection
@section('content')
<h3 class="dash-title">Roles</h3>
<div class="row">
    <div class="col-xl-12">
        <div class="card easion-card">
            <div class="card-header">
                <div class="easion-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="easion-card-title">
                   <span class="mr-4">Roles</span> 
                   @can('haveaccess', 'role.create')
                   <a href="{{route('admin.roles.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Agregar </a>
                   @endcan                   
                </div>
            </div>
            <div class="card-body ">
                <table class="table table-striped table-bordered" id="tableRole">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acceso</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>                
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->slug}}</td>
                            <td>{{$role->description}}</td>
                            <td>{{$role['full-access']}}</td>
                            <td>
                                @can('haveaccess', 'role.show')
                                <a href="{{route('admin.roles.show', $role->id)}}" class="btn btn-outline-info"> <i class="far fa-eye"></i> </a> 
                                @endcan
                                @can('haveaccess', 'role.edit')
                                <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-outline-warning"> <i class="far fa-edit"></i> </a>
                                @endcan
                                @can('haveaccess', 'role.destroy')
                                <a href="{{route('admin.roles.destroy',$role->id)}}" class="btn btn-outline-danger"> <i class="far fa-times-circle"></i> </a>
                                @endcan
                                
                            </td>
                        </tr>
                            
                        @endforeach            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('js_page')
    <script src="{{asset('js/dash/jquery.dataTables.min.js')}}"></script> 
    <script>
        $(document).ready( function () {
            $('#tableRole').DataTable();
        } );
    </script>
@endsection
@endsection('content')