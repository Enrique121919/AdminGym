<div class="asistencias form">
<?php echo $this->Form->create('Asistencia'); ?>
	<fieldset>
		<legend><?php echo __('Add Asistencia'); ?></legend>
	<?php
		echo $this->Form->input('miembro_id');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Asistencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Miembros'), array('controller' => 'miembros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miembro'), array('controller' => 'miembros', 'action' => 'add')); ?> </li>
	</ul>
</div>
