@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Listar solicitudes</h6>
        </div>
        <div class="col-lg-6 col-sm-6 col-12">
            <button class="btn btn-sm btn-success float-right btnPmsRegistrar botonNewSoli">
                <i class="fa fa-plus"></i> 
                Nueva Solicitud
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
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa fa-file"></i> Listar solicitudes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default card-info card-outline">
                <div class="overlay dark overlayRegDBL">
                    <img src="{{asset('img/imgAdicionales/spinerLetter.svg')}}" class="svgLoadLetter">
                </div>
                <div class="card-header border-transparent py-2">
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa fa-file"></i> Listar solicitudes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning msjPms" style="display: none;">
                        <p class="m-0 font-weight-bold font-italic">El usuario no cuenta con el acceso a registros.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive contRegSolDBL" style="display: none;">
                            <table id="registrosDBL" class="table table-hover table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" data-priority="2">Origen</th>
                                        <th class="text-center" data-priority="2">Num.Sol.</th>
                                        <th class="text-center" data-priority="2">Dni</th>
                                        <th class="text-center" data-priority="2">Nombre</th>
                                        <th class="text-center" data-priority="1">Direccion</th>
                                        <th class="text-center" data-priority="1">Opc.</th>
                                    </tr>
                                </thead>
                                <tbody id="dataDBL">
                                </tbody>
                                <tfoot class="thead-light">
                                    <tr>
                                        <th class="text-center" data-priority="2">Origen</th>
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
<!-- <a href=""></a> -->
@include('solicitud.modals')
@include('solicitud.mFactibilidad')
@include('solicitud.mFactibilidadSol')
@include('solicitud.newSolicitud')
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
    var tablaDeRegistrosDBL;
    var flip=0;
    var pathPublic="{{url('/')}}/solicitud/solDownload"+'/';
    $(document).ready( function () {
        tablaDeRegistrosDBL=$('.contRegSolDBL').html();
        takeRegistros();
        listarFromApp();
        // fillRegistros();
        // fillRegistrosFromApp();
        $('.overlayPagina').css("display","none");
        fillTecnicos();
    } );
    function takeRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "../../conexionBDsolicitud.php",
            method: 'get',
            success: function(result){
                // console.log(result);
                $('#data').html(result);
                initDatatable('registros');
                $('.overlayRegistros').css('display','none');
            }
        });
    }
    function listarFromApp()
    {
        $('.contRegSolDBL').css('display','block');
        jQuery.ajax(
        { 
            url: "{{url('solicitud/listarFromApp')}}",
            method: 'get',
            success: function(r){
                console.log(r);
                var html = '';
                let dataFrom = '';
                // let helpForNumSoli = '';
                for (var i = 0; i < r.data.length; i++) 
                {
                    console.log(r.data[i].solnro);
                    dataFrom = r.data[i].solnro.toString().includes('6662023')?'<span class="badge badge-info shadow px-2">ESI</span>':'<span class="badge badge-primary shadow px-2">SICEM</span>';
                    // helpForNumSoli = r.data[i].numSoli.toString().replace('-','CUT');
                    if(r.data[i].estado>='2')
                    {   $banFactibilidad = '<button type="button" class="btn text-success" title="La fecha de Factibilidad ya fue programada"><i class="fa-solid fa-business-time"></i></button>';}
                    else
                    {   $banFactibilidad = '<button type="button" class="btn text-secondary" title="Programar factivilidad" onclick="regFacSol(this)" data-numsoli="'+r.data[i].solnro+'"><i class="fa-solid fa-business-time"></i></button>';}
                    // console.log(r.data[i].SolNombre);
                    html += '<tr class="text-center">' +
                        '<td class="font-weight-bold">' + dataFrom + '</td>' +
                        '<td class="font-weight-bold">' + novDato(r.data[i].numSoli) + '</td>' +
                        '<td class="font-weight-bold">' + novDato(r.data[i].dniTit) + '</td>' +
                        '<td>' + novDato(r.data[i].nombreTit) + '</td>' +
                        '<td>' + r.data[i].domicilioTit + '</td>' +
                        '<td>'+
                            '<div class="btn-group btn-group-sm" role="group">'+
                                $banFactibilidad+
                                '<button type="button" class="btn text-info" title="Editar archivo" onclick="registrarAdicional(' + r.data[i].numSoli + ')"><i class="fa fa-edit" ></i></button>'+
                                '<a href="'+pathPublic+r.data[i].numSoli+'" class="btn text-info" title="Descargar documento"><i class="fa fa-download"></i></a>'+
                                '<button type="button" class="btn text-danger" title="Eliminar registro" onclick="eliminar('+r.data[i].numSoli+');"><i class="fa fa-trash"></i></button>'+
                            '</div>'+
                        '</td>'+
                        '</tr>';
                }
                $('#dataDBL').append(html);
                initDatatable('registrosDBL');
                $('.overlayRegDBL').css('display','none');
            }
        });
    }
    function fillRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "{{url('solicitud/listar')}}",
            method: 'get',
            success: function(r){
                // console.log(r);
                var html = '';
                
                for (var i = 0; i < r.data.length; i++) 
                {
                    
                    if(r.data[i].estado>='2')
                    {   $banFactibilidad = '<button type="button" class="btn text-success" title="La fecha de Factibilidad ya fue programada"><i class="fa-solid fa-business-time"></i></button>';}
                    else
                    {   $banFactibilidad = '<button type="button" class="btn text-secondary" title="Programar factivilidad" onclick="regFactibilidad(' + r.data[i].SolNro + ')"><i class="fa-solid fa-business-time"></i></button>';}
                    // console.log(r.data[i].SolNombre);
                    html += '<tr class="text-center">' +
                        
                        '<td class="font-weight-bold">' + novDato(r.data[i].SolNro) + '</td>' +
                        '<td class="font-weight-bold">' + novDato(r.data[i].SolElect) + '</td>' +
                        '<td>' + novDato(r.data[i].SolNombre) + '</td>' +
                        '<td>' + 
                            r.data[i].SolTipCal + 
                            r.data[i].SolDirec + 
                            r.data[i].SolDirNro + 
                        '</td>' +
                        '<td>'+
                            '<div class="btn-group btn-group-sm" role="group">'+
                                $banFactibilidad+
                                '<button type="button" class="btn text-info" title="Editar archivo" onclick="registrarAdicional(' + r.data[i].SolNro + ')"><i class="fa fa-edit" ></i></button>'+
                                '<button type="button" class="btn text-danger" title="Eliminar registro" onclick="eliminar('+r.data[i].SolNombre+');"><i class="fa fa-trash"></i></button>'+
                            '</div>'+
                        '</td>'+
                        '</tr>';
                }
                $('#data').html(html);
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
    function construirTablaDBL()
    {
        $('.contRegSolDBL>div').remove();
        $('.contRegSolDBL').html(tablaDeRegistrosDBL);
    }
</script>
@endsection