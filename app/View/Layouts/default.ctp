<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

//		echo $this->Html->css('cake.generic');
		echo $this->Html->css(['//netdna.bootstrapcdn.com/bootswatch/2.1.1/united/bootstrap.min.css',
                                '//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css']);

        echo  $this->Html->script('//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js');


        echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1><?php echo $veryWellNamed; ?></h1>
		</div>
        <div class="navbar">

            <div class="navbar-inner">
                <a href="/" class="brand">Bakery</a>
                <ul class="nav">

                </ul>
            </div>
        </div>
		<div role="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>
            <br>
            <div class="well">
			    Yes!
            </div>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
