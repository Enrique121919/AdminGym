<div class="page-header">
<br>
	<h2 style="color:white;"><?php echo __('Empleados'); ?></h2>
</div>
	<div class="col-sm-2 col-md-2 sidebar">
		<h3 style="color:white;"><?php echo __('Acciones'); ?></h3>
			<ul>
				<?php echo $this->Html->link(__('Nuevo Empleado'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('Lista Tipos'), array('controller' => 'tipos', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Nuevo Tipo'), array('controller' => 'tipos', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Lista Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Neva Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</ul>
	</div>



	<div class="col-md-10">
		<table class="table table-hover">
	<thead>
	<tr>
			<th style="color:white">ID</th>
			<th style="color:white">NOMBRE</th>
			<th style="color:white">APELLIDO</th>
			<th style="color:white">DIRECCION</th>
			<th style="color:white">TELEFONO</th>
			<th style="color:white">EDAD</th>
			<th style="color:white">SEXO</th>
			<th style="color:white">USUARIO</th>
			
			<th style="color:white">ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empleados as $empleado): ?>
	<tr>
		<td style="color:white"><?php echo h($empleado['Empleado']['id']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['nombre']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['apellido']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['direccion']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['telefono']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['edad']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['sexo']); ?></td>
		<td style="color:white"><?php echo h($empleado['Empleado']['usuario']); ?></td>
		
		<td class="actions" style="color:white">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empleado['Empleado']['id']), array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empleado['Empleado']['id']), array('class'=>'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empleado['Empleado']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $empleado['Empleado']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paging btn-group page-buttons">
	<?php
		echo $this->Paginator->prev('< ' . __d('users', 'previous'), array('class' => 'btn btn-default prev', 'tag' => 'button'), null, array('class' => 'btn btn-default prev disabled', 'tag' => 'button'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn btn-default', 'currentClass' => 'disabled', 'tag' => 'button'));
		 echo $this->Paginator->next(__d('users', 'next') . ' >', array('class' => 'btn btn-default next', 'tag' => 'button'), null, array('class' => 'btn btn-default next disabled', 'tag' => 'button'));
	?>
	</div>
</div>

