<?php
/*
Template Name: Aulas
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner">
        <div class="background">
			<div class="content--wrapper">
				<div class="content center">
					<?php the_title( '<h1 class="uppercase">', '</h1>' ); ?>
				</div>
			</div>
		</div>
    </section>
    <section id="classrooms">
        <div class="container">
            <div class="row">
                <!--<?php echo do_shortcode('[learndash_course_progress]'); ?>-->
                <div class="col-md-4">
                    <div class="card">   
                        <h1 class="uppercase">Preparação</h1>                 
						<div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <div class="lessons">
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Preparação"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Visão Geral</h1>
						<div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <div class="lessons">
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Visão Geral"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Teoria do Caos</h1>
                        <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <div class="lessons">
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Teoria do Caos"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Teoria dos Fractais</h1>
                    	<div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <div class="lessons">
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Teoria dos Fractais"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Teoria da Catástrofes</h1>
                        <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Teoria da Catástrofes"]'); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Logica Fuzzy</h1>
                        <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Logica Fuzzy"]'); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Transformação Organizacional</h1>
                        <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Transformação Organizacional"]'); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Visões de Mundo</h1>
                        <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Visões de Mundo"]'); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="uppercase">Estrategia de (Re)estruturação</h1>
                        <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                        <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Estrategia de (Re)estruturação"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();	?>