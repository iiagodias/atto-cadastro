@extends('layouts.control')

@section('content')

    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Lista de Agricultores
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('farmers.create')}}">
                            <i class="me-1" data-feather="plus"></i>
                            Cadastrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Razão Social</th>
                            <th>Nome Fantasia</th>
                            <th>CNPJ/CPF</th>
                            <th>Celular</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Razão Social</th>
                            <th>Nome Fantasia</th>
                            <th>CNPJ/CPF</th>
                            <th>Celular</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Atto Sementes LTDA</td>
                            <td>Atto Semente</td>
                            <td>000154544554-54</td>
                            <td>(91) 982619212</td>
                            <td>Augustinopolis</td>
                            <td>Tocantins</td>
                            <td>
                                <a class="btn btn-blue btn-icon" href="blog-management-edit-post.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar agricultor"><i data-feather="edit"></i></a>
                                <a class="btn btn-red btn-icon" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir agricultor"><i data-feather="trash-2" ></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
