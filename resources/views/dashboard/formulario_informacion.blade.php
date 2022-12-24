@extends('dashboard.index')
@section('formulario')
<div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Lista {{$nombre}}</h6>
                                    
                                </div>
<div class="card-body">
<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Asunto</th>
                                            <th>Mensaje</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($informacion as $info)
                                      <tr>
                                           <td>{{$info->Nombre}}</td>
                                           <td>{{$info->Email}}</td>
                                           <td>{{$info->Asunto}}</td>
                                           <td>{{$info->Mensaje}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
</div>

@endsection
