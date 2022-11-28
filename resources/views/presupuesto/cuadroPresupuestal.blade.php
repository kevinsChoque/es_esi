@extends('layout.layout')
@section('nombreContenido', '----')
@section('cabecera')
<div class="main-header p-1">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-12 m-auto">
            <h6 class="my-0 ml-3">Cuadro presupuestal</h6>
        </div>
        <div class="col-lg-6 col-sm-6 col-12">
            <a href="{{url('presupuesto/presupuesto')}}" class="btn btn-sm btn-success float-right">
                <i class="fa fa-list"></i> 
                Listar
            </a>
        </div>
    </div>
</div>
@endsection
@section('contenido')
<div class="overlayPagina">
    <div class="loadingio-spinner-spin-i3d1hxbhik m-auto">
        <div class="ldio-onxyanc9oyh">
            <div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 contenedorFormulario">
            <div class="card card-default card-info card-outline">
                <!-- <div class="overlay dark overlayRegistros">
                    <img src="{{asset('img/imgAdicionales/spinerLetter.svg')}}" class="svgLoadLetter1">
                </div> -->
                <div class="card-header border-transparent py-2">
                    <h3 class="card-title m-0 font-weight-bold"><i class="fa fa-file-invoice-dollar"></i> Registrar cuadro presupuestal</h3>
                </div>
                <div class="card-body">
                    <form id="formValidateReg">
                    <div class="row">
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Codigo: <span class="text-danger">*</span></label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-clipboard-user"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="codigo" name="codigo">
                            </div>
                        </div>
                        <div class="form-group col-lg-5">
                            <label for="" class="m-0">Usuario: <span class="text-danger">*</span></label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="usuario" name="usuario">
                            </div>
                        </div>
                        <div class="form-group col-lg-5">
                            <label for="" class="m-0">Direccion: <span class="text-danger">*</span></label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-location-dot"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="direccion" name="direccion">
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12 table-responsive contenedorRegistros" style="display: block;">
                            <table id="registros" class="table table-hover table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light shadow">
                                    <tr>
                                        <th class="text-center" data-priority="1">Codigo</th>
                                        <th class="text-center" data-priority="2">Rubros</th>
                                        <th class="text-center" data-priority="2">Unidad</th>
                                        <th class="text-center" data-priority="3">Cantidad</th>
                                        <th class="text-center" data-priority="3">C/U x Act.</th>
                                        <th class="text-center" data-priority="2">Costo Total</th>
                                        <th class="text-center" data-priority="1">Opc.</th>
                                    </tr>
                                </thead>
                                <tbody id="data">
                                    <tr id="primeraFila" class="font-weight-bold">
                                        <td>1 )</td>
                                        <td>Costos Directos.</td>
                                        <td class="text-center">-</td>
                                        <td colspan="2"></td>
                                        <td class="text-center costoTotal shadow" style="background-color: #c3bfbf;">0</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr id="segundaFila" class="font-weight-bold">
                                        <td>2 )</td>
                                        <td>Gastos Generales y Utilidad.</td>
                                        <td class="text-center">15%</td>
                                        <td colspan="2"></td>
                                        <td class="text-center gastoGeneral shadow" style="background-color: #c3bfbf;">0</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr class="font-weight-bold">
                                        <td colspan="2"><button class="btn btn-success btn-sm w-100"  data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i> Agregar detalle</button></td>
                                        <td colspan="3">Precio del Servicio Colateral sin IGV (1+2)</td>
                                        <td class="text-center shadow precioSerCol" style="background-color: #68c98f;">0</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr class="font-weight-bold">
                                        <td colspan="2"></td>
                                        <td colspan="3">Precio del IGV </td>
                                        <td class="text-center shadow precioIgv" style="background-color: #68c98f;">0</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr class="font-weight-bold">
                                        <td colspan="2"></td>
                                        <td colspan="3">Precio del Servicio Colateral Total</td>
                                        <td class="text-center shadow totalPresupuesto" id="totalPresupuesto" style="background-color: #68c98f;">0</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-1 border-transparent">
                    <button type="button" class="btn btn-sm btn-success float-right savePresupuesto"><i class="fa fa-plus"></i> Guardar Presupuesto</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('presupuesto.mDetalle')
<script>
    var flip=0;
    $(document).ready( function () {
        // tablaDeRegistros=$('.contenedorRegistros').html();
        $('.overlayPagina').css("display","none");
        // initDatatable('registros');
    } );
    $('.savePresupuesto').on('click',function(){
        savePresupuesto();
    });
    function data(tipo)
    {
        return {
            codigo:$('#codigo').val(),
            usuario:$('#usuario').val(),
            direccion:$('#direccion').val(),
            total:$('#totalPresupuesto').html(),
        }
    }
    // var ppp=0;
    function savePresupuesto()
    {
        let ids = [];
        let cods = [];
        let cantidades = [];
        $('.idDetalle').each(function(index,element){
            // alert($(element).attr('data-id'));
            ids.push($(element).attr('data-id'));
            cods.push($(element).attr('data-codigo'));
        });
        if($('#formValidateReg').valid()==false)
        {return;}
        if(ids.length==0)
        {
            msjSimple(false,'Agregue detalle');
            return;
        }
        $('.cantDetalle').each(function(index,element){
            cantidades.push($(element).val());
        });
        $( ".overlayPagina" ).css('display','block');
        var dataDetalle = {ids:ids,cods:cods,cantidades:cantidades};
        var datos = data();
        Object.assign(datos,dataDetalle);
        console.dir(datos);
        jQuery.ajax(
        { 
            url: "{{url('presupuesto/registrar')}}",
            data: datos,
            method: 'get',
            success: function(result){
                msjRee(result);
                $( ".overlayPagina" ).css('display','none');
                window.location.href = "{{url('presupuesto/presupuesto')}}";
            }
        });
    }
    $("#formValidateReg").validate({
        errorClass: "text-danger font-italic font-weight-normal",
        ignore: ".ignore",
        rules: {
            codigo: "required",
            usuario: "required",
            direccion: "required",
        },
    });
</script>
@endsection