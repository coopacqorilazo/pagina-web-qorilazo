
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
                <span class="mr-4">Edición Usuario: {{$user->name}}</span>
                </div>
            </div>
            <div class="card-body">
                @include('admin.custom.message')
                <form method="POST" action="{{route('admin.users.update',$user->id)}}" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group col-md-6">                
                        <input type="hidden" name="idUser" class="form-control" id="inputEmail4">
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombres</label>
                        <input type="text" name="name" class="form-control" id="" value="{{old('name',$user->name)}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Apellidos</label>
                            <input type="text" name="lastname" class="form-control" id="" value="{{old('lastname',$user->lastname)}}">
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Email</label>
                            <input type="email" name="email"  class="form-control" id="" value="{{old('email',$user->email)}}">
                        </div> 
                        <div class="form-group col-md-6">  
                            <label for="">Rol</label>                          
                            <select  class="form-control"  name="roles" id="roles">
                              @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                  @isset($user->roles[0]->name)
                                    @if($role->name ==  $user->roles[0]->name)
                                      selected
                                    @endif
                                  @endisset                          
                                
                                >{{ $role->name }}</option>
                              @endforeach
                            </select>
                          </div>                                             
                    </div> 
                                        
                    <button type="submit" class="btn btn-primary "><i class="far fa-save"></i> Guardar</button>
                    <a href="{{route('admin.users.index')}}" class="btn btn-danger "><i class="fas fa-arrow-circle-left"></i> Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')