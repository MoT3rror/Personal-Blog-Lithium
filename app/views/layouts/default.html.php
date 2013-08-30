<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('bootstrap.min', 'main')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>
	<a name="Top"></a>
	<div class="container">

		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li>
					<a href="#">Profile</a>
				</li>
				<li>
					<a href="<?= $this->url('MyPosts::index') ?>">Archieve</a>
				</li>
			</ul>
			<a href="<?= $this->url('Pages::home') ?>"><h3>Joshua Bixler</h3></a>
		</div>

		<hr>

		<div class="content">
			<?php echo $this->content(); ?>
		</div>

		<hr>

		<div class="footer">
			<p class="pull-right">Powered by <a href="http://lithify.me">Lithium</a></p>
			<p>&copy; Joshua Bixler</p>
		</div>

	</div>
</body>
</html>