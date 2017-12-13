<div class="table table-striped">
 <div class="col-md-9">
 <h2><?php echo __('Empleado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empleado['Tipo']['id'], array('controller' => 'tipos', 'action' => 'view', $empleado['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['clave']); ?>
			&nbsp;
		</dd>
	</dl>
 </div>
 <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado'), array('action' => 'edit', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado'), array('action' => 'delete', $empleado['Empleado']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empleado['Empleado']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
 </div>
 <div class="related">
	<h3><?php echo __('Related Inscripciones'); ?></h3>
	<?php if (!empty($empleado['Inscripcion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Miembro Id'); ?></th>
		<th><?php echo __('Paquete Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empleado['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id']; ?></td>
			<td><?php echo $inscripcion['miembro_id']; ?></td>
			<td><?php echo $inscripcion['paquete_id']; ?></td>
			<td><?php echo $inscripcion['empleado_id']; ?></td>
			<td><?php echo $inscripcion['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscripciones', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscripciones', 'action' => 'edit', $inscripcion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscripciones', 'action' => 'delete', $inscripcion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
 <?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
   </div>
</div>
