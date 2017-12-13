<div class="page-header">
 <br>
	<h2 style="color:white;"><?php echo __('Inscripciones'); ?></h2>
</div>
		<h3 style="color:white;"><?php echo __('Acciones'); ?></h3>
		<div class="col-sm-3 col-md-3 sidebar">
			<div class="list-group">
				<ul>
					<?php echo $this->Html->link(__('Nueva inscripción'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
					<?php echo $this->Html->link(__('Lista Miembros'), array('controller' => 'miembros', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('Nuevo Miembro'), array('controller' => 'miembros', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('Lista Paquetes'), array('controller' => 'paquetes', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('Nuevo Paquete'), array('controller' => 'paquetes', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'empleados', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
					<?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'empleados', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				</ul>
			</div>
		</div>



			<div class="col-md-9">
			<table class="table table-hover">

	<thead>
	<tr>
			<th style="color:white;">ID</th>
			<th style="color:white;">MIEMBRO</th>
			<th style="color:white;">PAQUETE</th>
			<th style="color:white;">FECHA</th>
			<th style="color:white;">ACTIONS</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inscripciones as $inscripcion): ?>
	<tr>
		<td  style="color:white;"><?php echo h($inscripcion['Inscripcion']['id']); ?>&nbsp;</td>
		<td  style="color:white;">
			<?php echo $this->Html->link($inscripcion['Miembro']['nombre'], array('controller' => 'miembros', 'action' => 'view', $inscripcion['Miembro']['id'])); ?>
		</td>
		<td  style="color:white;">
			<?php echo $this->Html->link($inscripcion['Paquete']['nombre'], array('controller' => 'paquetes', 'action' => 'view', $inscripcion['Paquete']['id'])); ?>
		</td>
		<td  style="color:white;">
			<?php echo $this->Html->link($inscripcion['Empleado']['nombre'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['Empleado']['id'])); ?>
		</td>
		<td  style="color:white;"><?php echo h($inscripcion['Inscripcion']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscripcion['Inscripcion']['id']), array('class'=>'btn btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscripcion['Inscripcion']['id']), array('class'=>'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id']))); ?>
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

