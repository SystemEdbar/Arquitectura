<x-app-layout>
    <x-slot name="header">
        <h4 class="font-semibold text-xl text-gray-800 leading-tight">
            Bienvendio al Menu de Cajas
        </h4>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="py-20" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('includes.mensaje')
                                <div class="card card-outline card-success">
                                    <div class="card-header">
                                        <h4 class="font-semibold text-xl text-gray-800 leading-tight">
                                            Clasificación de Cajas
                                        </h4>
                                        <div class="card-tools">
                                        </div>
                                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="datable">
                            <thead class='table-dark' style="height: 50px">
                            <tr>
                                <th scope="col">Código Interno</th>
                                <th scope="col">Color de Caja</th>
                                <th scope="col">Cantidad</th>
                            </thead>
                            <tbody>
                            @foreach($cajas as $caja)
                                <tr @if($caja->caja_id == 1) class="table-primary" @else class="table-success" @endif>
                                    <td>{{$caja->caja_id}}</td>
                                    <td>{{$caja->caja_color}}</td>
                                    <td>{{$caja->caja_cantidad}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <script>
                            $(document).ready(function()
                            {
                                swal("Registro Guardado", "La Caja ha sido Actualizada", "success");
                                $('#datable').DataTable(
                                    {
                                        "language": {
                                            "decimal":        "",
                                            "emptyTable":     "No hay datos disponibles para la tabla",
                                            "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                                            "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                                            "infoFiltered":   "(filtrado de _MAX_ registros totales)",
                                            "infoPostFix":    "",
                                            "thousands":      ",",
                                            "lengthMenu":     "Mostrando _MENU_ registros por página",
                                            "loadingRecords": "Cargando...",
                                            "processing":     "Procesando...",
                                            "search":         "Búsqueda:",
                                            "zeroRecords":    "No se encontraron registros que cumplan el criterio",
                                            "paginate": {
                                                "first":      "Primero",
                                                "last":       "Último",
                                                "next":       "Siguiente",
                                                "previous":   "Previo"
                                            },
                                            "aria": {
                                                "sortAscending":  ": Activar ordenamiento ascendente",
                                                "sortDescending": ": Activar ordenamiento descendente"
                                            }
                                        }
                                    }
                                );
                            } );

                        </script>
                    </div>
                </div>
                                </div>


            </div>
        </div>
    </div>
</x-app-layout>
