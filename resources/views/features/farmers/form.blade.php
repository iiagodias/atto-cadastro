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
                        @if (Session::has('msg'))
                            <div class="alert alert-warning alert-solid" role="alert">{{Session::get('msg')}}</div>
                        @endif
                        @if(isset($farmer->id))
                            {!! Form::model($farmer ?? null, ['route' => ['farmers.update', $farmer->id]]) !!}
                            @method('put')
                        @else
                            @method('post')
                            {!! Form::model(null, ['route' => 'farmers.store']) !!}
                        @endif
                            <div class="mb-3">
                                <label for="corporate_reason">Razão social</label>
                                {!! Form::text('corporate_reason', null, ['class' => $errors->getBag('default')->has('corporate_reason') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Razão social', 'maxlength' => 255]) !!}
                                @error('corporate_reason')
                                    <div class="invalid-feedback">
                                        Preencha o campo Razão social
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="fantasy_name">Nome Fantasia</label>
                                {!! Form::text('fantasy_name', null, ['class' => $errors->getBag('default')->has('fantasy_name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nome Fantasia', 'maxlength' => 255]) !!}
                                @error('fantasy_name')
                                    <div class="invalid-feedback">
                                        Preencha o campo Nome Fantasia
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="cpf_cnpj">CNPJ/CPF</label>
                                {!! Form::text('cpf_cnpj', null, ['id' => 'cpfcnpj', 'class' => $errors->getBag('default')->has('cpf_cnpj') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '000.000.000-00', 'maxlength' => 255]) !!}
                                @error('cpf_cnpj')
                                    <div class="invalid-feedback">
                                        Preencha o campo CNPJ/CPF
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="cell_phone">Celular</label>
                                {!! Form::text('cell_phone', null, ['id' => 'cell_phone','class' => $errors->getBag('default')->has('cell_phone') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '(00) 00000-0000', 'maxlength' => 255]) !!}
                                @error('cell_phone')
                                    <div class="invalid-feedback">
                                        Preencha o campo Celular corretamente
                                    </div>
                            @enderror
                            </div>

                            <div class="row">
                                <div class="col-sm mb-3">
                                    <label for="city">Cidade</label>
                                    {!! Form::text('city', null, ['class' => $errors->getBag('default')->has('city') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Cidade', 'maxlength' => 255]) !!}
                                    @error('city')
                                        <div class="invalid-feedback">
                                            Preencha o campo Cidade
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm mb-3">
                                    <label for="state">Estado</label>
                                    {!! Form::text('state', null, ['class' => $errors->getBag('default')->has('state') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Estado', 'maxlength' => 255]) !!}
                                    @error('state')
                                        <div class="invalid-feedback">
                                            Preencha o campo Estado
                                        </div>
                                    @enderror
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
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    @section('scripts')
        <script>
            $(document).ready(function(){
                $('#cell_phone').mask('(00) 00000-0000');
            });

        </script>
    @endsection
@endsection
