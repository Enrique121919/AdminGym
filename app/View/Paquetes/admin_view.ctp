<div class="col-lg-4">
	<div class="panel panel-default">
		  <div class="panel-heading">
				<ul class="list-group">
				<br>
				<br>
			    <h2><?php echo __('Paquete', array('class'=>'fa fa-bell fa-fw')); ?></h2>
			    <td>
				<dl>
					<dt><?php echo __('Nombre'); ?></dt>
					<dd>
						<?php echo h($paquete['Paquete']['nombre']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Descripcion'); ?></dt>
					<dd>
						<?php echo h($paquete['Paquete']['descripcion']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Precio'); ?></dt>
					<dd>
						<?php echo h($paquete['Paquete']['precio']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Duracion'); ?></dt>
					<dd>
						<?php echo h($paquete['Paquete']['duracion']); ?>
						&nbsp;
					</dd>
				</dl>
				</td>
				</ul>
			</div>
	</div>
</div>