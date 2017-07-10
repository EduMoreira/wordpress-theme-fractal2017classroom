<?php get_header(); ?>
<head>
    <meta name="description" content="<?php the_field('descript'); ?>">
    <title><?php the_title(); ?></title>
</head>
<main>
    <section id="banner">
        <div class="container">
            <div class="offset-md-2 col-md-8 title">
                <div class="background">
                    <div class="content--wrapper">
                        <div class="content">
                            <h1 class="uppercase"><?php the_title(); ?></h1>
                            <h2 class="uppercase"><?php the_field('subtitle'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="classroom">
        <div class="container">
            <div class="offset-md-2 col-md-8 paper">
                <?php the_field('video'); ?>
                <?php the_field('content'); ?>
                <div class="row">
                    <?php if( have_rows('references') ): ?>
                        <?php while( have_rows('references') ): the_row(); ?>
                            <div class="col-12 col-md-6">
                                <a target="_blank" href="<?php the_sub_field('url'); ?>">
                                    <h4 class="uppercase"><?php the_sub_field('name'); ?></h4>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if( have_rows('files') ): ?>
                        <?php while( have_rows('files') ): the_row(); ?>
                            <div class="col-12 col-md-6">
                                <a target="_blank" href="<?php the_sub_field('file'); ?>">
                                    <h4 class="uppercase"><?php the_sub_field('name'); ?></h4>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="offset-md-2 col-md-8 comments">
                <div class="row">
                    <?php comments_template( '', true ); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>