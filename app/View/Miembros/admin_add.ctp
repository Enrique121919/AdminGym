<br>
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Lista Miembros'), array('action' => 'index')); ?>
	</ul>
	</div>
</div>
<div class="miembros form">
<?php echo $this->Form->create('Miembro'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Miembro'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array ('class'=>'form-control'));
		echo $this->Form->input('apellido', array ('class'=>'form-control'));
		echo $this->Form->input('edad', array ('class'=>'form-control'));
		echo $this->Form->input('telefono', array ('class'=>'form-control'));
		echo $this->Form->input('email', array ('class'=>'form-control'));
		echo $this->Form->input('sexo', array ('class'=>'form-control'));
		echo $this->Form->input('foto', array ('class'=>'form-control'));
		echo $this->Form->input('fecha_alta', array ('class'=>'datepicker'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

