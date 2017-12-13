    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">                
                    
            </div>
            <div class="row">
                <div class="col-lg-12">
                                    <h1 class="page-header">Check List</h1>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <tbody>
                                                <?php
                                               App::uses('CakeTime', 'Utility');
                                                foreach($check_list as $inscripcion):?>
                                                <tr> 
                                                    <?php if (CakeTime::isToday($inscripcion['Inscripcion']['fecha_fin'])) {?>
                                                        <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <?php echo 'La membresía del miembro '.$inscripcion['Miembro']['nombre'].' vence el dia de hoy '.''.$inscripcion['Inscripcion']['fecha_fin'];?>
                                                        </div><?php
                                                    } else if (CakeTime::isTomorrow($inscripcion['Inscripcion']['fecha_fin'])) {?>
                                                    <div class="alert alert-warning alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                     <?php echo 'La membresía del miembro '.$inscripcion['Miembro']['nombre'].' vence mañana: '.''.$inscripcion['Inscripcion']['fecha_fin'];?></div>
                                                        <?php 
                                                        } else if (CakeTime::isPast($inscripcion['Inscripcion']['fecha_fin'])) {?>
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                     <?php echo 'La membresía del miembro '.$inscripcion['Miembro']['nombre'].' vencio: '.''.$inscripcion['Inscripcion']['fecha_fin'];?></div>
                                                        <?php 
                                                        }else if (CakeTime::isThisWeek($inscripcion['Inscripcion']['fecha_fin'])) {?>
                                                    <div class="alert alert-info alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                     <?php echo 'La membresía del miembro '.$inscripcion['Miembro']['nombre'].' vence esta semana: '.''.$inscripcion['Inscripcion']['fecha_fin'];?></div>
                                                        <?php 
                                                        }?>                                       
                                                </tr>
                                                 <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>  
                    </div>
                
            </div>
        </div>
    </div>