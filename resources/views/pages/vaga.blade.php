@extends('layouts.app')
@section('page_title', 'Vaga')
@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Vaga</h3>
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


                            @if(!empty($vaga))
                            <form action="{{ route('vaga.atualizar', $vaga->id) }}" method="POST">
                                @else
                                <form action="{{ route('vaga.cadastro') }}" method="POST">
                                    @endif

                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="cargo"><strong>Cargo</strong></label>
                                                <input class="form-control" type="text" id="cargo"
                                                    value="{{ $vaga->cargo ?? '' }}" name="cargo">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="remuneracao"><strong>Remuneração</strong></label>
                                                <input class="form-control" type="text" id="remuneracao"
                                                    value="{{ $vaga->remuneracao ?? '' }}" name="remuneracao">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label" for="valeTransporte"><strong>Vale
                                                    transporte</strong></label>
                                            <select class="form-select" value="{{ $vaga->valeTransporte ?? '' }}"
                                                aria-label="Default select example" name="valeTransporte">
                                                <option value="true">Sim</option>
                                                <option value="false">Não</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="valeRefeicao"><strong>Vale
                                                    refeição</strong></label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="valeRefeicao" value="{{ $vaga->valeRefeicao ?? '' }}">
                                                <option value="true">Sim</option>
                                                <option value="false">Não</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label" for="formaContratacao"><strong>Forma de
                                                    contratação</strong></label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="formaContratacao" value="{{ $vaga->formaContratacao ?? '' }}">
                                                <option value="clt">CLT</option>
                                                <option value="pj">PJ</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label" for="turno"><strong>Turno</strong></label>
                                            <select class="form-select" aria-label="Default select example" name="turno"
                                                value="{{ $vaga->turno ?? '' }}">
                                                <option value="manha">Manhã</option>
                                                <option value="tarde">Tarde</option>
                                                <option value="noite">Noite</option>
                                                <option value="integral">Integral</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label" for="uf"><strong>UF</strong></label>
                                            <select class="form-select" id="uf" value="{{ $vaga->uf ?? '' }}" name="uf">

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
                                            <label class="form-label" for="empresa"><strong>Empresa</strong></label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="empresa">
                                                @foreach($empresas as $e)
                                                <option value="{{ $e->id }}">{{ $e->razaoSocial }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3"><label class="form-label"
                                                for="especificacoes"><strong>Especificações</strong><br></label>
                                            <textarea class="form-control" id="especificacoes" rows="4"
                                                name="especificacoes" value="{{ $vaga->especificacoes ?? '' }}"></textarea>
                                        </div>
                                        <div class="mb-3"><label class="form-label"
                                                for="observacoes"><strong>Observações</strong><br></label>
                                            <textarea class="form-control" id="observacoes" rows="4"
                                                name="observacoes" value="{{ $vaga->observacoes ?? '' }}"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3"><button class="btn btn-primary btn-sm"
                                            type="submit">Salvar</button></div>
                                </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>



@endsection