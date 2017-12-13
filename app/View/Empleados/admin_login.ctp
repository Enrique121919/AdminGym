<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
	            <div class="panel-heading">
	                <h3 class="panel-title">Ingresa tus datos</h3>
	            </div>
                <div class="panel-body">
                    <div class="Empleado">
						
						<?php echo $this->Form->create('Empleado'); ?>
	        			<?php 
	        				echo $this->Form->input('usuario' ,array('class' => 'form-control'));
	        				echo '<br>';
	        				echo $this->Form->input('clave',array('type'=>'password', 'class' => 'form-control'));
	        				echo '<br>';
	        				echo $this->Form->submit('Iniciar', array('div' => 'form-group','class' => 'btn btn-primary btn-block'));
	    				?>
	    				
						
						<?php echo $this->Form->end(); ?>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>