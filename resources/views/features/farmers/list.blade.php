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
                @if (Session::has('msg'))
                    <div class="alert alert-success alert-solid" role="alert">{{Session::get('msg')}}</div>
                @endif
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

                        @foreach($farmers as $farmer)
                            <tr>
                                <td>{{$farmer->corporate_reason}}</td>
                                <td>{{$farmer->fantasy_name}}</td>
                                <td>{{$farmer->cpf_cnpj}}</td>
                                <td>{{$farmer->cell_phone}}</td>
                                <td>{{$farmer->city}}</td>
                                <td>{{$farmer->state}}</td>
                                <td>
                                    <x-modal-confirmation :farmer="$farmer"/>
                                    <a class="btn btn-blue btn-icon" href="{{ route('farmers.edit', ['id' => $farmer->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar agricultor"><i data-feather="edit"></i></a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$farmer->id}}" class="btn btn-red btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir agricultor"><i data-feather="trash-2" ></i></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
