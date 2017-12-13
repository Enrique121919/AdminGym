<div class="cursos view">
<h2><?php echo __('Curso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['dia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['hora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clase'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Clase']['id'], array('controller' => 'clases', 'action' => 'view', $curso['Clase']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miembro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Miembro']['id'], array('controller' => 'miembros', 'action' => 'view', $curso['Miembro']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $curso['Curso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Miembros'), array('controller' => 'miembros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miembro'), array('controller' => 'miembros', 'action' => 'add')); ?> </li>
	</ul>
</div>
