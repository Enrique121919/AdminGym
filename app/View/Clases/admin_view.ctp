<div class="clases view">
<h2><?php echo __('Clase'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clase['Instructor']['id'], array('controller' => 'instructores', 'action' => 'view', $clase['Instructor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['ubicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['costo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clase'), array('action' => 'edit', $clase['Clase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clase'), array('action' => 'delete', $clase['Clase']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clase['Clase']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('controller' => 'instructores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructor'), array('controller' => 'instructores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos'); ?></h3>
	<?php if (!empty($clase['Curso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dia'); ?></th>
		<th><?php echo __('Hora'); ?></th>
		<th><?php echo __('Clase Id'); ?></th>
		<th><?php echo __('Miembro Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clase['Curso'] as $curso): ?>
		<tr>
			<td><?php echo $curso['id']; ?></td>
			<td><?php echo $curso['dia']; ?></td>
			<td><?php echo $curso['hora']; ?></td>
			<td><?php echo $curso['clase_id']; ?></td>
			<td><?php echo $curso['miembro_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), array('confirm' => __('Are you sure you want to delete # %s?', $curso['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
