<br>
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Lista Empleados'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
	</ul>
	</div>
</div>
<div class="empleados form">
<?php echo $this->Form->create('Empleado'); ?>
	<fieldset>
		<legend><?php echo __('Add Empleado'); ?></legend>
	<?php
        
		echo $this->Form->input('tipo_id', array ('class'=>'form-control'));
		echo $this->Form->input('nombre', array ('class'=>'form-control'));
		echo $this->Form->input('apellido', array ('class'=>'form-control'));
		echo $this->Form->input('direccion', array ('class'=>'form-control'));
		echo $this->Form->input('telefono', array ('class'=>'form-control'));
		echo $this->Form->input('edad', array ('class'=>'form-control'));
		echo $this->Form->input('sexo', array ('class'=>'form-control'));
		echo $this->Form->input('email', array ('class'=>'form-control'));
		echo $this->Form->input('foto', array ('class'=>'form-control'));
		echo $this->Form->input('usuario', array ('class'=>'form-control'));
		echo $this->Form->input('clave', array ('type'=>'password','class'=>'form-control'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

