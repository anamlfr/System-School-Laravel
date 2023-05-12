@extends('layouts.main', [
    'class' => '',
    'elementActive' => 'dashe'
])

@section('content')
@include('users.partials.header', [
        'title' => __('Bienvenid@ ') . auth()->user()->name,
        'description' => __('    '),
        'class' => 'col-lg-22'
    ]) 

    <div class="content">

<div class="container" >

            <td>
            
            <form action="{{ url('/personalAlumno') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                <label for="correoR" hidden="true">Correo R</label>
                <input hidden="true" class="form-control" type="text" name="correoR" value="{{ auth()->user()->email }}" id="correoR"><br>
                    </div>   
                <input type="submit" value="Mis datos" class="btn btn-primary">


                </form>
            </td>
            <td>
            
            <form action="{{ url('/contactosAlumno') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                <label for="correoR" hidden="true">Correo R</label>
                <input hidden="true" class="form-control" type="text" name="correoR" value="{{ auth()->user()->email }}" id="correoR"><br>
                    </div>   
                <input type="submit" value="Mis contactos" class="btn btn-primary">


                </form>
            </td>
            
           

            <form action="{{ mis_calificaciones }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                <label for="correoR" hidden="true">Correo R</label>
                <input hidden="true" class="form-control" type="text" name="correoR" value="{{ auth()->user()->email }}" id="correoR"><br>
                    </div>   
                <input type="submit" value="Mis Calificaciones" class="btn btn-primary">


                </form>
            </td>
            
</div>
@endsection