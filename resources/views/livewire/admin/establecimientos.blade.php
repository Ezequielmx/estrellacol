<div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CUE</th>
                    <th>Nombre</th>
                    <th>Domicilio</th>
                    <th>Cod Área</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Provincia</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Sector</th>
                    <th>Ámbito</th>
                    <th>Tipo</th>
                    <th>Niveles</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($establecimientos as $establ)
                    <tr>
                        <td>{{ $establ->cue }}</td>
                        <td>{{ $establ->nombre }}</td>
                        <td>{{ $establ->domicilio }}</td>
                        <td>{{ $establ->cod_area }}</td>
                        <td>{{ $establ->tel }}</td>
                        <td>{{ $establ->email }}</td>
                        <td>{{ $establ->prov }}</td>
                        <td>{{ $establ->depto }}</td>
                        <td>{{ $establ->ciudad }}</td>
                        <td>{{ $establ->sector }}</td>
                        <td>{{ $establ->ambito }}</td>
                        <td>{{ $establ->tipo }}</td>
                        <td>{{ $establ->niveles }}</td>


                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.establecimientos.edit', $establ) }}">Editar</a>
                            </td>

                            <td width="10px">
                                <a wire:click="$emit('deleteEstabl', {{ $establ->id }})" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $establecimientos->links() }}
    </div>

</div>