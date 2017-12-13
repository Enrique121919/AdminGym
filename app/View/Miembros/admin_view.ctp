<div class="col-sm-12 col-md-12 sidebar">
<h2><?php echo __('Miembro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Alta'); ?></dt>
		<dd>
			<?php echo h($miembro['Miembro']['fecha_alta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<br>
<br>
