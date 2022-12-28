
<div class="modal fade" id="modDataMedicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header py-1 border-transparent" style="background-color: rgba(0, 0, 0, 0.03);">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa-solid fa-plus"></i> Medicion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form id="formValRegFac"> -->
                    <input type="hidden" name="solnroDataAdd" id="solnroDataAdd">
                    <div class="row contFormAddData">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-2 shadow bg-warning">
                                    <div class="form-group">
                                        <label class="m-0">Estado de medicion:</label>
                                        <select name="estado" id="estado" class="form-control form-control-sm">
                                            <option disabled>Seleccione</option>
                                            <option value="1">Concluido</option>
                                            <option value="0" selected>En proceso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-warning py-1 mb-1 text-center"><p class="m-0">PARA CONEXIONES DE AGUA POTABLE</p></div>
                        </div>
                        <div class="col-lg-5">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">1. DIAMETRO DE TUBERIA DE AGUA SOLICITADO</p></div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mb-1">
                                        <select class="form-control form-control-sm" name="diametroTuberia" id="diametroTuberia">
                                            <option selected disabled value="0">Seleccione</option>
                                            <option value="1/2 pulgada">1/2 pulgada</option>
                                            <option value="3/4(*) pulgada">3/4(*) pulgada</option>
                                            <option value="1(*) pulgada">1(*) pulgada</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group mb-1">
                                        <!-- <label class="m-0">Otros:</label> -->
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Otros</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="otros" name="otros">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">2. LONGUITUD DE TUBERIA REQUERIDA</p></div>
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="font-size: 0.7rem;">Para la instalacion:</span>
                                    </div>
                                    <input type="text" id="longuitud" name="longuitud" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="font-size: 0.7rem;">metros.</span>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-3">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">3. DIAMETRO DE MATRIZ DE AGUA</p></div>
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <input type="text" id="diametroMatriz" name="diametroMatriz" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="font-size: 0.7rem;">pulgadas(``).</span>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">4. TIPO DE TERRENO SOBRE EL QUE SE TRABAJARA LA CONEXION</p></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Tierra:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Pista:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Vereda:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Enboquillado:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Otros:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">5. TIPO DE PREDIO</p></div>
                            <div class="form-group mb-1">
                                <input type="text" class="form-control form-control-sm" id="otros" name="otros">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">6. OBSERVACIONES</p></div>
                            <div class="form-group mb-1">
                                <input type="text" class="form-control form-control-sm" id="otros" name="otros">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-warning py-1 mb-1 text-center"><p class="m-0">PARA CONEXIONES DE DESAGUE</p></div>
                        </div>
                        <div class="col-lg-5">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">1. DIAMETRO DE TUBERIA DE DESAGUE SOLICITADO</p></div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mb-1">
                                        <select class="form-control form-control-sm" name="diametroTuberia" id="diametroTuberia">
                                            <option selected disabled value="0">Seleccione</option>
                                            <option value="4 pulgada">4 pulgada</option>
                                            <option value="6 pulgada">6 pulgada</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Otros</span>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="otros" name="otros">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">2. LONGUITUD DE TUBERIA REQUERIDA</p></div>
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="font-size: 0.7rem;">Para la instalacion:</span>
                                    </div>
                                    <input type="text" id="longuitud" name="longuitud" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="font-size: 0.7rem;">metros.</span>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-3">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">3. DIAMETRO DE COLECTOR DE DESAGUE</p></div>
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <input type="text" id="diametroMatriz" name="diametroMatriz" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="font-size: 0.7rem;">pulgadas(``).</span>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text alert alert-info m-0">4. PROFUNDIDAD MAXIMA A CUAL LA CAJA DE REGISTRO DEBE TRABAJAR</span>
                                    </div>
                                    <input type="text" id="diametroMatriz" name="diametroMatriz" class="form-control">
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-info py-1 mb-1"><p class="m-0" style="font-size: .9rem;">5. TIPO DE TERRENO SOBRE EL QUE SE TRABAJARA LA CONEXION</p></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Tierra:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Pista:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Vereda:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Enboquillado:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group mb-1">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend w-100">
                                                <div class="input-group-text">
                                                    <input type="checkbox" id="" name="" value="">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Otros:</span>
                                                <div class="input-group-text">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                                <span class="input-group-text" style="font-size: 0.7rem;">Distancia:</span>
                                                <div class="input-group-text w-100">
                                                    <input type="text" id="" name="" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text alert alert-info m-0">6. BREVE EXPOSICION DEL TIPO O CALIDAD DE LAS AGUAS RESIDUALES AUTORIZADOS PARA SU VERTIMIENTO A LA RED PUBLICA</span>
                                    </div>
                                    <input type="text" id="diametroMatriz" name="diametroMatriz" class="form-control">
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-1">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text alert alert-info m-0">7. OBSERVACIONES</span>
                                    </div>
                                    <input type="text" id="diametroMatriz" name="diametroMatriz" class="form-control">
                                </div>
                            </div> 
                        </div>

                    </div>
                <!-- </form> -->
            </div>
            <div class="modal-footer py-1 border-transparent">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm btn-success saveDataMed"><i class="fa fa-save"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>
<script>
$('.saveDataMed').on('click',function(){
    saveDataMed();
});
function registrarAdicional(solnro)
{
    $('#modDataMedicion').modal('show');
    $('#solnroDataAdd').val(solnro);
    // jQuery.ajax(
    // { 
    //     url: "{{url('factibilidad/show')}}",
    //     data: {solnro:solnro},
    //     method: 'get',
    //     success: function(r){
    //         limpiarFormAddData();
    //         console.log(r);
    //         if(r.estado)
    //         {
    //             $('#tipoPropiedad').val(r.data.tipoPropiedad===null?'0':r.data.tipoPropiedad);
    //             $('#tipoConstruccion').val(r.data.tipoConstruccion===null?'0':r.data.tipoConstruccion);
    //             $('#otros').val(r.data.otros);
    //             $('#material').val(r.data.material);
    //             $('#numPisos').val(r.data.numPisos);
    //             $('#numFamilias').val(r.data.numFamilias);
    //             $('#numHabitantes').val(r.data.numHabitantes);
    //             $('#act').val(r.data.act);
    //             $('#tarifa').val(r.data.tarifa===null?'0':r.data.tarifa);
    //             $('#unidad').val(r.data.unidad);
    //             $('#servicio').val(r.data.servicio===null?'0':r.data.servicio);
    //             $('#formaPago').val(r.data.formaPago===null?'0':r.data.formaPago);
    //             $('#motivo').val(r.data.motivo);

    //             if(r.data.cuentaAlcantarillado=='1')
    //             {
    //                 $('#r1').attr('checked',true);
    //                 $('#ca1').val(r.data.dCuentaAlcantarillado);
    //             }
    //             else
    //             {
    //                 $('#r2').attr('checked',true);
    //                 $('#ca2').val(r.data.dCuentaAlcantarillado);
    //             }
                
    //             $('#cuenta').val(r.data.cuenta===null?'0':r.data.cuenta);
    //             $('#periodicidad').val(r.data.periodicidad===null?'0':r.data.periodicidad);
    //             $('#otros1').val(r.data.otros1);
    //             $('#cuentaPunto').val(r.data.cuentaPunto===null?'0':r.data.cuentaPunto);

    //             $('#resultado').val(r.data.resultado=='1'?'Positivo':'Negativo');

    //             $('#motivo1').val(r.data.motivo1);
    //             $('#obs').val(r.data.obs);
    //             $('#atendido').val(r.data.atendido===null?'0':r.data.atendido);
    //         }
    //         // else
    //         // {
                
    //         // }
    //         $('#modDataFactibilidad').modal('show');
    //     }
    // });
}
function dataAddMed()
{
    return {
        solnromedicion:$('#solnroDataAdd').val(),
        estado:$('#estado').val(),
        // tipoPropiedad:$('#tipoPropiedad').val(),
        // tipoConstruccion:$('#tipoConstruccion').val(),
        // otros:$('#otros').val(),
        // material:$('#material').val(),
        // numPisos:$('#numPisos').val(),
        // numFamilias:$('#numFamilias').val(),
        // numHabitantes:$('#numHabitantes').val(),
        // act:$('#act').val(),
        // tarifa:$('#tarifa').val(),
        // unidad:$('#unidad').val(),
        // servicio:$('#servicio').val(),
        // formaPago:$('#formaPago').val(),
        // motivo:$('#motivo').val(),
        // cuentaAlcantarillado:$('input[name=cuentaAlcantarillado]').prop('checked')?'1':'0',
        // dCuentaAlcantarillado:$('input[name=cuentaAlcantarillado]').prop('checked')?$('#ca1').val():$('#ca2').val(),
        // cuenta:$('#cuenta').val(),
        // periodicidad:$('#periodicidad').val(),
        // otros1:$('#otros1').val(),
        // cuentaPunto:$('#cuentaPunto').val(),
        // resultado:$('#resultado').val()=='Positivo'?'1':'0',
        // motivo1:$('#motivo1').val(),
        // obs:$('#obs').val(),
        // atendido:$('#atendido').val(),
    }
}
function saveDataMed()
{
    // if($('#formValRegFac').valid()==false)
    //     return;
    jQuery.ajax(
    { 
        url: "{{url('medicion/saveDataMed')}}",
        data: dataAddMed(),
        method: 'get',
        success: function(r){
            construirTabla();
            fillRegistros();
            $('#modDataMedicion').modal('hide');
            msjRee(r);
        }
    });
}
function limpiarFormAddData()
{
    $(".contFormAddData input[type=text]").val('');
    $(".contFormAddData textarea").val('');
    $('.contFormAddData select').val('0');
    $('input[name=cuentaAlcantarillado]').attr('checked',false)
}
</script>