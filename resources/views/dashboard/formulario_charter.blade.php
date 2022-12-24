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
                                            <th>Telefono</th>
                                            <th>Origen-Destino</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($charters as $charter)
                                        <tr>
                                           <td>{{$charter->Nombre}}</td>
                                           <td>{{$charter->Correo}}</td>
                                           <td>{{$charter->Telefono}}</td>
                                           <td>{{$charter->origen}}-{{$charter->destino}}</td>
                                           <td>{{$charter->dates}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
</div>

@endsection
