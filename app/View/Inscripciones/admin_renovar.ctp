<div class="inscripciones form">
<br>
<br>
<br>
	<div class="col-sm-2 col-md-2 sidebar">
		<h3><?php echo __('Acciones'); ?></h3>
		<ul>			
			<?php echo $this->Html->link(__('Lista Inscripciones'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
		</ul>
	</div>
<?php echo $this->Form->create('Inscripcion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Inscripcion'); ?></legend>
	<?php
		echo $this->Form->input('id', array ('class'=>'form-control'));
		echo $this->Form->input('miembro_id', array ('class'=>'form-control'));
		echo $this->Form->input('paquete_id', array ('class'=>'form-control'));
		echo $this->Form->input('empleado_id', array ('class'=>'form-control'));
		echo $this->Form->input('fecha', array ('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
