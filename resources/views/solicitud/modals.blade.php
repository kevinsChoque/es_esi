<style>
    @media (min-width: 1200px)
    {
        .modal-xl {
            max-width: 1250px !important;
        }
    }
</style>
<div class="modal fade" id="modalRegistrarAdicional" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header py-1 border-transparent" style="background-color: rgba(0, 0, 0, 0.03);">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-person-circle-plus"></i> Nueva plantilla</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formValidateReg">
                    <input type="hidden" name="solnro" id="solnro">
                    <div class="row contenedorFormularioRegistrar">
                        <div class="col-lg-12">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0">II. DATOS DE REPRESENTANTE:</p></div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Fecha de vencimiento:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="date" class="form-control form-control-sm" id="fechaVencimiento" name="fechaVencimiento">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Nombre:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="nombreRep" name="nombreRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Dni:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="dniRep" name="dniRep" maxlength="8">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">CORREO ELECTRONICO:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="correoRep" name="correoRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Domicilio (Calle, Jirón, Avenida):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="domicilioRep" name="domicilioRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Numero (Nº):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="numeroRep" name="numeroRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Manzana (MZ):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="manzanaRep" name="manzanaRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Lote (Lt):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="loteRep" name="loteRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Urbanizacion, barrio:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="urbanizacionRep" name="urbanizacionRep">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-success py-1 mb-1"><p class="m-0">III. DATOS DEL PREDIO (marca con “X”)</p></div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Tipo de predio:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <select class="form-control form-control-sm" name="tipoPredio" id="tipoPredio">
                                    <option disabled selected value="0">Seleccione...</option>
                                    <option value="En construccion">En construccion</option>
                                    <option value="Habilitado">Habilitado</option>
                                    <option value="Otros">Otros (especificar) TERRENO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Ubicación (Calle, Jirón, Avenida):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="ubicacionPre" name="ubicacionPre">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Numero (Nº):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="numeroPre" name="numeroPre">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Manzana (MZ):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="manzanaPre" name="manzanaPre">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="" class="m-0">Lote (Lt):</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="lotePre" name="lotePre">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="" class="m-0">Referencia:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="referenciaPre" name="referenciaPre">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="" class="m-0">Tipo de servicio:</label>
                            <div class="form-control form-control-sm text-center">
                                <input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="ts1">
                                <label class="form-check-label mr-5" for="ts1">Servicio de Agua Potable</label>

                                <input class="form-check-input" type="checkbox" value="Servicio de Alcantarillado Sanitario" id="ts2">
                                <label class="form-check-label" for="ts2">Servicio de Alcantarillado Sanitario</label>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Categoria:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <select class="form-control form-control-sm" name="categoria" id="categoria">
                                    <option disabled selected value="0">Seleccione...</option>
                                    <option value="Domestico">Domestico</option>
                                    <option value="Social">Social</option>
                                    <option value="Comercial y Otros">Comercial y Otros</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Estatal">Estatal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Uso del servicio:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <select class="form-control form-control-sm" name="usoServicio" id="usoServicio">
                                    <option disabled selected value="0">Seleccione...</option>
                                    <option value="Permanente">Permanente</option>
                                    <option value="Temporal">Temporal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="m-0">Nº meses::</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="numeroMeses" name="numeroMeses">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 mb-2 font-weight-bold text-center">La conexión se solicita para ser instalada en el predio ubicado en el numeral III. Por lo cual adjunto copia de los documentos siguientes:</p>
                        </div>
                        <div class="col-lg-6 pl-5">
                            <p class="m-0 text-justify"><input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="item1">
                            <label class="form-check-label mr-5" for="item1">Documento que acredita la propiedad, titulo posesorio o certificado de posesión del predio, según corresponda</label></p>

                            <p class="m-0 text-justify"><input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="item2">
                            <label class="form-check-label mr-5" for="item2">Plano de Ubicación del predio, el cual deberá detallar la ubicación de la conexión de agua y/o alcantarillado</label></p>

                            <p class="m-0 text-justify"><input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="item3">
                            <label class="form-check-label mr-5" for="item3">Documento que acredite la representación, de ser el caso</label></p>

                            <p class="m-0 text-justify"><input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="item4">
                            <label class="form-check-label mr-5" for="item4">Certificado de vigencia de poder, para el caso de personas jurídicas</label></p>
                        </div>
                        <div class="col-lg-6 pl-5">
                            <p class="m-0 text-justify"><input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="item5">
                            <label class="form-check-label mr-5" for="item5">Memoria descriptiva de instalaciones sanitarias internas de agua y desagüe firmada ingeniero sanitario colegiado y habilitado (Conexión domiciliaria de Agua Potable de un diámetro mayor a 15mm)</label></p>

                            <p class="m-0 text-justify"><input class="form-check-input" type="checkbox" value="Servicio de Agua Potable" id="item6">
                            <label class="form-check-label mr-5" for="item6">Plano de instalaciones sanitarias internas de agua y desagüe, firmado ingeniero sanitario colegiado y habilitado (Conexión domiciliaria de Agua Potable de un diámetro a 15mm)</label></p>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="" class="m-0">Otros:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="otros" name="otros">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="" class="m-0">Numero de telefono:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm soloNumeros" id="telefono" name="telefono" maxlength="9">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="" class="m-0">Numero alternativo:</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm soloNumeros" id="telefonoAlternativo" name="telefonoAlternativo" maxlength="9">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer py-1 border-transparent">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm btn-success guardarEdit"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>
<script>
$('.guardarEdit').on('click',function(){
    guardarEdit();
});
function data()
{
	return {
        solnro:$('#solnro').val(),

        fechaVencimiento:$('#fechaVencimiento').val(),
        nombreRep:$('#nombreRep').val(),
        dniRep:$('#dniRep').val(),
        correoRep:$('#correoRep').val(),
        domicilioRep:$('#domicilioRep').val(),
        numeroRep:$('#numeroRep').val(),
        manzanaRep:$('#manzanaRep').val(),
        loteRep:$('#loteRep').val(),
        urbanizacionRep:$('#urbanizacionRep').val(),

        tipoPredio:$('#tipoPredio').val(),
        ubicacionPre:$('#ubicacionPre').val(),
        numeroPre:$('#numeroPre').val(),
        manzanaPre:$('#manzanaPre').val(),
        lotePre:$('#lotePre').val(),
        referenciaPre:$('#referenciaPre').val(),

        ts1:$('#ts1').prop('checked'),
        ts2:$('#ts2').prop('checked'),

        categoria:$('#categoria').val(),
        usoServicio:$('#usoServicio').val(),
        numeroMeses:$('#numeroMeses').val(),

        item1:$('#item1').prop('checked'),
        item2:$('#item2').prop('checked'),
        item3:$('#item3').prop('checked'),
        item4:$('#item4').prop('checked'),
        item5:$('#item5').prop('checked'),
        item6:$('#item6').prop('checked'),

        otros:$('#otros').val(),

        telefono:$('#telefono').val(),
        telefonoAlternativo:$('#telefonoAlternativo').val(),

	}
}
function registrarAdicional(solnro)
{
    $('#solnro').val(solnro);
    jQuery.ajax(
    { 
        url: "{{url('solicitud/show')}}",
        data: {solnro:solnro},
        method: 'get',
        success: function(r){
            limpiarForm();
            console.log(r);
            if(r.estado)
            {
                $('#fechaVencimiento').val(r.data.fechaVencimiento);
                $('#nombreRep').val(r.data.nombreRep);
                $('#dniRep').val(r.data.dniRep);
                $('#correoRep').val(r.data.correoRep);
                $('#domicilioRep').val(r.data.domicilioRep);
                $('#numeroRep').val(r.data.numeroRep);
                $('#manzanaRep').val(r.data.manzanaRep);
                $('#loteRep').val(r.data.loteRep);
                $('#urbanizacionRep').val(r.data.urbanizacionRep);

                $('#tipoPredio').val(r.data.tipoPredio);
                $('#ubicacionPre').val(r.data.ubicacionPre);
                $('#numeroPre').val(r.data.numeroPre);
                $('#manzanaPre').val(r.data.manzanaPre);
                $('#lotePre').val(r.data.lotePre);
                $('#referenciaPre').val(r.data.referenciaPre);

                if(r.data.ts1=='true') $('#ts1').prop('checked',true); else $('#ts1').prop('checked',false);
                if(r.data.ts2=='true') $('#ts2').prop('checked',true); else $('#ts2').prop('checked',false);

                $('#categoria').val(r.data.categoria);
                $('#usoServicio').val(r.data.usoServicio);
                $('#numeroMeses').val(r.data.numeroMeses);

                if(r.data.item1=='true') $('#item1').prop('checked',true); else $('#item1').prop('checked',false);
                if(r.data.item2=='true') $('#item2').prop('checked',true); else $('#item2').prop('checked',false);
                if(r.data.item3=='true') $('#item3').prop('checked',true); else $('#item3').prop('checked',false);
                if(r.data.item4=='true') $('#item4').prop('checked',true); else $('#item4').prop('checked',false);
                if(r.data.item5=='true') $('#item5').prop('checked',true); else $('#item5').prop('checked',false);
                if(r.data.item6=='true') $('#item6').prop('checked',true); else $('#item6').prop('checked',false);

                // $('#item1').prop('checked',r.data.item1);
                // $('#item2').prop('checked',r.data.item2);
                // $('#item3').prop('checked',r.data.item3);
                // $('#item4').prop('checked',r.data.item4);
                // $('#item5').prop('checked',r.data.item5);
                // $('#item6').prop('checked',r.data.item6);

                $('#otros').val(r.data.otros);

                $('#telefono').val(r.data.telefono);
                $('#telefonoAlternativo').val(r.data.telefonoAlternativo);
            }
            else
            {
                $('#tipoPredio').val('Habilitado');
                $('#ubicacionPre').val($('#'+solnro).attr('data-soltipcal')+' '+$('#'+solnro).attr('data-soldirec'));
                $('#numeroPre').val($('#'+solnro).attr('data-soldirnro'));
                $('#categoria').val('Domestico');
                $('#usoServicio').val('Permanente');

                $('#item1').prop('checked',true);
                $('#item2').prop('checked',true);
                $('#item3').prop('checked',true);

                $('#item5').prop('checked',true);
                $('#item6').prop('checked',true);
            }
            $('#modalRegistrarAdicional').modal('show');
        }
    });
}
function guardarEdit(solnro)
{
    jQuery.ajax(
    { 
        url: "{{url('solicitud/registrar')}}",
        data: data(),
        method: 'get',
        success: function(r){
            console.log(r);
            // $( ".overlayRegistros" ).toggle( flip++ % 2 === 0 );
            // construirTabla();
            // fillRegistros();
            limpiarForm();
            $('#modalRegistrarAdicional').modal('hide');
            msjRee(r);
        }
    });
}
function limpiarForm()
{
    $(".contenedorFormularioRegistrar input[type=text]").val('');
    $(".contenedorFormularioRegistrar input[type=date]").val('');
    $(".contenedorFormularioRegistrar select").val('0');
    $(".contenedorFormularioRegistrar input[type=checkbox]").prop('checked',false);
}
</script>