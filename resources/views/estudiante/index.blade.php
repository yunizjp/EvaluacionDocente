@extends('layouts.plantillabase')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">                
            <h5 class="m-0"><i class="fas fa-users"></i>  Mostrar Estudiantes Registrados</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <a href="estudiante/create" class="btn btn-primary mb-3"><i class="fa regular fa-plus"></i> Crear Estudiante</a>
                    </div> -->
                    <div class="col-md-6">
                    <a href="estudiante/import" class="btn btn-primary mb-3"><i class="fa regular fa-plus"></i> Importar</a>
                    </div>
                </div>      
                   
     
                    <table id="example1" class="table table-bordered table-condensed table hover table-striped mt-2 responsive" style="width: 80%">
                        <thead class="bg-primary text-white"> 
                            <tr>
                                <th scope="col">Periodo</th>
                                <th scope="col">Carrera</th>
                                <th scope="col">Asignatura</th>
                                <th scope="col">Matricula</th>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre Completo</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Paralelo</th>
                                <th scope="col">Jornada</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>    
                        </thead>
                        <tbody> 
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                                <td>{{ $estudiante->periodo }}</td>
                                <td>{{ $estudiante->carrera }}</td>
                                <td>{{ $estudiante->asignatura }}</td>
                                <td>{{ $estudiante->num_matricula }}</td>
                                <td>{{ $estudiante->cedula }}</td>
                                <td>{{ $estudiante->nombre_completo }}</td>
                                <td>{{ $estudiante->sexo }}</td>
                                <td>{{ $estudiante->correo }}</td>
                                <td>{{ $estudiante->nivel }}</td>
                                <td>{{ $estudiante->paralelo }}</td>
                                <td>{{ $estudiante->jornada }}</td>
                                <td>{{ $estudiante->estado }}</td>
                                <td>
                                    <form action="{{route ('estudiante.destroy',$estudiante->id)}}" method="POST">
                                         <a href="/estudiante/{{$estudiante->id}}/edit" class="btn btn-info btn-xs"><i class="fa thing fa-pen"></i> Editar</a>
                                         @csrf
                                         @method('DELETE')
                                         <button class="btn btn-danger btn-xs swalDefaultSuccess" onclick="btnalerta()" type="submit" ><i class="fa thing fa-trash"></i> Borrar</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('vendor/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('vendor/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ asset('vendor/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{ asset('vendor/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


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
                    icon: 'warning',
                    title: 'Dato eliminado correctamente'
                })
                });    
           });
        </script>

        <script>
          $("#example1").DataTable({
            "lengthMenu": [[5,10,25,50,-1],[5,10,25,50,"Todos"]],
             "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');  
        </script>

    @endsection

@endsection
