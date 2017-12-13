        <!-- NAVIGATION -->
        <div id="breadcrumb">
            <div class="container">
                <div class="information">
                    <h2 class="section-title margint30">CONTACTO</h2>
                    <p class="respuesta section-title margint30">&nbsp;</p>
                </div>
            </div>
        </div>
<?php $this->set('title_for_layout', "Mis contactos");	?>

<div class="container contact-details margint30 marginb40">
 <h2>Ponte en contacto con nosotros.</h2>
  <p class="margint20">Puedes contactarnos en cualquier momento.<br>Estamos para resolver tus dudas</p>
   <div class="row margint20 contact-form">
    <div class="col-lg-8 col-sm-8">
     <h4 class="margint30">Contacto</h4>
       <form action="#" method="post" id="ajax-contact-form">
        <div class="contact-input-area margint20">
<?php echo $this->Form->create('Contacto'); ?>
          <div class="form-group clearfix">
  <?php echo $this->Form->input('nombre', array('label'=>"Nombre"),array('class'=>'list-group-item')); ?>
          </div>
          <div class="form-group margint20 clearfix">
  <?php echo $this->Form->input('email', array('label'=>"Email")); ?>
          </div>
          <div class="form-group margint20">
  <?php echo $this->Form->input('mensaje', array('label'=>"Mensaje","type"=>"textarea")); ?>
          <div class="margint10">
          </div>
          </div>
          <div class="pull-right margint10">
           <p class="respuesta section-title">&nbsp;</p>
<?php echo $this->Form->end('Enviar', array('type'=>"submit", 'class'=>"form-button", 'id'=>"btn_enviar")); ?>
          </div>
        </div>
       </form>
    </div>
  </div>
</div>

