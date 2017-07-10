<?php
/*
Template Name: Secretaria
*/
?>
<?php get_header(); ?>
<main>
    <section id="desk">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>
                <!--<div class="col-md-3">
                    <h3 class="uppercase">Acesse também</h3>
                    <a href="https://teoriadacomplexidade.com.br" target="_black">teoriadacomplexidade.com.br</a><br>
                    <a href="https://fractalrealityacademy.com.br" target="_black">fractalrealityacademy.com.br</a><br>
                    <a href="http://juliotorres.ws" target="_black">juliotorres.ws</a>
                </div>-->
                <div class="col-md-6">
                    <h3 class="uppercase">Dúvidas ou sugestões?</h3>
                    <p>Envie-as agora mesmo para fractalrealityacademy@gmail.com</p>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
                </div>
            </div>
        </div>
	</section>
</main>
<?php get_footer();	?>