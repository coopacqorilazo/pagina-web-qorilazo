@extends('admin.layouts.dashboard')
@section('css_page')
<link rel="stylesheet" href="{{asset('css/dash/jquery.dataTables.min.css')}}">
@endsection
@section('content')
<h3 class="dash-title">Normativas internas</h3>
<div class="row ">
    <div class="col-sm-12">
        <div class="easion-card">
            <div class="card-header">
                <div class="easion-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="easion-card-title">
                    <span class="mr-4">Normativas</span>
                    @can('haveaccess', 'normative.create')
                    <a href="{{route('admin.normative.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i>
                        Agregar </a>
                    @endcan
                    
                </div>                
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="tableNormative">
                    <thead>
                        <tr style="font-size: .8em; text-align:center">
                            <th scope="col">Id</th>
                            <th scope="col">Numero de norma</th>
                            <th scope="col">Version</th>
                            <th scope="col">Descripcion de la norma</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha publicacion</th>
                            <th scope="col">Fecha emision</th>                            
                            <th scope="col">PDF</th>
                            <th scope="col">Anex.</th>
                            <th scope="col">Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($normatives as $normativa)
                        <tr style="font-size: .7em; text-align:center">
                            <td>{{$normativa->id}}</td>
                            <td>{{$normativa->numero}}</td>
                            <td>{{$normativa->version}}</td>
                            <td>{{$normativa->descripcion}}</td>
                            <td>{{$normativa->tipo}}</td>
                            <td>{{$normativa->estado}}</td>
                            <td>{{$normativa->fechapublicacion}}</td>
                            <td>{{$normativa->fechaemision}}</td>
                            <td>                                
                                <a href="{{route('admin.normative.viewpdf', $normativa->id)}}" class="text-danger text-decoration-none" style="font-size: 1.8em; text-align:center"> <i class="far fa-file-pdf"></i> </a>
                            </td>                            
                            <td style="font-size: 1.5em; text-align:center">
                                <a href="" class="text-primary text-decoration-none"> <i class="fas fa-cubes"></i> </a>
                            </td>
                            <td style="font-size: 1.5em; text-align:center">
                                @can('haveaccess', 'normative.show')
                                <a href="{{route('admin.normative.show', $normativa->id)}}" class="text-primary text-decoration-none"> <i class="far fa-eye"></i> </a>
                                @endcan
                                @can('haveaccess', 'normative.edit')
                                <a href="{{route('admin.normative.edit',$normativa->id)}}" class="text-warning text-decoration-none"> <i class="far fa-edit"></i> </a>
                                @endcan
                                @can('haveaccess', 'normative.destroy')
                                <a href="{{route('admin.normative.destroy',$normativa->id)}}" class="text-danger text-decoration-none"> <i class="far fa-times-circle"></i> </a>
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
    $(document).ready(function () {
        $('#tableNormative').DataTable();
    });
</script>
@endsection
@endsection('content')