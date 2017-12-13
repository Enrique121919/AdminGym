<div class="cursos form">
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<?php echo $this->Html->link(__('Lista Cursos'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
	</ul>
</div>
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Curso'); ?></legend>
	<?php
		echo $this->Form->input('id', array ('class'=>'form-control'));
		echo $this->Form->input('dia', array ('class'=>'form-control'));
		echo $this->Form->input('hora', array ('class'=>'form-control'));
		echo $this->Form->input('clase_id', array ('class'=>'form-control'));
		echo $this->Form->input('miembro_id', array ('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

