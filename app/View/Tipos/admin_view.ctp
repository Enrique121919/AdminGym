<div class="tipos view">
<h2><?php echo __('Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo'), array('action' => 'edit', $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo'), array('action' => 'delete', $tipo['Tipo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipo['Tipo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Empleados'); ?></h3>
	<?php if (!empty($tipo['Empleado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipo['Empleado'] as $empleado): ?>
		<tr>
			<td><?php echo $empleado['id']; ?></td>
			<td><?php echo $empleado['tipo_id']; ?></td>
			<td><?php echo $empleado['nombre']; ?></td>
			<td><?php echo $empleado['apellido']; ?></td>
			<td><?php echo $empleado['direccion']; ?></td>
			<td><?php echo $empleado['telefono']; ?></td>
			<td><?php echo $empleado['edad']; ?></td>
			<td><?php echo $empleado['sexo']; ?></td>
			<td><?php echo $empleado['email']; ?></td>
			<td><?php echo $empleado['foto']; ?></td>
			<td><?php echo $empleado['usuario']; ?></td>
			<td><?php echo $empleado['clave']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empleados', 'action' => 'view', $empleado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empleados', 'action' => 'edit', $empleado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empleados', 'action' => 'delete', $empleado['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empleado['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
