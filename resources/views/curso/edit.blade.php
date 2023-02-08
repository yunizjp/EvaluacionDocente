@extends('layouts.plantillabase')

@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">
            <h5 class="m-0"><i class="fa fa-user"></i>  Editar Curso</h5>
            </div>
            <div class="card-body">
			   <form action="/curso/{{$curso->id}}" method="POST">
                    @CSRF
                    @method('PUT')
					<div class="mb-3">
						<label for="" class="form-label">Código</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="codigo" name="codigo" type="text" class="form-control" value="{{$curso->codigo}}">
                        </div>
						
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Descripción</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$curso->descripcion}}">
                        </div>
					</div>   
					<a href="/curso" class="btn btn-secondary" tabindex="5"><i class="fa fa-angle-left"></i>  atras</a>
					<button type="submit" class="btn btn-primary" tabindex="4"><i class="fa fa-save"></i>  Guardar</button>
				</form>
            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection