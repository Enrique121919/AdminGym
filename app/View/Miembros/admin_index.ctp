<div class="page-header">
<br>
	<h2 style="color:white"><?php echo __('Miembros'); ?></h2>
</div>
	<div class="col-sm-2 col-md-2 sidebar">
		<div class="list group">
		<h3 style="color:white"><?php echo __('Actions'); ?></h3>
			<ul>
				<?php echo $this->Html->link(__('Nuevo Miembro'), array('action' => 'add'),array('class'=>'list-group-item')); ?>
				<?php echo $this->Html->link(__('Lista Cursos'), array('controller' => 'cursos', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Nuevo Curso'), array('controller' => 'cursos', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Lista Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index'),array('class'=>'list-group-item')); ?> 
				<?php echo $this->Html->link(__('Nuevos Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add'),array('class'=>'list-group-item')); ?> 
			</ul>
	    </div>
	</div>
	<div class="col-md-10">
		<table class="table table-hover">
			<thead>
			<br>
			<br>
			<br>
				<tr>
						<th style="color:white">ID</th>
						<th style="color:white">NOMBRE</th>
						<th style="color:white">APELLIDO</th>
						<th style="color:white">EDAD</th>
						<th style="color:white">TELEFONO</th>
						<th style="color:white">EMAIL</th>
						<th style="color:white">SEXO</th>
						<th style="color:white">ACTIONS</th>
				</tr>
			</thead>
		<tbody>
		<?php foreach ($miembros as $miembro): ?>
			<tr>
				<td style="color:white"><?php echo h($miembro['Miembro']['id']); ?>&nbsp;</td>
				<td style="color:white"><?php echo h($miembro['Miembro']['nombre']); ?>&nbsp;</td>
				<td style="color:white"><?php echo h($miembro['Miembro']['apellido']); ?>&nbsp;</td>
				<td style="color:white"><?php echo h($miembro['Miembro']['edad']); ?>&nbsp;</td>
				<td style="color:white"><?php echo h($miembro['Miembro']['telefono']); ?>&nbsp;</td>
				<td style="color:white"><?php echo h($miembro['Miembro']['email']); ?>&nbsp;</td>
				<td style="color:white"><?php echo h($miembro['Miembro']['sexo']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $miembro['Miembro']['id']), array('class'=>'btn btn-default')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $miembro['Miembro']['id']), array('class'=>'btn btn-warning')); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $miembro['Miembro']['id']), array('class'=>'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $miembro['Miembro']['id']))); ?>
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

