@extends('layouts.app')
@section('page_title', 'Vagas')
@section('content')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Vagas</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                        <div class="mb-3">
                            <a class="btn btn-primary" href="{{ route('vaga.showForm') }}" role="button" title="Cadastrar nova vaga">Adicionar</a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Cargo</th>
                                            <th>Turno</th>
                                            <th>UF</th>
                                            <th>Empresa</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vagas as $v)
                                        <tr>
                                            <td>{{ $v->id }}</td>
                                            <td>{{ $v->cargo }}</td>
                                            <td>{{ $v->turno }}</td>
                                            <td>{{ $v->uf }}</td>
                                            <td>{{ $v->empresa->razaoSocial }}</td>
                                            <td>
                                               
                                                    <a href="{{ route('vaga.editar', $v->id) }}" title="Editar"><i class="fas fa-edit"></i></a>
                                                
                                                    <a href="{{ route('vaga.deletar', $v->id) }}" title="Excluir"><i class="fas fa-trash-alt" style="color:#d9534f"></i></a>
                                                
                                            </td>   
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Código</strong></td>
                                            <td><strong>Cargo</strong></td>
                                            <td><strong>Turno</strong></td>
                                            <td><strong>UF</strong></td>
                                            <td><strong>Empresa</strong></td>
                                            <td><strong></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection