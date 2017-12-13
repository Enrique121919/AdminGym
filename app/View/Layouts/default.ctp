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
		<?php echo "AdminGyms" ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		
		echo $this->Html->meta(
    		'pesa',
    		'img/peso.png',
   		array('type' => 'icon'));
		echo $this->Html->css(array('style.css','bootstrap.min.css','bootstrap-theme.min.css','DataTables.css', 'DataTablesuno.css'));
		echo $this->Html->script(array('jquery.min.js' , 'docs.min.js'));


		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color: #243842;">	
	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			
		</div>
	</div>
    <div class="container theme-showcase" role="main">
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>

		<div id="footer">
			
			
		</div>
    </div>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			//$()8.UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>