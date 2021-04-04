<!DOCTYPE html>
<html lang="ja">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="favicon.ico">
		<?php wp_head(); ?>
		<!-- loading contact -->
		<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			location = '<?php echo home_url('/inquiryfin'); ?>';
		}, false);
	</script>
</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="inner">
					<?php
					wp_nav_menu(
						// .header-listを置き換えて、PC用メニューを動的に表示する
						array(
							'depth' => 1,
							'theme_location' => 'global',
							'container' => 'false',
							'menu_class' => 'header__list',
						)
					);
					?>
		</div><!-- inner -->
	</header><!-- /header -->
