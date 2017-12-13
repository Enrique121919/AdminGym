<div class="instructores view">
<h2><?php echo __('Instructor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['foto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instructor'), array('action' => 'edit', $instructor['Instructor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instructor'), array('action' => 'delete', $instructor['Instructor']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $instructor['Instructor']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clases'); ?></h3>
	<?php if (!empty($instructor['Clase'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instructor Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Costo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($instructor['Clase'] as $clase): ?>
		<tr>
			<td><?php echo $clase['id']; ?></td>
			<td><?php echo $clase['instructor_id']; ?></td>
			<td><?php echo $clase['nombre']; ?></td>
			<td><?php echo $clase['descripcion']; ?></td>
			<td><?php echo $clase['ubicacion']; ?></td>
			<td><?php echo $clase['costo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clases', 'action' => 'view', $clase['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clases', 'action' => 'edit', $clase['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clases', 'action' => 'delete', $clase['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clase['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
