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
		<p>who doesn't love cool WP sidebars?</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non suscipit tortor. Donec vitae neque odio, a volutpat augue. Integer justo nulla, blandit vel venenatis sed, imperdiet in arcu. Praesent consequat posuere volutpat.Nam mauris odio, placerat in blandit ac, condimentum dignissim felis.</p>
		<p>Maecenas leo augue, iaculis ac hendrerit vitae, eleifend pretium urna. In semper tempor iaculis. Nullam pretium dolor et nunc congue at posuere massa rhoncus. Ut imperdiet commodo facilisis. Ut a justo velit, vel posuere metus.</p>
		<p>Duis ut tincidunt est. Praesent in sodales risus. Morbi vel libero lacus. Proin porttitor justo et ligula semper at mollis odio facilisis. Duis aliquam, augue vel elementum dapibus, orci magna posuere nibh, sit amet congue nisl turpis eu lectus.</p>
	</aside><!--sidebar-->
<?php get_footer();?>