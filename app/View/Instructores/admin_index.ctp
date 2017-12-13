<div class="page-header">
<br>
	<h2 style="color:white;"><?php echo __('Instructores'); ?></h2>
</div>
	<div class="col-sm-2 col-md-2 sidebar">
		<h3 style="color:white;"><?php echo __('Actions'); ?></h3>
		<div class="list-group">
			<ul>
				<?php echo $this->Html->link(__('Nuevo Instructor'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('Lista Clases'), array('controller' => 'clases', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Nuevo Clase'), array('controller' => 'clases', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</ul>
		</div>
	</div>
		<div class="col-md-9">

	<table class="table table-hover">

	<thead>
	<tr>
			<th style="color:white;" style="color:white;">ID</th>
			<th style="color:white;" style="color:white;">NOMBRE</th>
			<th style="color:white;" style="color:white;">APELLIDO</th>
			<th style="color:white;" style="color:white;">TELEFONO</th>
			<th style="color:white;" style="color:white;">EMAIL</th>
			<th style="color:white;" style="color:white;">ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($instructores as $instructor): ?>
	<tr>
		<td style="color:white;"><?php echo h($instructor['Instructor']['id']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($instructor['Instructor']['nombre']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($instructor['Instructor']['apellido']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($instructor['Instructor']['telefono']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($instructor['Instructor']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instructor['Instructor']['id']), array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instructor['Instructor']['id']), array('class'=>'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instructor['Instructor']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $instructor['Instructor']['id']))); ?>
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

