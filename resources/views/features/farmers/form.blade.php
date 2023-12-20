@extends('layouts.control')

@section('content')

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="user"></i></div>
                        @if(Route::is('farmers.create'))
                            Cadastrar
                        @else
                            Editar
                        @endif
                    </h1>
                    <div class="page-header-subtitle">
                        @if(Route::is('farmers.create'))
                            Preencha o formulário para cadastrar um novo agricultor.
                        @else
                            Verifique todos os dados do agricultor antes de editar.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-lg-9">
            <!-- Default Bootstrap Form Controls-->
            <div id="default">

                <div class="card mb-4">
                    <div class="card-header">Formulário</div>
                    <div class="card-body">
                        <form >
                            <div class="mb-3">
                                <label for="corporateReason">Razão social</label>
                                <input class="form-control" name="corporateReason" id="corporateReason" type="text" placeholder="Razão social">
                            </div>

                            <div class="mb-3">
                                <label for="fantasyName">Nome Fantasia</label>
                                <input class="form-control" name="fantasyName" id="fantasyName" type="text" placeholder="Nome fantasia">
                            </div>

                            <div class="mb-3">
                                <label for="numberSocial">CNPJ/CPF</label>
                                <input class="form-control" name="numberSocial" id="numberSocial" type="text" placeholder="000.000.000-00">
                            </div>

                            <div class="mb-3">
                                <label for="cellphone">Celular</label>
                                <input class="form-control" name="cellphone" id="cellphone" type="text" placeholder="(00) 00000-0000">
                            </div>

                            <div class="row">
                                <div class="col-sm mb-3">
                                    <label for="city">Cidade</label>
                                    <input class="form-control" name="city" id="city" type="text" placeholder="Cidade">
                                </div>

                                <div class="col-sm mb-3">
                                    <label for="state">Estado</label>
                                    <input class="form-control" name="state" id="state" type="text" placeholder="Estado">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary mt-6" type="submit">
                                    @if(Route::is('farmers.create'))
                                        Cadastrar
                                    @else
                                        Editar
                                    @endif
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
