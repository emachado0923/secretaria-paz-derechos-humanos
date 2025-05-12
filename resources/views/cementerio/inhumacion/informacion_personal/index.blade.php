@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Cementerio Jardin Universal</h2>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <div class="alert alert-dark" role="alert">
                        <a href="#" class="btn btn-warning">
                            <i class="fas fa-user-plus me-2"></i> Ingresar nuevo Registro
                        </a>
                    </div>

                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Tipo de Inhumacion</th>
                            <th scope="col">Tipo de Cuerpo</th>
                            <th scope="col">Contrato</th>
                            <th scope="col">Certificado de Defuncion</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Nombre Padre</th>
                            <th scope="col">Nombre Madre</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <a href="#" class="btn btn-warning">
                                    <i class="fas fa-pen me-2"></i> Editar
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="fas fa-trash me-2"></i> Eliminar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>


                </table>

            </div>

        </div>
    @endsection
