    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminGym</a>
        </div>
        <div id="navbar" class="navbar navbar-inverse navbar-fixed-top">
          <ul class="nav navbar-nav">
              <ul class="nav navbar-nav navbar-left">
              <li>
                <?php echo $this->Html->link('Inicio',array('controller'=>'escritorios','action'=>'index'));?>
              </li>
            </ul>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogo <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Paquetes', array('controller' => 'paquetes', 'action' => 'index')) ?></li>
                <li role="separator" class="divider"></li>
                <li><?php echo $this->Html->link('Clases', array('controller' => 'clases', 'action' => 'index')) ?></li>
                <li role="separator" class="divider"></li>
                <li><?php echo $this->Html->link('Cursos', array('controller' => 'cursos', 'action' => 'index')) ?></li>
                <li role="separator" class="divider"></li>
                <li><?php echo $this->Html->link('Empleados', array('controller' => 'empleados', 'action' => 'index')) ?></li>
                <li role="separator" class="divider"></li>
                <li><?php echo $this->Html->link('Instructores', array('controller' => 'instructores', 'action' => 'index')) ?></li> 
                <li role="separator" class="divider"></li> 
                <li><?php echo $this->Html->link('Tipo', array('controller' => 'tipos', 'action' => 'index')) ?></li>             
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inscripciones <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Inscripciones', array('controller' => 'inscripciones', 'action' => 'index')) ?></li><li role="separator" class="divider"></li>
                <li><?php echo $this->Html->link('Nuevas Inscripciones', array('controller' => 'inscripciones', 'action' => 'add')) ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Miembros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Miembros', array('controller' => 'miembros', 'action' => 'index')) ?></li>
                <li role="separator" class="divider"></li>
                <li><?php echo $this->Html->link('Nuevas Miembros', array('controller' => 'miembros', 'action' => 'add')) ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Reportes', array('controller' => 'reportes', 'action' => 'index')) ?></li>
              </ul>
            </li>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <?php echo $this->Html->link('Salir',array('controller'=>'empleados','action'=>'admin_logout'));?>
              </li>
            </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
