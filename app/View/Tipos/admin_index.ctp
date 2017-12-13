<div class="page-header">
<br>
	<h2 style="color:white"><?php echo __('Tipos'); ?></h2>
 </div>
	<div class="col-sm-3 col-md-3 sidebar">
		<h3 style="color:white"><?php echo __('Acciones'); ?></h3>
		<div class="list-group">
		<ul>
			<?php echo $this->Html->link(__('Nuevo Tipo'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
			<?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'empleados', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'empleados', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
		</ul>
		</div>
	</div>
	<div class="col-md-8">

	<table class="table table-hover">
	<thead>
	<tr>
			<th style="color:white">ID</th>
			<th style="color:white">NOMBRE</th>
			<th style="color:white">ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipos as $tipo): ?>
	<tr>
		<td style="color:white"><?php echo h($tipo['Tipo']['id']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($tipo['Tipo']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'ver', $tipo['Tipo']['id']), array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'editar', $tipo['Tipo']['id']), array('class'=>'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'eliminar', $tipo['Tipo']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $tipo['Tipo']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>

	<div class="paging btn-group page-buttons">
	<?php
		echo $this->Paginator->prev('< ' . __d('users', 'previous'), array('class' => 'btn btn-default prev', 'tag' => 'button'), null, array('class' => 'btn btn-default prev disabled', 'tag' => 'button'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn btn-default', 'currentClass' => 'disabled', 'tag' => 'button'));
		echo $this->Paginator->next(__d('users', 'next') . ' >', array('class' => 'btn btn-default next', 'tag' => 'button'), null, array('class' => 'btn btn-default next disabled', 'tag' => 'button'));
	?>
	</div>
