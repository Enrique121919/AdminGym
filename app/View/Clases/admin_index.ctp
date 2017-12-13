<div class="page-header">
<br>
	<h2 style="color:white;"><?php echo __('Clases'); ?></h2>
</div>
    <div class="col-sm-2 col-md-2 sidebar">
	<h3 style="color:white;"><?php echo __('Acciones'); ?></h3>
		<ul>
			<?php echo $this->Html->link(__('Nueva Clase'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
			<?php echo $this->Html->link(__('Lista Instructores'), array('controller' => 'instructores', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nuevo Instructor'), array('controller' => 'instructores', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Lista Cursos'), array('controller' => 'cursos', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
			<?php echo $this->Html->link(__('Nuevo Curso'), array('controller' => 'cursos', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
		</ul>
    </div>

		<div class="col-md-9">
			<table class="table table-hover">
			<br>
			<br>
			<br>
	<thead>
	<tr>
			<th style="color:white">ID</th>
			<th style="color:white">NOMBRE</th>
			<th style="color:white">DESCRIPCION</th>
			<th style="color:white">UBICACION</th>
			<th style="color:white">COSTO</th>
			<th style="color:white"> ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clases as $clase): ?>
	<tr>
		<td style="color:white"><?php echo h($clase['Clase']['id']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($clase['Clase']['nombre']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($clase['Clase']['descripcion']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($clase['Clase']['ubicacion']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($clase['Clase']['costo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clase['Clase']['id']), array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clase['Clase']['id']), array('class'=>'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clase['Clase']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $clase['Clase']['id']))); ?>
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

