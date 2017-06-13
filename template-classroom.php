<?php
/*
Template Name: Aulas
*/
?>
<?php get_header(); ?>
<main>
    <section id="classroom">
		<div class="container">
			<div class="row">
				<ul>
					<?php
					// It's a paged query
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					// Query parameters
					$args = array(
						'post_type' => 'aula',
						'post_status' => 'publish',
						'paged' => $paged,
                        'posts_per_page' => 15,
						'orderby' => 'date',
						'order' => 'DESC',
					);
					// Fetch the posts
					$the_query = new WP_Query($args);
					$total_posts = $the_query->found_posts;
					// The loop
					if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li><div class="background" style="background-image:url(<?php the_field('cover'); ?>);"><h3 class="title"><?php the_title(); ?></h3></div></li>
					<?php endwhile; ?>
					<?php if ($total_posts > $posts_per_page) : ?>
					<?php endif ?>
					<?php wp_reset_postdata();
					endif;
					wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</section>
</main>
<?php get_footer();	?>