<?php get_header(); ?>
	<section id="content" class="span8">

		<?php 
		if(have_posts()):

			while(have_posts()) : the_post();

				?>
				<article class="post">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
				</article>
				<?php

			endwhile;

		endif; 
		?>

	</section><!-- content-->
	<aside id="sidebar" class="span4">
		<h2>Sidebar</h2>
		<ul id="sidebar-right">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		    <?php endif; ?>
		</ul>
	</aside><!--sidebar-->
<?php get_footer();?>