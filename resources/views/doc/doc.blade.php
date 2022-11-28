@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Listar clientes</h6>
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
                    <img src="{{asset('img/imgAdicionales/spinerLetter2.svg')}}" class="svgLoadLetter">
                </div>
                <div class="card-header border-transparent py-2">
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa fa-person"></i> Listado de clientes</h3>
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
                                        <th class="text-center" data-priority="2">Num.Inscripcion</th>
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
                                        <th class="text-center" data-priority="2">Num.Inscripcion</th>
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
<form method="post" action="{{url('doc/download')}}" id="formtest">
    <input type="hidden" name="docNombre" id="docNombre">
    <input type="hidden" name="docDni" id="docDni">
    <input type="hidden" name="caldes" id="caldes">
    <input type="hidden" name="caltip" id="caltip">
    <input type="hidden" name="prenro" id="prenro">
    <input type="hidden" name="docHora" id="docHora">
    <input type="hidden" name="nomfircon" id="nomfircon">
    
    @csrf
</form>
<script>
    $(document).ready( function () {
        tablaDeRegistros=$('.contenedorRegistros').html();
        // fillRegistros();
        takeRegistros();
        // $('.overlayPagina').css("display","none");
    } );
    function fillRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "{{url('doc/listar')}}",
            method: 'get',
            success: function(result){
                console.log(result.data);
                var html = '';
                for (var i = 0; i < result.data.length; i++) 
                {
                    html += '<tr>' +
                        '<td>' + result.data[i].dni + '</td>' +
                        '<td>' + result.data[i].nombre +'</td>' +
                        '<td class="text-center">'+
                            '<div class="btn-group btn-group-sm" role="group">'+
                                '<a href="{{url('doc/download')}}/'+result.data[i].idCliente+'" class="btn text-info" title="Descargar documento"><i class="fa fa-download"></i></a>'+
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
    function takeRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "../../conexionBD.php",
            method: 'get',
            success: function(result){
                console.log(result);
                $('#data').html(result);
                initDatatable('registros');
                $('.overlayRegistros').css('display','none');
            }
        });
    }
    function sendData(id)
    {
        // let data = JSON.stringify()
        // alert(typeof id);
        // alert(id.toString().padStart(8, 0));
        let hoy = new Date();
        let hora = hoy.getHours().toString().padStart(2, 0);
        let minutos = hoy.getMinutes().toString().padStart(2, 0);
        let segunHora = hora >= 12 ? 'PM' : 'AM';
        let docHora = hora+':'+minutos+' '+segunHora;

        let inscri = id.toString().padStart(8, 0);
        $('#docNombre').val($('#'+inscri).attr('data-clinomx'));
        $('#docDni').val($('#'+inscri).attr('data-clilelx'));
        $('#caldes').val($('#'+inscri).attr('data-caldes'));
        $('#caltip').val($('#'+inscri).attr('data-caltip'));
        $('#prenro').val($('#'+inscri).attr('data-prenro'));
        $('#nomfircon').val($('#'+inscri).attr('data-nomfircon'));
        
        $('#docHora').val(docHora);
        
        $('#formtest').submit();

        // alert(data);
    }
</script>
@endsection