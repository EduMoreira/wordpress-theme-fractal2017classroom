<?php
/*
Template Name: Início
*/
?>
<?php get_header(); ?>
<main>
    <section id="banner">
        <div class="container">
            <div class="offset-md-2 col-md-8 title">
                <div class="background">
                    <div class="content--wrapper">
                        <div class="content">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                            <h1 class="uppercase"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="start">
        <div class="container">
            <div class="offset-md-2 col-md-8 paper">
                <div class="row">
                    <!--<?php echo do_shortcode('[learndash_course_progress]'); ?>-->
                    <div class="col-md-4">
                        <div class="card">   
                            <h3 class="uppercase">Preparação</h3>                 
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <div class="lessons">
                                <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Preparação"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Visão Geral</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <div class="lessons">
                                <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Visão Geral"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Teoria do Caos</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <div class="lessons">
                                <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Teoria do Caos"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Teoria dos Fractais</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <div class="lessons">
                                <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Teoria dos Fractais"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Teoria da Catástrofes</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Teoria da Catástrofes"]'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Logica Fuzzy</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Logica Fuzzy"]'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Transformação Organizacional</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Transformação Organizacional"]'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Visões de Mundo</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Visões de Mundo"]'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h3 class="uppercase">Estrategia de (Re)estruturação</h3>
                            <div class="background" style="background-image:url(<?php the_sub_field('cover'); ?>);"></div>
                            <?php echo do_shortcode('[ld_lesson_list order="ASC" category_name="Estrategia de (Re)estruturação"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();	?>