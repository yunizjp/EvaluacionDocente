@extends('layouts.plantillabase')

@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">
            <h5 class="m-0"><i class="fa fa-user"></i>  Editar Estudiante</h5>
            </div>
            <div class="card-body">
			   <form action="/estudiante/{{$estudiante->id}}" method="POST">
                    @CSRF
                    @method('PUT')
					<div class="mb-2">
						<label for="" class="form-label">Periodo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="codigo" name="codigo" type="text" class="form-control" value="{{$estudiante->periodo}}">
                        </div>						
					</div>
					<div class="mb-2">
						<label for="" class="form-label">Carrera</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->carrera}}">
                        </div>
					</div>   
                    <div class="mb-2">
						<label for="" class="form-label">Asignatura</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->asignatura}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Matricula #</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->num_matricula}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Cedula</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->cedula}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Nombre y Apellidos</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->nombre_completo}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Sexo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->sexo}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Correo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->correo}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Nivel</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->nivel}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Paralelo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->paralelo}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Jornada</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->jornada}}">
                        </div>
					</div> 
                    <div class="mb-2">
						<label for="" class="form-label">Estado</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$estudiante->estado}}">
                        </div>
					</div> 
					<a href="/estudiante" class="btn btn-secondary" tabindex="5"><i class="fa fa-angle-left"></i>  atras</a>
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