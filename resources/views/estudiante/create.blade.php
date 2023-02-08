@extends('layouts.plantillabase')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">
            <h5 class="m-0"><i class="fa fa-user"></i>  Registrar Estudiante</h5>
            </div>
            <div class="card-body">
			   <form action="/estudiante" method="POST">
					@CSRF
					<div class="mb-3">
						<label for="" class="form-label">Periodo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" placeholder="Ingrese un periodo">
                        </div>						
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Carrera</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese una carrera">
                        </div>
					</div> 
                    <div class="mb-3">
						<label for="" class="form-label">Asignatura</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese una Asignatura">
                        </div>
					</div> 
                    <div class="mb-3">
						<label for="" class="form-label">N. Matricula</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese un # de matricula">
                        </div>
					</div> 
                    <div class="mb-3">
						<label for="" class="form-label">Cedula</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese la cedula">
                        </div>
					</div>
                    <div class="mb-3">
						<label for="" class="form-label">Nombre Completos</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese nombres y apellidos">
                        </div>
					</div>
                    <div class="mb-3">
						<label for="" class="form-label">Sexo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese su sexo">
                        </div>
					</div>    
                    <div class="mb-3">
						<label for="" class="form-label">Correo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese un correo valido">
                        </div>
					</div>      
                    <div class="mb-3">
						<label for="" class="form-label">Nivel</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese un Nivel">
                        </div>
					</div> 
                    <div class="mb-3">
						<label for="" class="form-label">Paralelo</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese un Paralelo">
                        </div>
					</div> 
                    <div class="mb-3">
						<label for="" class="form-label">Jornada</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese una jornada">
                        </div>
					</div>   
                    <div class="mb-3">
						<label for="" class="form-label">Estado</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese un estado de estudiante">
                        </div>
					</div>          
					<a href="/carrera" class="btn btn-secondary btn-xs" tabindex="5"><i class="fa fa-angle-left"></i>  atras</a>
					<button class="btn btn-primary swalDefaultSuccess btn-xs" tabindex="4" type="submit" ><i class="fa fa-save"></i>  Guardar</button>
				</form>
            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->

    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $(function() {
                const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 6000
                });

                $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Datos guardados correctamente'
                })
                });    
           });
        </script>

       <!--   <script>
            function btnalerta(){
                Swal.fire(
                'Dato Guardado',
                'El dato se guardo correctamente',
                'success'
                )
            }           
        </script> -->
    @endsection
@endsection