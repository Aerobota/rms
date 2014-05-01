<?php
/**
 * Default Head Section
 *
 * The default head section will load all necessary JavaScript and CSS styles for the main RMS system.
 *
 * @author		Russell Toris - rctoris@wpi.edu
 * @copyright	2014 Worcester Polytechnic Institute
 * @link		https://github.com/WPI-RAIL/rms
 * @since		RMS v 2.0.0
 * @version		2.0.0
 * @package		app.View.Elements
 */
?>


<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('%s: %s', h($setting['Setting']['title']), h($title_for_layout)); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('description', '');
		echo $this->Html->meta('keywords', '');
	?>

	<!--[if lte IE 8]><?php echo $this->Html->script('../css/ie/html5shiv.min'); ?><![endif]-->

	<?php
	echo $this->Html->script(array(
		'//code.jquery.com/jquery-1.11.0.min.js',
		'jquery.dropotron.min',
		'skel.min',
		'skel-layers.min',
		'init.min'
	));
	?>

	<noscript>
		<?php echo $this->Html->css(array('skel', 'style', 'style-noscript')); ?>
	</noscript>

	<!--[if lte IE 8]><?php echo $this->Html->css('ie/v8'); ?><![endif]-->
	<!--[if lte IE 9]><?php echo $this->Html->css('ie/v9'); ?><![endif]-->

	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>