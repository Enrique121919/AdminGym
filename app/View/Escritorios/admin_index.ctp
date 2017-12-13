    <?php 
    echo $this->Html->script(array('bootstrap.min.js', 'DataTables.js', 'DataTablesuno.js', 'DataTablesdos.js','app.js'));
    ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
            <br>
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>MIEMBROS</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->Html->link(__('Agregar'), array('controller' => 'miembros', 'action' => 'add')); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2</div>
                                    <div>CLASES</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->Html->link(__('Agregar'), array('controller' => 'clases', 'action' => 'add')); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>INSTRUCTOR</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->Html->link(__('Agregar'), array('controller' => 'instructores', 'action' => 'add')); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>PAQUETES</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->Html->link(__('Agregar'), array('controller' => 'paquetes', 'action' => 'add')); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Miembros Suscritos
                        </div>                       
                        <div class="panel-body">
                        </div>                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover table-striped" >
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>APELLIDO</th>
                                                    <th>TELEFONO</th>
                                                    <th>EMAIL</th>
                                                    <th>ALTA</th>
                                                    <th>ESTADO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($inscripciones as $miembro): ?>
                                                    <tr>
                                                        <td><?php echo $miembro['Miembro']['id']; ?></td>
                                                        <td><?php echo $miembro['Miembro']['nombre']; ?></td>
                                                        <td><?php echo $miembro['Miembro']['apellido']; ?></td>
                                                        <td><?php echo $miembro['Miembro']['telefono']; ?></td>
                                                        <td><?php echo $miembro['Miembro']['email']; ?></td>
                                                        <td><?php App::uses('CakeTime', 'Utility');
                                                        echo CakeTime::format($miembro['Miembro']['fecha_alta'], '%d-%m-%Y');?></td>
                                                        <td align="center">
                                                        <?php
                                                        App::uses('CakeTime', 'Utility'); 
                                                        if (CakeTime::isToday($miembro['Inscripcion']['fecha_fin'])) { ?> 
                                                            <h4><span class="rojo">1</span></h4>
                                                        <?php

                                                    } else if (CakeTime::isTomorrow($miembro['Inscripcion']['fecha_fin'])) { ?> 
                                                            <h4><span class="rojo">1</span></h4>
                                                        <?php

                                                        }else if (CakeTime::isPast($miembro['Inscripcion']['fecha_fin'])) { ?> 
                                                            <h4><span class="rojo">1</span></h4>
                                                        <?php

                                                        } else if (CakeTime::isThisWeek($miembro['Inscripcion']['fecha_fin'])) { ?> 
                                                            <h4><span class="naranja">1</span></h4>
                                                        <?php

                                                        }else {
                                                            ?> 
                                                            <h4><span class="verde">1</span></h4>
                                                        <?php
                                                            }?>
                                                    </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Membresías Por Vencer
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>APELLIDO</th>
                                                    <th>SEXO</th>
                                                    <th>PAQUETE</th>
                                                    <th>INICIO</th>
                                                    <th>FIN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php foreach($inscripciones as $inscripcion): ?>
                                                    <tr>
                                                        <td><?php echo $inscripcion['Miembro']['id']; ?></td>
                                                        <td><?php echo $inscripcion['Miembro']['nombre']; ?></td>
                                                        <td><?php echo $inscripcion['Miembro']['apellido']; ?></td>
                                                        <td><?php echo $inscripcion['Miembro']['sexo']; ?></td>
                                                        <td><?php echo $inscripcion['Paquete']['nombre']; ?></td>
                                                        <td><?php echo $inscripcion['Inscripcion']['fecha']; ?></td>
                                                        <td><?php echo $inscripcion['Inscripcion']['fecha_fin']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Clases Disponibles
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>DESCRIPCION</th>
                                                    <th>UBICACION</th>
                                                    <th>COSTO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($clases as $clase): ?>
                                                    <tr>
                                                        <td><?php echo $clase['Clase']['id']; ?></td>
                                                        <td><?php echo $clase['Clase']['descripcion']; ?></td>
                                                        <td><?php echo $clase['Clase']['ubicacion']; ?></td>
                                                        <td><?php echo $clase['Clase']['costo']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Panel De Notificaciones
                        </div> 
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <tbody>
                                                <?php
                                                App::uses('CakeTime', 'Utility');
                                                foreach($inscripciones as $inscripcion):?>
                                                <tr> 
                                                    <?php if (CakeTime::isToday($inscripcion['Inscripcion']['fecha_fin'])) {?>
                                                        <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <?php echo 'La membresía del miembro '.$inscripcion['Miembro']['nombre'].' vence el dia de hoy '.''.$inscripcion['Inscripcion']['fecha_fin'];?>
                                                        </div><?php
                                                    }else if (CakeTime::isThisWeek($inscripcion['Inscripcion']['fecha_fin'])) {?>
                                                    <div class="alert alert-info alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                     <?php echo 'La membresía del miembro '.$inscripcion['Miembro']['nombre'].' vence esta semana: '.''.$inscripcion['Inscripcion']['fecha_fin'];
                                                        }?>
                                                        </div>
                                                </tr>
                                                 <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Ver Todas Las Alertas</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Paquetes
                        </div>
                        <div class="panel-body">
                        <div class="list-group">
                             <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>CANTIDAD</th>
                                                    <th>COSTO</th>
                                                    <th>DURACION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($paquetes as $paquete): ?>
                                                    <tr>
                                                        <td><?php echo $paquete['Paquete']['id']; ?></td>
                                                        <td><?php echo $paquete['Paquete']['nombre']; ?></td>
                                                        <td><?php echo $paquete['Paquete']['descripcion']; ?></td>
                                                        <td><?php echo $paquete['Paquete']['precio']; ?></td>
                                                        <td><?php echo $paquete['Paquete']['duracion']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <a href="#" class="btn btn-default btn-block">Ver Detalles</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->