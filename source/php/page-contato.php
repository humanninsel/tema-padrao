<?php the_post();
get_header(); ?>
<section class="page-contato">
  <div class="container">
    <h2>envie-nos uma mensagem</h2>
    <?= do_shortcode('[contact-form-7 id="b09453f" title="Formulário de contato 1"]') ?>
    <p class="mt-4 mt-lg-0">R. Comendador Tórlogo Dauntre, 198 - Cambuí - Campinas - SP, 13025-270 | (19) 3199-9985</p>
  </div>  
</section>
<?php get_footer() ?>