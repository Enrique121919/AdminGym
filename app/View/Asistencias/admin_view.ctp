<div class="asistencias view">
<h2><?php echo __('Asistencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($asistencia['Asistencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miembro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($asistencia['Miembro']['id'], array('controller' => 'miembros', 'action' => 'view', $asistencia['Miembro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($asistencia['Asistencia']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asistencia'), array('action' => 'edit', $asistencia['Asistencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asistencia'), array('action' => 'delete', $asistencia['Asistencia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $asistencia['Asistencia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Asistencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asistencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Miembros'), array('controller' => 'miembros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miembro'), array('controller' => 'miembros', 'action' => 'add')); ?> </li>
	</ul>
</div>
