@extends('adminlte::page')

@section('title','Estrella del Plata')

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
    @endif

    <h1 style="padding:7px"><i class="fas fa-school"></i>&nbsp;&nbsp;Establecimientos</h1>
   
        <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.establecimientos.create') }}" class="btn btn-primary">Agregar Establecimiento</a>    
                </div> 
            @livewire('admin.establecimientos')
        </div>   
    

@stop

@section('css')

@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            
    <script>
        Livewire.on('deleteEstabl', establId =>{
            Swal.fire({
                title: 'Está seguro que desea eliminar el Establecimiento?',
                text: "No se puede revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Si. Eliminarlo',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {

                    Livewire.emit('delete', establId);

                    Swal.fire(
                    'Eliminado!',
                    'El estableciemiento ha sido eliminado.',
                    'success'
                    )
                }
            })  
        });
    </script>
@stop


