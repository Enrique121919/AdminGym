<div class="miembros form">
<br>
<br>
<br>

	<div class="col-sm-2 col-md-2 sidebar">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<?php echo $this->Html->link(__('List Miembros'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
		</ul>
	</div>
<?php echo $this->Form->create('Miembro'); ?>
	<fieldset>
		<legend><?php echo __('Edit Miembro'); ?></legend>
	<?php
		echo $this->Form->input('id', array ('class'=>'form-control'));
		echo $this->Form->input('nombre', array ('class'=>'form-control'));
		echo $this->Form->input('apellido', array ('class'=>'form-control'));
		echo $this->Form->input('edad', array ('class'=>'form-control'));
		echo $this->Form->input('telefono', array ('class'=>'form-control'));
		echo $this->Form->input('email', array ('class'=>'form-control'));
		echo $this->Form->input('sexo', array ('class'=>'form-control'));
		echo $this->Form->input('foto', array ('class'=>'form-control'));
		echo $this->Form->input('fecha_alta', array ('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

