@extends('layouts.app')
@section('page_title', 'Candidato')
@section('content')


<div class="container-fluid">
    <h3 class="text-dark mb-4">Candidato</h3>
    <div class="row mb-3">



        @if(!empty($candidato))
        <form action="{{ route('candidato.atualizar', $candidato->id) }}" method="POST" />
        @else
        <form action="{{ route('candidato.cadastro' ) }}" method="POST">
            @endif

            @csrf

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
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                    last
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
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since
                                    last
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

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">

                                            <label class="form-label" for="login"><strong>Login</strong></label>
                                            <input class="form-control" type="text" id="login"
                                                value="{{ $candidato->login ?? session()->get('candidato')['login'] }}"
                                                name="login">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="senha"><strong>Senha</strong></label>
                                            <input class="form-control" type="password" id="senha"
                                                value="{{ $candidato->senha ?? session()->get('candidato')['senha'] }}"
                                                name="senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nome"><strong>Nome
                                                </strong></label>
                                            <input class="form-control" type="text" id="nome"
                                                value="{{ $candidato->nome ?? session()->get('candidato')['nome'] }}"
                                                name="nome">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="cpf"><strong>CPF</strong></label>
                                            <input class="form-control" type="text" id="cpf"
                                                value="{{ $candidato->cpf ?? session()->get('candidato')['cpf'] }}"
                                                name="cpf">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="rg"><strong>RG
                                                </strong></label>
                                            <input class="form-control" type="text" id="rg"
                                                value="{{ $candidato->rg ?? session()->get('candidato')['rg'] }}"
                                                name="rg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="orgaoExpeditor"><strong>Órgão
                                                    expeditor</strong></label>
                                            <input class="form-control" type="text" id="orgaoExpeditor"
                                                value="{{ $candidato->orgaoExpeditor ?? session()->get('candidato')['orgaoExpeditor'] }}"
                                                name="orgaoExpeditor">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="ufExpedicao"><strong>UF</strong></label>
                                            <select class="form-select" id="ufExpedicao" name="ufExpedicao"
                                                value="{{ $candidato->ufExpedicao ?? session()->get('candidato')['ufExpedicao'] }}">

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
                                    </div>
                                    <div class="col">

                                        <label class="form-label" for="dataExpedicao"><strong>Data
                                                expedição</strong></label>
                                        <div class='input-group data' id='dataExpedicao'>

                                            <input type='text'
                                                value="{{ $candidato->dataExpedicao ?? session()->get('candidato')['dataExpedicao'] }}"
                                                class="form-control" name="dataExpedicao" id="dataExpedicao" />
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="dataNascimento"><strong>Data
                                                nascimento</strong></label>
                                        <div class='input-group data' id='dataNascimento'>

                                            <input type='text'
                                                value="{{ $candidato->dataExpedicao ?? session()->get('candidato')['dataNascimento'] }}"
                                                class="form-control" name="dataNascimento" id="dataNascimento" />
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="sexo"><strong>Sexo
                                                </strong></label>
                                            <input class="form-control" type="text" id="sexo"
                                                value="{{ $candidato->sexo ?? session()->get('candidato')['sexo'] }}"
                                                name="sexo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="estadoCivil"><strong>Estado
                                                    civil</strong></label>
                                            <input class="form-control" type="text" id="estadoCivil"
                                                value="{{ $candidato->estadoCivil ?? session()->get('candidato')['estadoCivil'] }}"
                                                name="estadoCivil">
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
                                        <select class="form-select" aria-label="Default select example"
                                            value="{{ $candidato->endereco->tipo ?? session()->get('endereco')['tipo'] }}"
                                            id="tipo" name="tipo">
                                            <option value="urbano">Urbano</option>
                                            <option value="rural">Rural</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="cep"><strong>CEP</strong></label>
                                            <input class="form-control" type="text" id="cep"
                                                value="{{ $candidato->endereco->cep ?? session()->get('endereco')['cep'] }}"
                                                name="cep">
                                        </div>
                                    </div>


                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="logradouro"><strong>Logradouro</strong></label>
                                    <input class="form-control" type="text" id="logradouro"
                                        value="{{ $candidato->endereco->logradouro ?? session()->get('endereco')['logradouro'] }}"
                                        name="logradouro">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="cidade"><strong>Cidade</strong></label>
                                            <input class="form-control" type="text" id="cidade"
                                                value="{{ $candidato->endereco->cidade ?? session()->get('endereco')['cidade'] }}"
                                                name="cidade">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="bairro"><strong>Bairro</strong></label>
                                            <input class="form-control" type="text" id="bairro"
                                                value="{{ $candidato->endereco->bairro ?? session()->get('endereco')['bairro'] }}"
                                                name="bairro">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="uf"><strong>UF</strong></label>
                                        <select class="form-select" id="uf" name="uf"
                                            @value="{{ $candidato->endereco->uf ?? session()->get('endereco')['uf'] }}"
                                            >

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
                                                value="{{ $candidato->endereco->email ?? session()->get('endereco')['email'] }}"
                                                name="email">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="fax"><strong>Telefone
                                                    residencial</strong></label>
                                            <input class="form-control" type="text" id="telefoneResidencial"
                                                value="{{ $candidato->endereco->telefoneResidencial ?? session()->get('endereco')['telefoneResidencial'] }}"
                                                name="telefoneResidencial">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="telefoneComercial"><strong>Telefone
                                                    Comercial</strong></label>
                                            <input class="form-control" type="text" id="telefoneComercial"
                                                value="{{ $candidato->endereco->telefoneComercial ?? session()->get('endereco')['telefoneComercial'] }}"
                                                name="telefoneComercial">
                                        </div>
                                    </div>


                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sm" value="salvar" name="submit"
                                        type="submit">Salvar</button>
                                    <button class="btn btn-danger btn-sm" value="limpar" name="reset"
                                        type="reset">Limpar</button>

                                </div>

                            </div>
                        </div>

                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Experiências profissionais</p>
                            </div>
                            <div class="card-body">

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
                                        <label class="form-label" for="dataNascimento"><strong>Data
                                                início</strong></label>
                                        <div class='input-group data' id='dataInicio'>

                                            <input type='text' class="form-control" name="dataInicio" />
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="dataConclusao"><strong>Data
                                                conclusao</strong></label>
                                        <div class='input-group data' id='dataConclusao'>

                                            <input type='text' class="form-control" name="dataConclusao" />
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sm" value="add_experiencia" name="submit"
                                        type="submit">Adicionar experiência</button>
                                </div>

                                <ol class="list-group list-group-numbered">
            @foreach(((array) Session::get('experiencias')) ?? ($candidato->experienciaProfissional) as $e)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                        {{ $e['empresa'] ?? $e->empresa }}
                    </div>
                    {{ $e['cargo'] ?? $e->cargo}}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            @endforeach
        </ol>
        </form>


        

    </div>

</div>
</div>
</div>


</div>





<!--
<script>

    var login = document.getElementById("login");
    var senha = document.getElementById("senha");
    var nome = document.getElementById("nome");
    var cpf = document.getElementById("cpf");
    var rg = document.getElementById("rg");
    var orgaoExpeditor = document.getElementById("orgaoExpeditor");
    var ufExpedicao = document.getElementById("ufExpedicao");
    var dataExpedicao = document.getElementById("dataExpedicao");
    var dataNascimento = document.getElementById("dataNascimento");
    var sexo = document.getElementById("sexo");
    var estadoCivil = document.getElementById("estadoCivil");

    var tipo = document.getElementById("tipo");
    var cep = document.getElementById("cep");
    var logradouro = document.getElementById("logradouro");
    var cidade = document.getElementById("cidade");
    var bairro = document.getElementById("bairro");
    var uf = document.getElementById("uf");
    var email = document.getElementById("email");
    var telefoneComercial = document.getElementById("telefoneComercial");
    var telefoneResidencial = document.getElementById("telefonResidencial");


    if(sessionStorage.getItem("login")) {
        login.value = sessionStorage.getItem("login");
        
    }

    if(sessionStorage.getItem("senha")) {
        senha.value = sessionStorage.getItem("senha");
        
    }
    if(sessionStorage.getItem("nome")) {
        nome.value = sessionStorage.getItem("nome");
        
    }
    if(sessionStorage.getItem("cpf")) {
        cpf.value = sessionStorage.getItem("cpf");
        
    }
    if(sessionStorage.getItem("rg")) {
        rg.value = sessionStorage.getItem("rg");
        
    }

    if(sessionStorage.getItem("orgaoExpeditor")) {
        orgaoExpeditor.value = sessionStorage.getItem("orgaoExpeditor");
        
    }

    if(sessionStorage.getItem("ufExpedicao")) {
        ufExpedicao.value = sessionStorage.getItem("ufExpedicao");
        
    }

    if(sessionStorage.getItem("dataExpedicao")) {
        dataExpedicao.value = sessionStorage.getItem("dataExpedicao");
        
    }

    if(sessionStorage.getItem("dataNascimento")) {
        dataNascimento.value = sessionStorage.getItem("dataNascimento");
        
    }

    if(sessionStorage.getItem("sexo")) {
        sexo.value = sessionStorage.getItem("sexo");
        
    }

    if(sessionStorage.getItem("estadoCivil")) {
        estadoCivil.value = sessionStorage.getItem("estadoCivil");
        
    }

    if(sessionStorage.getItem("estadoCivil")) {
        estadoCivil.value = sessionStorage.getItem("estadoCivil");
        
    }

    if(sessionStorage.getItem("tipo")) {
        tipo.value = sessionStorage.getItem("tipo");
        
    }

    if(sessionStorage.getItem("logradouro")) {

        logradouro.value = sessionStorage.getItem("logradouro");
        
    }

    if(sessionStorage.getItem("bairro")) {
        bairro.value = sessionStorage.getItem("bairro");
        
    }

    if(sessionStorage.getItem("uf")) {
        uf.value = sessionStorage.getItem("uf");
        
    }

    if(sessionStorage.getItem("cidade")) {
        cidade.value = sessionStorage.getItem("cidade");
        
    }

    if(sessionStorage.getItem("cep")) {
        cep.value = sessionStorage.getItem("cep");
        
    }

    if(sessionStorage.getItem("email")) {
        email.value = sessionStorage.getItem("email");
        
    }

    if(sessionStorage.getItem("telefoneResidencial")) {

        telefoneResidencial.value = sessionStorage.getItem("telefoneResidencial");
        
    }

    if(sessionStorage.getItem("telefoneComercial")) {
        telefoneComercial.value = sessionStorage.getItem("telefoneComercial");
        
    }

    login.addEventListener("change", function() {
        sessionStorage.setItem("login", login.value);
        
    });

    senha.addEventListener("change", function() {
        sessionStorage.setItem("senha", senha.value);
        
    });

    nome.addEventListener("change", function() {
        sessionStorage.setItem("nome", nome.value);
        
    });

    rg.addEventListener("change", function() {
        sessionStorage.setItem("rg", rg.value);
        
    });

    orgaoExpeditor.addEventListener("change", function() {
        sessionStorage.setItem("orgaoExpeditor", orgaoExpeditor.value);
        
    });

    ufExpedicao.addEventListener("change", function() {
        sessionStorage.setItem("ufExpedicao", ufExpedicao.value);
        
    });

    dataExpedicao.addEventListener("change", function() {
        sessionStorage.setItem("dataExpedicao", dataExpedicao.value);
        
    });

    cpf.addEventListener("change", function() {
        sessionStorage.setItem("cpf", cpf.value);
        
    });

    dataNascimento.addEventListener("change", function() {
        sessionStorage.setItem("dataNascimento", dataNascimento.value);
        
    });

    sexo.addEventListener("change", function() {
        sessionStorage.setItem("sexo", sexo.value);
        
    });

    estadoCivil.addEventListener("change", function() {
        sessionStorage.setItem("estadoCivil", estadoCivil.value);
        
    });

    tipo.addEventListener("change", function() {
        sessionStorage.setItem("tipo", tipo.value);
        
    });

    logradouro.addEventListener("change", function() {
        sessionStorage.setItem("logradouro", logradouro.value);
        
    });

    bairro.addEventListener("change", function() {
        sessionStorage.setItem("bairro", bairro.value);
        
    });

    uf.addEventListener("change", function() {
        sessionStorage.setItem("uf", uf.value);
        
    });

    cidade.addEventListener("change", function() {
        sessionStorage.setItem("cidade", cidade.value);
        
    });

    cep.addEventListener("change", function() {
        sessionStorage.setItem("cep", cep.value);
        
    });

    email.addEventListener("change", function() {

        sessionStorage.setItem("email", email.value);
        
    });

    telefoneResidencial.addEventListener("change", function() {

        sessionStorage.setItem("telefoneResidencial", telefoneResidencial.value);
        
    });

    telefoneComercial.addEventListener("change", function() {
        sessionStorage.setItem("telefoneComercial", telefoneComercial.value);
        
    });


</script>
-->

@endsection