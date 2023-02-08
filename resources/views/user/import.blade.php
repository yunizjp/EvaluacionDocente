@extends('layouts.plantillabase')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('contenido')

<div class="container-fluid">
    <div class="row-6"> <!-- ampliar -->
        <div class="card card-info"> <!-- card card-primary card-outline -->
            <div class="card-header">                
                 <h5 class="m-0"><i class="fas fa-file-import"></i>  Importar informacion a la base de usuarios</h5>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                     <form action="{{route('/user/importdata')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="documento" accept=".xls, .xlsx">
                            <button type="submit" class="btn btn-outline-info " ><i class="fas fa-file-import"></i>  Importar Excel</button>
                    </form>  
                </div>                 
            </div>
  
             
        </div>
     </div>
</div>

@endsection
