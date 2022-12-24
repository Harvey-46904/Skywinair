@extends('dashboard.index')
@section('formulario')
<div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Lista de {{$nombre}}</h6>
                                    
                                </div>
                             

<div class="card-body">
  <div class="row justify-content-end py-2">
    <div class="col-md-2 ">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
      Agregar Destino
      </button>
    </div>
  </div>

<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Reseña</th>
                                            <th>Vista</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($destinos as $destino)
                                        <tr>
                                            <td>{{$destino->Ciudad}}</td>
                                            <td>{{$destino->Resena}}</td>
                                            <td>
                                            <img src="{{ url('/storage/destinos/', $destino->Imagen) }}"
                                                class=" img-thumbnail" width="100px" height="100px">
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-warning"> 
                                              <i class='far fa-address-book'></i>
                              </button>
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-danger"> 
                                              <i class='fab fa-buffer'></i>
                              </button>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                   
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario {{$nombre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{route('Destinos_post')}}" enctype="multipart/form-data">
@csrf
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Nombre Destino</label>
                                          <input type="text" class="form-control" name="Ciudad" id="Ciudad" aria-describedby="emailHelp" placeholder="">
                                         
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Reseña</label>
                                          <input type="text" class="form-control" name="Resena" id="Resena" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <input type="file" class="form-control" name="Imagen" id="Imagen"
                                          aria-describedby="inputGroupFileAddon01">
                                        </div>
                                        <button type="submit" class="btn btn-primary text-center">Guardar Destino</button>
                                    </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
@endsection
