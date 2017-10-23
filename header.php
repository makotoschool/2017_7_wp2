<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description');?></title>

<?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="container">
	<header>
		<a href="<?php echo home_url();?>">
			<h1 class="logo">
				<?php bloginfo('name')?>
			</h1>
		</a>
		<nav class="utility_nav">
			<ul>
			<li><a href="">NEWS</a></li>
			<li><a href="">SITEMAP</a></li>
			<li><a href="">PRIVACY</a></li>
			</ul>
		</nav>
		<div class="main_header clear">
			<h2>
				<span class="invisible">これも検索エンジン対策の見出しです</span>
			</h2>

		</div>
	</header>
	<?php 
		wp_nav_menu(array(
			'theme_location'=>'mainnavi',
			'container'=>'nav',
			'container_class'=>'main_nav clearfix'

		));

	?>


<!--
	<nav class="main_nav clearfix">
		<ul>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		</ul>
	</nav>
-->