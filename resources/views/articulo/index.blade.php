@extends('layouts.plantillabase')
@section('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection
@section('contenido')
    <a href="articulos/create" class="btn btn-primary mb-4">Crear</a>
    <table id="articulos" class="table table-dark table-striped mt-5 shadow-lg" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>Id</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->codigo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->precio }}</td>
                    <td>
											<form action="{{route ('articulos.destroy',$articulo->id)}}" method="POST">
												@csrf
												@method('DELETE')
                        <a class="btn btn-info" href="articulos/{{$articulo->id}}/edit">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
											</form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function () {
    $('#articulos').DataTable({
			"lengthMenu": [[5,10,20,-1],[5,10,50,"all"]],
			language: {
				url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
			}
		});
});
</script>

@endsection
