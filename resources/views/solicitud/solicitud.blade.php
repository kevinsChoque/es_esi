@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Listar solicitudes</h6>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 contenedorFormulario">
            <div class="card card-default card-info card-outline">
                <div class="overlay dark overlayRegistros">
                    <!-- <i class="fas fa-2x fa-sync-alt"></i> -->
                    <img src="{{asset('img/imgAdicionales/spinerLetter.svg')}}" class="svgLoadLetter">
                </div>
                <div class="card-header border-transparent py-2">
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa fa-person"></i> Listar solicitudes</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning msjPms" style="display: none;">
                        <p class="m-0 font-weight-bold font-italic">El usuario no cuenta con el acceso a registros.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive contenedorRegistros" style="display: none;">
                            <table id="registros" class="table table-hover table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" data-priority="2">Num.Sol.</th>
                                        <th class="text-center" data-priority="2">Dni</th>
                                        <th class="text-center" data-priority="2">Nombre</th>
                                        <th class="text-center" data-priority="1">Direccion</th>
                                        <th class="text-center" data-priority="1">Opc.</th>
                                    </tr>
                                </thead>
                                <tbody id="data">
                                </tbody>
                                <tfoot class="thead-light">
                                    <tr>
                                        <th class="text-center" data-priority="2">Num.Sol.</th>
                                        <th class="text-center" data-priority="2">Dni</th>
                                        <th class="text-center" data-priority="2">Nombre</th>
                                        <th class="text-center" data-priority="1">Direccion</th>
                                        <th class="text-center" data-priority="1">Opc.</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('solicitud.modals')
<form method="post" action="{{url('solicitud/download')}}" id="formSol">
    <input type="hidden" name="solnroSend" id="solnroSend">
    <input type="hidden" name="solnombre" id="solnombre">
    <input type="hidden" name="soltipcal" id="soltipcal">
    <input type="hidden" name="soldirec" id="soldirec">
    <input type="hidden" name="soldirnro" id="soldirnro">
    <input type="hidden" name="soldircom" id="soldircom">
    <input type="hidden" name="solurban" id="solurban">
    <input type="hidden" name="solelect" id="solelect">
    <input type="hidden" name="solfex" id="solfex">
    <input type="hidden" name="docHora" id="docHora">
    <input type="hidden" name="soltelef" id="soltelef">
    @csrf
</form>
<script>
    $(document).ready( function () {
        takeRegistros();
        $('.overlayPagina').css("display","none");
    } );
    function takeRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "../../conexionBDsolicitud.php",
            method: 'get',
            success: function(result){
                console.log(result);
                $('#data').html(result);
                initDatatable('registros');
                $('.overlayRegistros').css('display','none');
            }
        });
    }
    function sendData(numero)
    {
        let hoy = new Date();
        let hora = hoy.getHours().toString().padStart(2, 0);
        let minutos = hoy.getMinutes().toString().padStart(2, 0);
        let segunHora = hora >= 12 ? 'PM' : 'AM';
        let docHora = hora+':'+minutos+' '+segunHora;

        // let solNro = numero.toString().padStart(8, 0);
        let solNro = numero;
        $('#solnroSend').val(numero);
        $('#solnombre').val($('#'+solNro).attr('data-solnombre'));
        $('#soltipcal').val($('#'+solNro).attr('data-soltipcal'));
        $('#soldirec').val($('#'+solNro).attr('data-soldirec'));
        $('#soldirnro').val($('#'+solNro).attr('data-soldirnro'));
        $('#soldircom').val($('#'+solNro).attr('data-soldircom'));
        $('#solurban').val($('#'+solNro).attr('data-solurban'));
        $('#solelect').val($('#'+solNro).attr('data-solelect'));
        $('#solfex').val($('#'+solNro).attr('data-solfex'));
        $('#soltelef').val($('#'+solNro).attr('data-soltelef'));
        
        
        $('#docHora').val(docHora);
        $('#formSol').submit();
    }
</script>
@endsection