@extends('layouts.app')
@section('page_title', 'Candidato')
@section('content')


<div class="container-fluid">
    <h3 class="text-dark mb-4">Candidato</h3>
    <div class="row mb-3">
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4"
                            src="assets/img/dogs/image2.jpeg" width="160" height="160">
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Atualizar foto</button>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-primary fw-bold m-0">Experiências profissionais</h6>
                    </div>
                    <div class="card-body">
                        
                        <ol class="list-group list-group-numbered">
                            @foreach((array) Session::get('experiencias') as $e )
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $e['empresa'] }}</div>
                                    {{ $e['cargo'] }}
                                </div>
                                <span class="badge bg-primary rounded-pill"></span>
                            </li>
                           @endforeach
                        </ol>
                       

                    </div>
                </div>
            </div>

            <div class="col-md-8">
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
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last
                                    month
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
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last
                                    month
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


                                @if(!empty($candidato))
                                <form action="{{ route('candidato.atualizar', $candidato->id) }}" method="POST">
                                    @else
                                    <form action="{{ route('candidato.cadastro') }}" method="POST">
                                        @endif

                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    
                                                    <label class="form-label" for="login"><strong>Login</strong></label>
                                                    <input class="form-control" type="text" id="login"
                                                        value="{{ $candidato->login ?? session()->get('login') }}" name="login">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="senha"><strong>Senha</strong></label>
                                                    <input class="form-control" type="password" id="email"
                                                        value="{{ $candidato->senha ?? '' }}" name="senha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nome"><strong>Nome
                                                        </strong></label>
                                                    <input class="form-control" type="text" id="nome"
                                                        value="{{ $candidato->nome ?? '' }}" name="nome">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="cpf"><strong>CPF</strong></label>
                                                    <input class="form-control" type="text" id="cpf"
                                                        value="{{ $candidato->cpf ?? '' }}" name="cpf">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="rg"><strong>RG
                                                        </strong></label>
                                                    <input class="form-control" type="text" id="rg"
                                                        value="{{ $candidato->rg ?? '' }}" name="rg">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="orgaoExpeditor"><strong>Órgão
                                                            expeditor</strong></label>
                                                    <input class="form-control" type="text" id="orgaoExpeditor"
                                                        value="{{ $candidato->orgaoExpeditor ?? '' }}"
                                                        name="orgaoExpeditor">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-label" for="ufExpedicao"><strong>UF</strong></label>
                                                <select class="form-select" id="ufExpedicao"
                                                    value="{{ $candidato->ufExpedicao ?? '' }}" name="ufExpedicao">

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
                                                    <label class="form-label" for="dataExpedicao"><strong>Data expedição
                                                        </strong></label>
                                                    <input class="form-control" type="text" id="dataNascimento"
                                                        value="{{ $candidato->dataExpedicao ?? '' }}"
                                                        name="dataExpedicao">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="dataNascimento"><strong>Data
                                                            nascimento
                                                        </strong></label>
                                                    <input class="form-control" type="text" id="dataNascimento"
                                                        value="{{ $candidato->dataNascimento ?? '' }}"
                                                        name="dataNascimento">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="sexo"><strong>Sexo
                                                        </strong></label>
                                                    <input class="form-control" type="text" id="sexo"
                                                        value="{{ $candidato->sexo ?? '' }}" name="sexo">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="estadoCivil"><strong>Estado
                                                            civil</strong></label>
                                                    <input class="form-control" type="text" id="estadoCivil"
                                                        value="{{ $candidato->estadoCivil ?? '' }}" name="estadoCivil">
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
                                                value="{{ $candidato->endereco->cep ?? '' }}" name="cep">
                                        </div>
                                    </div>


                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="logradouro"><strong>Logradouro</strong></label>
                                    <input class="form-control" type="text" id="logradouro"
                                        value="{{ $candidato->endereco->logradouro ?? '' }}" name="logradouro">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="cidade"><strong>Cidade</strong></label>
                                            <input class="form-control" type="text" id="cidade"
                                                value="{{ $candidato->endereco->cidade ?? '' }}" name="cidade">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="bairro"><strong>Bairro</strong></label>
                                            <input class="form-control" type="text" id="bairro"
                                                value="{{ $candidato->endereco->bairro ?? '' }}" name="bairro">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="uf"><strong>UF</strong></label>
                                        <select class="form-select" id="uf" value="{{ $candidato->endereco->uf ?? '' }}"
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
                                                value="{{ $candidato->endereco->email ?? '' }}" name="email">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="fax"><strong>Telefone
                                                    residencial</strong></label>
                                            <input class="form-control" type="text" id="telefoneResidencial"
                                                value="{{ $candidato->endereco->telefoneResidencial ?? ''}}"
                                                name="telefoneResidencial">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="telefoneComercial"><strong>Telefone
                                                    Comercial</strong></label>
                                            <input class="form-control" type="text" id="telefoneComercial"
                                                value="{{ $candidato->endereco->telefoneComercial ?? '' }}"
                                                name="telefoneComercial">
                                        </div>
                                    </div>


                                </div>

                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow col-md-12">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Experiências profissionais</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
              
                        <form action="{{ route('session.set') }}" method="GET">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-4">
                                        <label class="form-label" for="empresa"><strong>Empresa</strong></label>
                                        <input class="form-control" type="text" id="empresa" name="empresa">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-4">
                                        <label class="form-label" for="cargo"><strong>Cargo</strong></label>
                                        <input class="form-control" type="text" id="cargo" name="cargo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-label" for="formaContratacao"><strong>Forma de
                                            contratação</strong></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="formaContratacao">
                                        <option value="clt">CLT</option>
                                        <option value="pj">PJ</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="dataInicio"><strong>Data início
                                            </strong></label>
                                        <input class="form-control" type="text" id="dataInicio" name="dataInicio">
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="dataConclusao"><strong>Data conclusão
                                            </strong></label>
                                        <input class="form-control" type="text" id="dataConclusao" name="dataConclusao">
                                    </div>

                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm" type="submit">Adicionar experiência</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    @endsection