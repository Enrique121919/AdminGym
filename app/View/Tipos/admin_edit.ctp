<div class="tipos form">
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('List Tipos'), array('action' => 'index'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
	</ul>
	</div>
</div>
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id', array ('class'=>'form-control'), array ('class'=>'form-control'));
		echo $this->Form->input('nombre', array ('class'=>'form-control'), array ('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

