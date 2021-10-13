@extends('admin.layouts.dashboard')
@section('css_page')
<link rel="stylesheet" href="{{asset('css/dash/jquery.dataTables.min.css')}}">
@endsection
@section('content')
<h3 class="dash-title">Usuarios</h3>
<div class="row">
    <div class="col-xl-12">
        <div class="easion-card">
            <div class="card-header">
                <div class="easion-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="easion-card-title">
                   <span class="mr-4">Usuarios</span> 
                   @can('haveaccess', 'user.create')
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Agregar </a>
                   @endcan                   
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover" id="tableUser">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol(s)</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>                              
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td>                                
                                @isset( $user->roles[0]->name )
                                <span class="badge badge-pill badge-success">
                                    {{ $user->roles[0]->name}}
                                </span>  
                                @endisset  
                                                            
                            </td>
                            <td class="d-flex">
                                @can('haveaccess','user.show')
                                    <a href="{{route('admin.users.show', $user->id)}}" class="btn btn-outline-info ml-2"> <i class="far fa-eye"></i> </a>
                                @endcan
                                @can('haveaccess','user.edit')
                                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-outline-warning ml-2"> <i class="far fa-edit"></i> </a>
                                @endcan
                                @can('haveaccess','user.destroy')
                                  <form action="{{ route('admin.users.destroy',$user->id)}}" method="POST" class="ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger"> <i class="far fa-times-circle"></i></button>
                                  </form>
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
            $('#tableUser').DataTable();
        } );
    </script>
@endsection

@endsection('content')