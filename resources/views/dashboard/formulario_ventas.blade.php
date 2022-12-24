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
                                      @foreach ($ventas as $venta)
                                      <tr>
                                           <td>{{$venta->Nombre}}</td>
                                           <td>{{$venta->Correo}}</td>
                                           <td>{{$venta->Telefono}}</td>
                                           <td>{{$venta->origen}}-{{$venta->destino}}</td>
                                           <td>{{$venta->dates}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
</div>

@endsection
