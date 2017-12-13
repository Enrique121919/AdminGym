<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'AdminGym';?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta(
    		'pesa',
    		'img/peso.png',
   		array('type' => 'icon'));
		echo $this->Html->css(array('style.css','bootstrap.min.css','bootstrap-theme.min.css'));

		echo $this->Html->script(array('jquery.min.js' , 'docs.min.js' , 'bootstrap.min.js'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">

            <?php echo $this->element('menu'); ?>	
        </div>
	</div>
    <div class="container theme-showcase" role="main">

 
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

		<div id="footer">
			
		</div>
    </div>
    <div>
     	<?php echo $this->element('sql_dump'); ?>
    </div>
	
</body>
</html>
