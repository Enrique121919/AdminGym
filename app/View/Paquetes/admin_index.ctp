<div class="page-header">
<br>
	<h2 style="color:white" style="color:white"><?php echo __('Paquetes'); ?></h2>
</div>
<div class="col-sm-3 col-md-3 sidebar">
	<h3 style="color:white" style="color:white"><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Paquete nuevo'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
		<?php echo $this->Html->link(__('Lista Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index'), array('class'=>'list-group-item')); ?> 
		<?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add'), array('class'=>'list-group-item')); ?> 
	</ul>
	</div>
</div>
   	<div class="col-md-9">
	<table class="table table-hover">
	<br>
	<br>
	<thead>
	<tr>
			<th style="color:white">ID</th>
			<th style="color:white">NOMBRE</th>
			<th style="color:white">DESCRIPCION</th>
			<th style="color:white">PRECIO</th>
			<th style="color:white">DURACION</th>
			<th style="color:white" style="color:white">ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paquetes as $paquete): ?>
	<tr>
		<td style="color:white"><?php echo h($paquete['Paquete']['id']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($paquete['Paquete']['nombre']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($paquete['Paquete']['descripcion']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($paquete['Paquete']['precio']); ?>&nbsp;</td>
		<td style="color:white"><?php echo h($paquete['Paquete']['duracion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $paquete['Paquete']['id']), array('class'=>'btn btn-default')); ?>&nbsp;
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $paquete['Paquete']['id']), array('class'=>'btn btn-warning')); ?>&nbsp;
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $paquete['Paquete']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $paquete['Paquete']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
		<div class="paging btn-group page-buttons">
			<p>
			<?php
		    echo $this->Paginator->prev('< ' . __d('users', 'previous'), array('class' => 'btn btn-default prev', 'tag' => 'button'), null, array('class' => 'btn btn-default prev disabled', 'tag' => 'button'));
		    echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn btn-default', 'currentClass' => 'disabled', 'tag' => 'button'));
		    echo $this->Paginator->next(__d('users', 'next') . ' >', array('class' => 'btn btn-default next', 'tag' => 'button'), null, array('class' => 'btn btn-default next disabled', 'tag' => 'button'));
		    ?>	    
		</div>


