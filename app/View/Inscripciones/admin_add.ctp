<br>
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Lista Inscripciones'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
	</ul>
	</div>
</div>
<div class="inscripciones form">
<?php echo $this->Form->create('Inscripcion'); ?>
	<fieldset>
		<legend><?php echo __('Add Inscripcion'); ?></legend>
	<?php
		echo $this->Form->input('miembro_id', array ('class'=>'form-control'));
		echo $this->Form->input('paquete_id', array ('class'=>'form-control'));
		echo $this->Form->input('empleado_id', array ('class'=>'form-control'));
		echo $this->Form->input('fecha', array ('class'=>'datepicker'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

