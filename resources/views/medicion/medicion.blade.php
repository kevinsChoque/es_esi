@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Medicion</h6>
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
        <div class="col-md-12 contForm">
            <div class="card card-default card-info card-outline">
                <div class="overlay dark overlayRegistros">
                    <!-- <i class="fas fa-2x fa-sync-alt"></i> -->
                    <img src="{{asset('img/imgAdicionales/spinerLetter.svg')}}" class="svgLoadLetter">
                </div>
                <div class="card-header border-transparent py-2">
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa fa-file"></i> Listar registros</h3>
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
                        <div class="col-md-12 table-responsive contRegSicem" style="display: none;">
                            <table id="registrosSicem" class="table table-hover table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" data-priority="2">#</th>
                                        <th class="text-center" data-priority="2">Num.Sol.</th>
                                        <th class="text-center" data-priority="2">Dni</th>
                                        <th class="text-center" data-priority="2">Nombre Titular</th>
                                        <th class="text-center" data-priority="1">Direccion del Predio</th>
                                        <th class="text-center" data-priority="1">Opc.</th>
                                    </tr>
                                </thead>
                                <tbody id="dataSicem">
                                </tbody>
                                <tfoot class="thead-light">
                                    <tr>
                                        <th class="text-center" data-priority="2">#</th>
                                        <th class="text-center" data-priority="2">Num.Sol.</th>
                                        <th class="text-center" data-priority="2">Dni</th>
                                        <th class="text-center" data-priority="2">Nombre Titular</th>
                                        <th class="text-center" data-priority="1">Direccion del Predio</th>
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
        <div class="col-md-12 contenedorFormulario">
            <div class="card card-default card-info card-outline">
                <div class="overlay dark overlayRegistros">
                    <!-- <i class="fas fa-2x fa-sync-alt"></i> -->
                    <img src="{{asset('img/imgAdicionales/spinerLetter.svg')}}" class="svgLoadLetter">
                </div>
                <div class="card-header border-transparent py-2">
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa-solid fa-ruler"></i> Listar Medicion</h3>
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
                                        <th class="text-center" data-priority="1">#</th>
                                        <th class="text-center" data-priority="1">Numero de Solicitud</th>
                                        <th class="text-center" data-priority="3">Nombre del Titular</th>
                                        <th class="text-center" data-priority="4">Direccion del Predio</th>
                                        <th class="text-center" data-priority="1">Opc.</th>
                                    </tr>
                                </thead>
                                <tbody id="data">
                                </tbody>
                                <tfoot class="thead-light">
                                    <tr>
                                        <th class="text-center" data-priority="1">#</th>
                                        <th class="text-center" data-priority="1">Numero de Solicitud</th>
                                        <th class="text-center" data-priority="3">Nombre del Titular</th>
                                        <th class="text-center" data-priority="4">Direccion del Predio</th>
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
@include('medicion.mProgramacion')
@include('medicion.mAddData')
@include('medicion.mLoadFile')
<script>
localStorage.setItem("nb",3);
localStorage.setItem("sbd",0);
localStorage.setItem("sba",9);
    var tablaDeRegistros,tablaDeRegistrosArchivos;
    var flip=0;
    $(document).ready( function () {
        tablaDeRegistros=$('.contenedorRegistros').html();
        tablaDeRegistrosArchivos=$('.contRegFilesFact').html();
        fillRegistros();
        fillTecnicos();
        fillRegistrosSicem();
    } );
    function fillRegistrosSicem()
    {
        $('.contRegSicem').css('display','block');
        jQuery.ajax(
        { 
            url: "{{url('solicitud/listar')}}",
            method: 'get',
            success: function(r){
                // console.log(r);
                var html = '';
                let cant = '';
                let direccion = '';
                for (var i = 0; i < r.data.length; i++) 
                {
                    cant=i+1;
                    direccion = r.data[i].SolTipCal + 
                        r.data[i].SolDirec + 
                        r.data[i].SolDirNro;
                    html += '<tr class="text-center">' +
                        '<td class="font-weight-bold">' + cant + '</td>' +                    
                        '<td class="font-weight-bold">' + novDato(r.data[i].SolNro) + '</td>' +
                        '<td class="font-weight-bold">' + novDato(r.data[i].SolElect) + '</td>' +
                        '<td>' + novDato(r.data[i].SolNombre) + '</td>' +
                        '<td>' + direccion + '</td>' +
                        '<td>'+
                            '<div class="btn-group btn-group-sm" role="group">'+
                                '<button type="button" class="btn text-info" title="Editar archivo" onclick="registrarAdicional(this)" data-solnro="'+r.data[i].SolNro+'" data-nombre="'+r.data[i].SolNombre+'" data-direccion="'+direccion+'"><i class="fa fa-plus"></i></button>'+
                            '</div>'+
                        '</td>'+
                        '</tr>';
                }
                $('#dataSicem').html(html);
                initDatatable('registrosSicem');
                $('.overlayRegistrosSicem').css('display','none');
            }
        });
    }
    function fillRegistros()
    {
        $('.contenedorRegistros').css('display','block');
        jQuery.ajax(
        { 
            url: "{{url('medicion/listar')}}",
            method: 'get',
            success: function(result){
                var html = '';
                let cant = '';
                for (var i = 0; i < result.data.length; i++) 
                {
                    if(result.data[i].estadoMedicion!=1)
                    {
                        cant=i+1;
                        html += '<tr class="text-center">' +
                            '<td class="font-weight-bold">' + cant + '</td>' +
                            '<td class="align-middle font-weight-bold">' + novDato(result.data[i].solnro) + '</td>' +
                            '<td class="align-middle" style="font-size: 0.9rem;">' + novDato(result.data[i].nombre) + '</td>' +
                            '<td class="align-middle">' + formatoGeneral('Direccion','fa fa-home',result.data[i].direccion) +'</td>' +
                            '<td class="align-middle">'+
                                '<div class="btn-group btn-group-sm" role="group">'+
                                    '<button type="button" class="btn text-info" title="Programar Medicion" onclick="proMedicion(this);" data-solnro="'+result.data[i].solnro+'"><i class="fa-solid fa-ruler"></i></button>'+
                                    '<button type="button" class="btn text-info" title="Subir archivo" onclick="loadFile(this)" data-solnro="'+result.data[i].solnro+'" data-idMed="'+result.data[i].idMed+'"><i class="fa fa-upload" ></i></button>'+
                                    '<a href="{{url('medicion/download')}}/'+result.data[i].solnro+'" class="btn text-info" title="Descargar documento"><i class="fa fa-download"></i></a>'+
                                    '<button type="button" class="btn text-info" title="Agregar datos a la Medicion" onclick="registrarAdicional(this);" data-solnro="'+result.data[i].solnro+'"><i class="fa-solid fa-plus"></i></button>'+
                                    '<button type="button" class="btn text-danger" title="Eliminar registro" onclick="eliminar(this);" data-solnro="'+result.data[i].solnro+'"><i class="fa fa-trash"></i></button>'+
                                '</div>'+
                            '</td>'+
                            '</tr>';
                    }
                }
                $('#data').html(html);
                initDatatable('registros');
                $('.overlayRegistros').css('display','none');
            }
        });
    }
    function eliminar(element)
    {
        let solnro = $(element).attr('data-solnro');
        // alert(solnro);
        Swal.fire({
            title: 'Esta seguro de eliminar el registro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if(result.isConfirmed)
            {
                // $( ".overlayRegistros" ).toggle( flip++ % 2 === 0 );
                jQuery.ajax(
                { 
                    url: "{{url('medicion/eliminarNew')}}",
                    data: {solnro:solnro},
                    method: 'get',
                    success: function(r){
                        $(".overlayRegDBL").toggle(flip++%2===0);
                        construirTabla();
                        fillRegistros();
                        msjRee(r);
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
    function marcador(element)
    {
        $(element).parent().parent().parent().addClass('marcador');
    }
    $("#modRegMedicion,#modalLoadFile,#modDataMedicion").on("hidden.bs.modal", function () 
    {
        $('.marcador').removeClass('marcador');
    });
</script>
@endsection