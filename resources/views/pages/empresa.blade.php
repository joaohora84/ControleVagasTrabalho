@extends('layouts.app')
@section('page_title', 'candidato')
@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Empresa</h3>
    <div class="row mb-3">
        
        <div class="col-lg-8">
            <div class="row mb-3 d-none">
                <div class="col">
                    <div class="card textwhite bg-primary text-white shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card textwhite bg-success text-white shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Dados</p>
                        </div>
                        <div class="card-body">


                            @if(!empty($empresa))
                            <form action="{{ route('empresa.atualizar', $empresa->id) }}" method="POST">
                                @else
                                <form action="{{ route('empresa.cadastro') }}" method="POST">
                                    @endif

                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="login"><strong>Login</strong></label>
                                                <input class="form-control" type="text" id="login"
                                                    value="{{ $empresa->login ?? '' }}" name="login">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="senha"><strong>Senha</strong></label>
                                                <input class="form-control" type="password" id="email"
                                                    value="{{ $empresa->senha ?? '' }}" name="senha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="razaoSocial"><strong>Razão
                                                        Social</strong></label>
                                                <input class="form-control" type="text" id="razaoSocial"
                                                    value="{{ $empresa->razaoSocial ?? '' }}" name="razaoSocial">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="cnpj"><strong>CNPJ</strong></label>
                                                <input class="form-control" type="text" id="cnpj"
                                                    value="{{ $empresa->cnpj ?? '' }}" name="cnpj">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="areaAtuacao"><strong>Área de
                                                        atuação</strong></label>
                                                <input class="form-control" type="text" id="areaAtuacao"
                                                    value="{{ $empresa->areaAtuacao ?? '' }}" name="areaAtuacao">
                                            </div>
                                        </div>

                                    </div>


                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Endereço</p>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <label class="form-label" for="tipo"><strong>Tipo</strong></label>
                                    <select class="form-select" aria-label="Default select example" name="tipo">
                                        <option value="urbano">Urbano</option>
                                        <option value="rural">Rural</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="cep"><strong>CEP</strong></label>
                                        <input class="form-control" type="text" id="cep"
                                            value="{{ $empresa->endereco->cep ?? '' }}" name="cep">
                                    </div>
                                </div>


                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="logradouro"><strong>Logradouro</strong></label>
                                <input class="form-control" type="text" id="logradouro"
                                    value="{{ $empresa->endereco->logradouro ?? '' }}" name="logradouro">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="cidade"><strong>Cidade</strong></label>
                                        <input class="form-control" type="text" id="cidade"
                                            value="{{ $empresa->endereco->cidade ?? '' }}" name="cidade">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="bairro"><strong>Bairro</strong></label>
                                        <input class="form-control" type="text" id="bairro"
                                            value="{{ $empresa->endereco->bairro ?? '' }}" name="bairro">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-label" for="uf"><strong>UF</strong></label>
                                    <select class="form-select" id="uf" value="{{ $empresa->endereco->uf ?? '' }}"
                                        name="uf">

                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="email"><strong>Email</strong></label>
                                        <input class="form-control" type="email" id="email"
                                            value="{{ $empresa->endereco->email ?? '' }}" name="email">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="telefoneComercial"><strong>Telefone
                                                Comercial</strong></label>
                                        <input class="form-control" type="text" id="telefoneComercial"
                                            value="{{ $empresa->endereco->telefoneComercial ?? '' }}"
                                            name="telefoneComercial">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="fax"><strong>Fax</strong></label>
                                        <input class="form-control" type="text" id="fax"
                                            value="{{ $empresa->endereco->fax ?? ''}}" name="fax">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Salvar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>



@endsection