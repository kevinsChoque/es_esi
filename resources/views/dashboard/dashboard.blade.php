@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Empresa</h6>
        </div>
        <div class="col-lg-6 col-sm-6 col-12">
            <button class="btn btn-sm btn-success float-right btnPmsRegistrar" data-toggle="modal" data-target="#modalRegistrar" style="display: none;">
                <i class="fa fa-plus"></i> 
                Nuevo registro
            </button>
        </div>
    </div>
</div>
@endsection
@section('contenido')
<h1>Lorem ipsum dolor sit.</h1>
@endsection