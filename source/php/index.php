<?php the_post();

get_header(); ?>



<div class="banner-home">

  <?php if( have_rows('slides') ): ?>


  <div class="d-block w-100">

  <div class="carrossell-banner">

    <?php while( have_rows('slides') ): the_row(); 

        $image = get_sub_field('foto_do_fundo');

        ?>

    <div class="item">

      <div class="slide-home" style="background-image:url(<?= $image ?>)">

        

      </div>

    </div>

    <?php endwhile; ?>

  </div>

  </div>

  <?php endif; ?>

</div>


<section class="depoimentos">

  <div class="container">

    <h2>depoimentos de clientes</h2>

    <?php

      $args_Depo = array(

        'post_type' => 'depoimento',

        'posts_per_page' => -1

      );

      $loop_Depo = new WP_Query($args_Depo);

      if($loop_Depo->have_posts()):

    ?>

      <div class="carrosel-depoimentos">

        <?php while($loop_Depo->have_posts()): $loop_Depo->the_post() ?>

          <div class="item">

            <div class="conteudo">

              <div class="mensagem">

                <?php the_content(); ?>

              </div>

              <div class="imagem">

                <?php the_post_thumbnail() ?>

              </div>

              <div class="autor">

                <h3><?php the_title() ?></h3>

                <h4><?= the_field('relacionamento') ?></h4>

              </div>

            </div>

          </div>

        <?php endwhile; ?>

      </div>

    <?php

      endif;

    ?>

  </div>

</section>



<?php get_footer() ?>