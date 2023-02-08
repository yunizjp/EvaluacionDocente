@extends('layouts.plantillabase')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">
            <h5 class="m-0"><i class="fa fa-user"></i>  Registrar Paralelos</h5>
            </div>
            <div class="card-body">
			   <form action="/paralelo" method="POST">
					@CSRF
					<div class="mb-3">
						<label for="" class="form-label">Código</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" placeholder="Ingrese un codigo de Paralelo">
                        </div>
						
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Descripción</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" placeholder="Ingrese el nombre del Paralelo">
                        </div>
					</div>   
					<a href="/paralelo" class="btn btn-secondary btn-xs" tabindex="5"><i class="fa fa-angle-left"></i>  atras</a>
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