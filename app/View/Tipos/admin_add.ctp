<br>
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Lista Tipos'), array('action' => 'index')); ?>
	</ul>
	</div>
</div>
<div class="tipos form">
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Tipo'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array ('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

