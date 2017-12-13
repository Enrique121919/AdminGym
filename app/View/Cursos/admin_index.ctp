<div class="page-header">
<br>
	<h2 style="color:white;"><?php echo __('Cursos'); ?></h2>
</div>
	 <div class="col-sm-3 col-md-3 sidebar">
		<h3 style="color:white;"><?php echo __('Acciones'); ?></h3>
			<ul>
				<?php echo $this->Html->link(__('Nuevo Curso'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('Lista Clases'), array('controller' => 'clases', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Nuevo Clase'), array('controller' => 'clases', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'miembros', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'miembros', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</ul>
	</div>


	<div class="col-md-9">
		<table class="table table-hover">
		<br>
		<br>
		<br>

	<thead>
	<tr>
			<th style="color:white;">ID</th>
			<th style="color:white;">DIA</th>
			<th style="color:white;">HORA</th>
			<th style="color:white;">NOMBRE</th>
			<th style="color:white;">MIEMBRO</th>
			<th style="color:white;">ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cursos as $curso): ?>
	<tr>
		<td style="color:white;"><?php echo h($curso['Curso']['id']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($curso['Curso']['dia']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($curso['Curso']['hora']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($curso['Clase']['nombre']); ?>&nbsp;</td>
		<td style="color:white;"><?php echo h($curso['Miembro']['nombre']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $curso['Curso']['id']), array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $curso['Curso']['id']), array('class'=>'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $curso['Curso']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $curso['Curso']['id']))); ?>
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

