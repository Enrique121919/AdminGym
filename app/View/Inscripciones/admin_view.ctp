<div class="col-lg-4">
	<div class="inscripciones view">
	<h2><?php echo __('Inscripcion'); ?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($inscripcion['Inscripcion']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Miembro'); ?></dt>
			<dd>
				<?php echo $this->Html->link($inscripcion['Miembro']['nombre'], array('controller' => 'miembros', 'action' => 'view', $inscripcion['Miembro']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Paquete'); ?></dt>
			<dd>
				<?php echo $this->Html->link($inscripcion['Paquete']['nombre'], array('controller' => 'paquetes', 'action' => 'view', $inscripcion['Paquete']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Empleado'); ?></dt>
			<dd>
				<?php echo $this->Html->link($inscripcion['Empleado']['nombre'], array('controller' => 'empleados', 'action' => 'hidden', $inscripcion['Empleado']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Fecha'); ?></dt>
			<dd>
				<?php echo h($inscripcion['Inscripcion']['fecha']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
<div class="col-sm-8 col-md-8 sidebar">
<td class="actions">
	 <?php echo $this->Html->link(__('Asignar tarjeta'), array('action' => 'asignar', $inscripcion['Miembro']['id']), array('class'=>'btn btn-primary')); ?>
	  <?php echo $this->Html->link(__('Renovar tarjeta'), array('action' => 'renovar', $inscripcion['Miembro']['id']), array('class'=>'btn btn-success')); ?>
</td>
</div>
