<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: linear-gradient(-45deg,#212c50 50%,#20273e);">
    <a href="#" class="brand-link">
        <img src="{{asset('img/logo.jpg')}}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light ml-5">EMUSAP</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block text-center ocultarTextIzqNameUser nameSidebar" title="nombre apellido">
                    nombre apellido
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu">
                <!-- <li class="nav-item smPms"> submenu publico de solo lectura-->
                <li class="nav-item">
                    <a href="{{url('home/home')}}" class="sba1 nav-link bg-light">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p data-npms="dashboard">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-gears"></i>
                        <p>GENERAR<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('numero/numero')}}" class="nav-link sba2">
                                <i class="fa fa-file-word nav-icon"></i>
                                <p data-npms="persona" style="font-size: 0.91rem !important;">Numero de documentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('doc/doc')}}" class="nav-link sba2">
                                <i class="fa fa-file-word nav-icon"></i>
                                <p data-npms="persona">Contrato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('solicitud/solicitud')}}" class="nav-link sba2">
                                <i class="fa fa-file-word nav-icon"></i>
                                <p data-npms="persona">Solicitud</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-gears"></i>
                        <p>MANTENIMIENTO<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('persona/persona')}}" class="nav-link sba2">
                                <i class="fa fa-person nav-icon"></i>
                                <p data-npms="persona">Persona</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cp/cp')}}" class="nav-link sba2">
                                <i class="fa fa-person nav-icon"></i>
                                <p data-npms="persona">Costos colaterales</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-file-invoice-dollar"></i>
                        <p>Presupuesto<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('plantilla/plantilla')}}" class="nav-link sba2">
                                <i class="fa fa-person nav-icon"></i>
                                <p data-npms="persona">Plantillas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('presupuesto/cuadroPresupuestal')}}" class="nav-link sba2">
                                <i class="fa fa-person nav-icon"></i>
                                <p data-npms="persona">Registrar presupuesto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('presupuesto/presupuesto')}}" class="nav-link sba2">
                                <i class="fa fa-list nav-icon"></i>
                                <p data-npms="persona">Ver lista</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- <li class="sbd6 nav-item has-treeview onlyAdmin">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-users"></i>
                        <p>GES. DE USUARIOS<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('user')}}" class="nav-link sba21">
                                <i class="fa fa-user-check nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('rol')}}" class="nav-link sba22">
                                <i class="fa fa-gear nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item sidebarPermisosAdmin">
                            <a href="{{url('permiso')}}" class="nav-link sba23">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permisos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sbd1 nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-gears"></i>
                        <p>MANTENIMIENTO<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('persona')}}" class="nav-link sba2">
                                <i class="fa fa-person nav-icon"></i>
                                <p data-npms="persona">Persona</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('empresa')}}" class="nav-link sba3">
                                <i class="fa fa-building nav-icon"></i>
                                <p data-npms="empresa">Empresa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('ruta')}}" class="nav-link sba4">
                                <i class="fa fa-car-tunnel nav-icon"></i>
                                <p data-npms="ruta">Rutas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('servicio')}}" class="nav-link sba5">
                                <i class="fa-brands fa-opencart nav-icon"></i>
                                <p data-npms="servicio">Servicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('inspector')}}" class="nav-link sba6">
                                <i class="fa fa-user-tie nav-icon"></i>
                                <p data-npms="inspector">Inspector</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sbd2 nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-users-rays"></i>
                        <p>CONDUCTORES<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('conductor')}}" class="nav-link sba7">
                                <i class="fa fa-user-doctor nav-icon"></i>
                                <p data-npms="conductor">Conductor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('unidadVehicular')}}" class="nav-link sba8">
                                <i class="fa fa-car-side nav-icon"></i>
                                <p data-npms="unidadVehicular">Unidad v.</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cev')}}" class="nav-link sba9">
                                <i class="fa fa-id-card-clip nav-icon"></i>
                                <p data-npms="cev">Cev</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sbd3 nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-rug"></i>
                        <p>DOC.CIRCULACION<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('soat')}}" class="nav-link sba10">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p data-npms="soat">SOAT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cit')}}" class="nav-link sba11">
                                <i class="fa fa-id-card nav-icon"></i>
                                <p data-npms="cit">CIT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('tcv/tcv')}}" class="nav-link sba12">
                                <i class="fa-brands fa-cc-diners-club nav-icon"></i>
                                <p data-npms="tcv/registrar">TUC</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('tcv/listar')}}" class="nav-link sba13">
                                <i class="fa fa-list nav-icon"></i>
                                <p data-npms="tcv/listar">Listar TUC</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sbd4 nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-paste"></i>
                        <p>INFRACCION<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('infraccion/infraccion')}}" class="nav-link sba14">
                                <i class="fa fa-file-contract nav-icon"></i>
                                <p data-npms="infraccion/registrar">Infraccion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('infraccion/listar')}}" class="nav-link sba15">
                                <i class="fa fa-list nav-icon"></i>
                                <p data-npms="infraccion/listar">Ver infracciones</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sbd5 nav-item has-treeview smPms">
                    <a href="#" class="nav-link bg-secondary">
                        <i class="nav-icon fa fa-folder-minus"></i>
                        <p>DOCUMENTOS<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('plantilla')}}" class="nav-link sba16">
                                <i class="fa fa-table-columns nav-icon"></i>
                                <p data-npms="plantilla">Plantillas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('resolucion/resolucion')}}" class="nav-link sba17">
                                <i class="fa fa-file-lines nav-icon"></i>
                                <p data-npms="resolucion/registrar">Documentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('resolucion/listar')}}" class="nav-link sba18">
                                <i class="fa fa-list nav-icon"></i>
                                <p data-npms="resolucion/listar">Ver documentos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item smPms">
                    <a href="{{url('reporte')}}" class="nav-link bg-secondary sba20">
                        <i class="fa fa-toolbox nav-icon"></i>
                        <p data-npms="reporte">Reportes</p>
                    </a>
                </li> -->
                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Starter Pages<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link logout">
                        <i class="nav-icon fa fa-arrow-right-from-bracket"></i>
                        <p>Cerrar sesion</p>
                    </a>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>
<script>
    smPms();
    var content=false;
    function smPms()
    {
        $('.smPms').each(function(){
            // if($(this).prop('checked'))
            // {
            //     listRol.push($(this).val());
            //     console.log($(this).val());
            // }
            // console.log('nombre de los submenu->'+$(this).find('p').html());

            $(this).find('p').each(function(){
                console.log($(this).html());
                if(localStorage.getItem("pms").includes($(this).attr('data-npms')))
                {
                    console.log('si incluye-------------------');
                    $(this).parent().parent().css('display','block');
                    content=true;
                }
                else
                {
                    $(this).parent().parent().css('display','none');
                }
            });
            if(content)
            {
                $(this).css('display',content?'block':'none');
                content=false;
            }
            else
            {
                $(this).remove();
            }
            
            // $(this).css('display',content?'block':'none');
            // content=false;
            console.log('-----------------');
        });
    }
    // alert(JSON.parse(localStorage.getItem("userStart")).id);
    if(JSON.parse(localStorage.getItem("userStart")).id!=1)
    {
        $('.onlyAdmin').remove();
    }
    var userSidebar = JSON.parse(localStorage.getItem("userStart"));
    $('.nameSidebar').html(userSidebar.nombre+ ' '+userSidebar.apellido);
    $('.sidebarPermisosAdmin').remove();
</script>