@extends('dashboard.index')
@section('formulario')
<div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulario {{$nombre}}</h6>
                                    
                                </div>
<div class="card-body">
<form method="POST" action="">
@csrf
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                         
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form> 
</div>

@endsection
