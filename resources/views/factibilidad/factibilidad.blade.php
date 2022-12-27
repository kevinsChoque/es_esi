@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Listar Factibilidad</h6>
        </div>
        <div class="col-lg-6 col-sm-6 col-12">
            <!-- <button class="btn btn-sm btn-success float-right btnPmsRegistrar" data-toggle="modal" data-target="#modalRegistrar">
                <i class="fa fa-plus"></i> 
                Nuevo registro
            </button> -->
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
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa-solid fa-business-time"></i> Fechas de Factibilidad</h3>
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
                                        <th class="text-center" data-priority="1"># Sol.</th>
                                        <th class="text-center" data-priority="4">Ubicacion del Predio</th>
                                        <th class="text-center" data-priority="2">Telefonos</th>
                                        <th class="text-center" data-priority="3">Tecnico</th>
                                        <th class="text-center" data-priority="3">F.Fac</th>
                                        <th class="text-center" data-priority="1">Rep.</th>
                                    </tr>
                                </thead>
                                <tbody id="data">
                                </tbody>
                                <tfoot class="thead-light">
                                    <tr>
                                        <th class="text-center" data-priority="1"># Sol.</th>
                                        <th class="text-center" data-priority="4">Ubicacion del Predio</th>
                                        <th class="text-center" data-priority="2">Telefonos</th>
                                        <th class="text-center" data-priority="3">Tecnico</th>
                                        <th class="text-center" data-priority="3">F.Fac</th>
                                        <th class="text-center" data-priority="1">Rep.</th>
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
@include('factibilidad.mAddData')
@include('factibilidad.mReprogramacion')
@include('factibilidad.mHistorial')
<script>
    var tablaDeRegistros;
    var flip=0;
    $(document).ready( function () {
        tablaDeRegistros=$('.contenedorRegistros').html();
        fillRegistros();
        fillTecnicos();
        // fillCargo();
    } );
    
    function fillRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "{{url('factibilidad/listar')}}",
            method: 'get',
            success: function(result){
                console.log(result.data);
                var html = '';
                for (var i = 0; i < result.data.length; i++) 
                {
                    console.log(result.data[i].resultado);
                    if(result.data[i].resultado!='1')
                    html += '<tr class="text-center">' +
                        '<td class="align-middle font-weight-bold">' + novDato(result.data[i].solnro) + '</td>' +
                        '<td class="align-middle">' + 
                            formatoGeneral('Direccion','fa fa-home',result.data[i].ubicacionPre,'<br>') +
                            formatoGeneral('numero','fa fa-hashtag',result.data[i].numeroPre,'<br>') +
                            formatoGeneral('manzana','fa fa-hashtag',result.data[i].manzanaPre,'<br>') +
                            formatoGeneral('lote','fa fa-hashtag',result.data[i].lotePre,'<br>') + 
                        '</td>' +
                        '<td class="align-middle font-weight-bold">' + 
                            formatoGeneral('Telefono','fa fa-phone',result.data[i].telefono,'<br>') + 
                            formatoGeneral('Telefono alternativo','fa fa-phone',result.data[i].telefonoAlternativo) + 
                        '</td>' +
                        '<td class="align-middle" style="font-size: 0.9rem;">' + novDato(result.data[i].nombre)+' '+ novDato(result.data[i].apellido) + '</td>' +
                        '<td class="align-middle">' + formatoDate(result.data[i].fecha) + '</td>' +
                        '<td class="align-middle">'+
                            '<div class="btn-group btn-group-sm" role="group">'+
                                '<button type="button" class="btn text-info" title="Lista de Reprogramaciones" onclick="fillRegistrosHistorial('+result.data[i].solnro+');"><i class="fa fa-list-ol"></i></button>'+
                                '<button type="button" class="btn text-info" title="Reprogramar Factibilidad" onclick="repFactibilidad('+result.data[i].solnro+');"><i class="fa-solid fa-business-time"></i></button>'+
                                '<button type="button" class="btn text-info" title="Agregar datos a factibilidad" onclick="registrarAdicional('+result.data[i].solnro+');"><i class="fa-solid fa-plus"></i></button>'+
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
    function eliminar(id)
    {
        Swal.fire({
            title: 'Esta seguro de eliminar el registro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if(result.isConfirmed)
            {
                $( ".overlayRegistros" ).toggle( flip++ % 2 === 0 );
                jQuery.ajax(
                { 
                    url: "{{url('persona/eliminar')}}",
                    data: {id:id},
                    method: 'get',
                    success: function(result){
                        console.log(result);
                        construirTabla();
                        fillRegistros();
                        msjRee(result);
                    }
                });
            }
        });
    }
    function construirTabla()
    {
        $('.contenedorRegistros>div').remove();
        $('.contenedorRegistros').html(tablaDeRegistros);
    }
    // function limpiarForm()
    // {
    //     $(".select2").val("0").trigger("change.select2");
    //     $('.contenedorFormularioRegistrar :input').val('');
    // }
</script>
@endsection