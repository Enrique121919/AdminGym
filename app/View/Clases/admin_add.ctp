<br>
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Lista Clases'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
	</ul>
	</div>
</div>
<div class="clases form">
<?php echo $this->Form->create('Clase'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Clase'); ?></legend>
	<?php
		echo $this->Form->input('instructor_id', array ('class'=>'form-control'));
		echo $this->Form->input('nombre', array ('class'=>'form-control'));
		echo $this->Form->input('descripcion', array ('class'=>'form-control'));
		echo $this->Form->input('ubicacion', array ('class'=>'form-control'));
		echo $this->Form->input('costo', array ('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

