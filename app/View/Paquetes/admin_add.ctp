<br>
<br>
<br>
<br>
<div class="col-sm-2 col-md-2 sidebar">
	<h3><?php echo __('Acciones'); ?></h3>
	<div class="list-group">
	<ul>
		<?php echo $this->Html->link(__('Lista Paquetes'), array('action' => 'index'),array('class'=>'list-group-item')); ?>
	</ul>
	</div>
</div>
<div class="container">
   <form class="form-horizontal" role="form">
	<div class="form-group">
	<?php echo $this->Form->create('Paquete'); ?>
		<fieldset>
			<legend><?php echo __('Nuevo Paquete'); ?></legend>
		<?php
			echo $this->Form->input('nombre', array ('class'=>'form-control', 'placeholder'=>'Nombre'));
			echo $this->Form->input('descripcion', array ('class'=>'form-control', 'placeholder'=>'Descripcion'));
			echo $this->Form->input('precio', array ('class'=>'form-control','placeholder'=>'Precio'));
			echo $this->Form->input('duracion', array ('class'=>'form-control','placeholder'=>'Duración'));
		?>
		</fieldset>
		<div class=<div class="col-sm-offset-2 col-sm-10">
	<?php echo $this->Form->end(__('Submit'),array('class'=>'btn btn-default')); ?>
	</div>
	</div>

  </form>
</div>
