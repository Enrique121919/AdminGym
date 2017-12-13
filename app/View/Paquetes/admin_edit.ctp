<div class="paquetes form">
<br>
<br>
<br>
	<div class="col-sm-2 col-md-2 sidebar">
	<br>
		<h3><?php echo __('Acciones'); ?></h3>
		<div class="list-group">
		<ul>
			<?php echo $this->Html->link(__('Lista Paquetes'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
		</div>
	</div>
<?php echo $this->Form->create('Paquete'); ?>
	<fieldset>
		<legend><?php echo __('Editar Paquete'); ?></legend>
	<?php
		echo $this->Form->input('id', array ('class'=>'form-control'));
		echo $this->Form->input('nombre', array ('class'=>'form-control'));
		echo $this->Form->input('descripcion', array ('class'=>'form-control'));
		echo $this->Form->input('precio', array ('class'=>'form-control'));
		echo $this->Form->input('duracion', array ('class'=>'form-control'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

