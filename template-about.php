<?php
/*
Template Name: Sobre
*/
?>
<?php get_header(); ?>
<main>
    <section id="about">
		<div class="container">
            <div class="row">
				<div class="offset-md-2 col-md-8 paper">
 					<?php the_field('description'); ?>
            	</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();	?>