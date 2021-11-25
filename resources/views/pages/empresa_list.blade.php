@extends('layouts.app')
@section('page_title', 'Empresas')
@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Empresas</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="mb-3">
                <a class="btn btn-primary" href="{{ route('empresa.showForm') }}" role="button"
                    title="Cadastrar nova empresa">Adicionar</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label
                            class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label></div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input
                                type="search" class="form-control form-control-sm" aria-controls="dataTable"
                                placeholder="Search"></label></div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Login</th>
                            <th>Razão Social</th>
                            <th>CNPJ</th>
                            <th>Área de atuação</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empresas as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>{{ $e->login }}</td>
                            <td>{{ $e->razaoSocial }}</td>
                            <td>{{ $e->cnpj }}</td>
                            <td>{{ $e->areaAtuacao }}</td>
                            <td>

                                <a href="{{ route('empresa.editar', $e->id) }}" title="Editar"><i
                                        class="fas fa-edit"></i></a>

                                <a href="{{ route('empresa.deletar', $e->id) }}" title="Excluir"><i
                                        class="fas fa-trash-alt" style="color:#d9534f"></i></a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Código</strong></td>
                            <td><strong>Login</strong></td>
                            <td><strong>Razão Social</strong></td>
                            <td><strong>CNPJ</strong></td>
                            <td><strong>Área de atuação</strong></td>
                            <td><strong></strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of
                        27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span
                                        aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                        aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection