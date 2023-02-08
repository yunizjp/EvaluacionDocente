@extends('layouts.plantillabase')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">
            <h5 class="m-0"><i class="fas fa-users"></i>  Mostrar Carreras Registradas</h5>
            </div>
            <div class="card-body">
                    <a href="carrera/create" class="btn btn-primary mb-3"><i class="fa regular fa-plus"></i> Crear Carrera</a>
                    <table id="carrera" class="table table-bordered table-condensed table hover table-striped mt-2 responsive">
                        <thead class="bg-primary text-white"> 
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Código</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>    
                        </thead>
                        <tbody> 
                            @foreach ($carreras as $carrera)
                            <tr>
                                <td>{{ $carrera->id }}</td>
                                <td>{{ $carrera->codigo }}</td>
                                <td>{{ $carrera->descripcion }}</td>
                                <td>
                                    <form action="{{route ('carrera.destroy',$carrera->id)}}" method="POST">
                                         <a href="/carrera/{{$carrera->id}}/edit" class="btn btn-info btn-xs"><i class="fa thing fa-pen"></i> Editar</a>
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

      <!--   <script>
            function btnalerta(){
                Swal.fire(
                'Dato eliminado',
                'La eliminacion se realizo correctamente',
                'success'
                )
            }           
        </script> -->

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
        $(document).ready( function () {
            $('#carrera').DataTable({
                "lengthMenu": [[5,10,25,50,-1],[5,10,25,50,"Todos"]]
            });
            } );
        </script>
    @endsection

@endsection
