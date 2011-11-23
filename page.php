<!DOCTYPE HTML>

<?php include('helpers/load_engine.php'); ?>

<html>
	<head>
		<meta charset='utf-8' />
		<title>
			<?php bloginfo('name'); ?>
		</title>
		
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<link rel="alternate" type="application/rss+xml" 	title="RSS 2.0" 	href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" 				title="RSS .92" 	href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" 	title="Atom 0.3" 	href="<?php bloginfo('atom_url'); ?>" />
		
		<?php
			/// Folhas de estilos
			css_include('nivo-slider');
			css_include('default');
			css_include('application');
			wp_head();
		?>
		
		<?php
			/// Scripts javascript
			wp_enqueue_script("jquery");
			
			js_include($filename='jquery.corner');
			js_include($filename='jquery.nivo.slider');
			js_include($filename='application');
		?>
	</head>
	<body>
		<div id='header'>
			<?php get_header(); ?>
		</div>
		
		<div id='container'>
			<div id='page-content'>
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div>
			<?php if(!(get_the_title() != "Cirurgias" && get_the_title() != "Estética")){ ?>
			
			<div id='sidebar-page'>
				<strong><?php the_title(); ?></strong><br />
				<hr />
				<?php
					$post_filter = array(
						'category'		=>  get_the_title(),
						'post_type'		=> 'post',
						'post_status'	=> 'publish',
						'numberposts'	=> 50
					);
					$posts = get_posts($post_filter);
				?>
				<?php foreach( $posts as $post ): setup_postdata($post);?>
					<a href='<?php the_permalink(); ?>'> <?php the_title(); ?> </a> <br />
				<?php endforeach ?>
				<?php wp_reset_query(); ?>
			</div>
			
			<?php } // end if |the_title() == "Cirurgias" || the_title() == "Estética"| ?>
		</div>
		
		<div id='footer'>
			<?php get_footer(); //comments_template( '', true ); ?>
		</div>
		
	</body>
</html>
