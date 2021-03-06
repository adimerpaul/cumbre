<section role="main" class="content-body">
    <header class="page-header">
        <h2><?=$title?></h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Main</span></li>
                <li><span><?=$title?></span></li>
            </ol>
            <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
            <h2 class="panel-title"><?=$title?></h2>
        </header>
        <div class="panel-body">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                 <i class="fa fa-user"></i> Inscribir
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Realizar cobro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=base_url()?>Inscribir/registro" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="nombre" class="col-sm-2 col-form-label">nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre" placeholder="nombre" required  name="nombre">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="celular" class="col-sm-2 col-form-label">celular</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="celular" placeholder="celular"  name="celular">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="congregacion" class="col-sm-2 col-form-label">Congregacion</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="congregacion" placeholder="congregacion"  name="congregacion">
                                    </div>
                                </div>

                                <!--div class="form-group row">
                                    <label for="monto1" class="col-sm-2 col-form-label">monto1</label>
                                    <div class="col-sm-10">
                                        <input type="number" min="0" max="300" class="form-control" id="monto1" placeholder="monto1" required name="monto1">
                                    </div>
                                </div-->
                                <div class="form-group row">
                                    <label for="fechanac" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                    <div class="col-sm-10">
                                        <input type="date" min="0" max="300" class="form-control" id="fechanac" placeholder="fechanac"  name="fechanac">
                                    </div>
                                </div>
<!--                                <div class="form-group row">-->
<!--                                    <label for="email" class="col-sm-2 col-form-label">email</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="email" class="form-control" id="email" placeholder="email" name="email">-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-group row" >-->
<!--                                    <label for="codigo" class="col-sm-2 col-form-label">codigo</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <
<!--                                        <select name="codigo" id="codigo">-->
<!--                                            <option value="">Selecionar</option>-->
<!--                                            <option value="Estudiante">Estudiante</option>-->
<!--                                            <option value="Egresado">Egresado</option>-->
<!--                                            <option value="Docente interno">Docente interno</option>-->
<!--                                            <option value="Docente externo">Docente externo</option>-->
<!--                                            <option value="Otros">Otros</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--div class="form-group row">
                                    <label for="tipo" class="col-sm-2 col-form-label">tipo</label>
                                    <div class="col-sm-10">
                                        <select name="tipo" id="tipo" class="form-control" required>
                                            <option value="">Selecionar..</option>
                                            <option value="EFECTIVO">EFECTIVO</option>
                                            <option value="BOLETA">BOLETA</option>
                                        </select>
                                        <script >
                                            var select = document.getElementById('tipo');
                                            select.addEventListener('change',
                                                function(){
                                                    var selectedOption = this.options[select.selectedIndex];
                                                    if (selectedOption.value==="BOLETA"){
                                                        document.getElementById('contenedor').style.visibility="visible";
                                                    }else{
                                                        document.getElementById('contenedor').style.visibility="hidden";
                                                    }
                                                });
                                        </script>
                                    </div>
                                </div-->
<!--                                <div class="form-group row" id="contenedor" style="visibility: hidden">-->
<!--                                    <label for="codigoboleta" class="col-sm-2 col-form-label">codigoboleta</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="text" class="form-control" id="codigoboleta" placeholder="codigoboleta" name="codigoboleta">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group row">-->
<!--                                    <div class="col-sm-2"></div>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <a href="fotos/user.jpg" id="contenedorfoto"><img  src="fotos/user.jpg" id="foto"  alt="foto" width="200"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group row" id="contenedor" hidden>-->
<!--                                    <label for="codigoboleta" class="col-sm-2 col-form-label">Fotografia</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="file" class="form-control"  name="foto">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group row" hidden>-->
<!--                                    <label for="material" class="col-sm-2 col-form-label">material</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="text" class="form-control" id="material" placeholder="material" required name="material" value="no">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group row" hidden>-->
<!--                                    <label for="certificado" class="col-sm-2 col-form-label">certificado</label>-->
<!--                                    <div class="col-sm-10">-->
<!--                                        <input type="text" class="form-control" id="certificado" placeholder="certificado" required name="certificado" value="no">-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-details">
                <thead>
                <tr>
                    <th>Persona</th>
                    <th>Fecha</th>
                    <th>congregacions</th>
                    <th>fecha nacimiento</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $query=$this->db->query("SELECT * FROM estudiante ORDER BY fecha DESC ");
                foreach ($query->result() as $row){

//                    if(substr( $row->fecha,0,10)==date("Y-m-d"))
                    echo "<tr class='gradeX'>
                                <td>$row->nombre</td>
                                <td>".$row->fecha."</td>
                                <td>".$row->congregacion."</td>
                                <td class='center'>".$row->fechanac."</td>                                
                            </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- end: page -->
</section>
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realizar cobro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url()?>inscribir/modificar" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="monto1m" class="col-sm-2 col-form-label">monto1m</label>
                        <input type="text" name="ciestudiante"  id="ciestudiantem" hidden>
                        <div class="col-sm-10">
                            <input type="number" min="0" max="250" class="form-control" id="monto1m" placeholder="monto1m" required name="monto1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="monto2m" class="col-sm-2 col-form-label">monto2m</label>
                        <div class="col-sm-10">
                            <label id="faltante" hidden></label>
                            <input type="number" min="0" max="250" class="form-control " id="monto2m" placeholder="monto2m"  name="monto2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <a href="fotos/user.jpg" id="contenedorfotom"><img  src="fotos/user.jpg" id="fotom"  alt="foto" width="200"></a>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="codigoboleta" class="col-sm-2 col-form-label">Fotografia</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control"  name="foto">
                        </div>
                    </div>
                    <div class="form-group row" hidden>
                        <label for="material" class="col-sm-2 col-form-label">material</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="material" placeholder="material" required name="material" value="no">
                        </div>
                    </div>
                    <div class="form-group row" hidden>
                        <label for="certificado" class="col-sm-2 col-form-label">certificado</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="certificado" placeholder="certificado" required name="certificado" value="no">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Modificar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
