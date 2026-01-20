<?php the_post();
get_header(); ?> <div class="banner-home"> <?php if( have_rows('slides') ): ?> <h1>projetando<br>espaços<br><b>criando<br>momentos</b></h1><div class="d-block w-100"><div class="carrossell-banner"> <?php while( have_rows('slides') ): the_row(); 
        $image = get_sub_field('foto_do_fundo');
        ?> <div class="item"><div class="slide-aymah" style="background-image:url(<?= $image ?>)"></div></div> <?php endwhile; ?> </div></div> <?php endif; ?> </div><section class="historia-home"><div class="container"><div class="row align-items-center"><div class="col-lg-8"><img src="<?= get_stylesheet_directory_uri() ?>/dist/img/foto-historia.png" alt="" class="img-fluid"></div><div class="col-lg-4"><p class="texto"><img src="<?= get_stylesheet_directory_uri() ?>/dist/img/nossa-historia.png" alt="" class="img-fluid"></p><a href="<?= get_site_url() ?>/quem-somos" class="btn-cta"><img src="<?= get_stylesheet_directory_uri() ?>/dist/img/seta-cta.png" alt=""></a></div></div></div></section><section class="projetos-home"><div class="container"><a href="<?= get_site_url() ?>/projetos" class="btn-cta">projetos&nbsp; <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/seta-cta.png" alt=""></a></div></section><section class="clientes"><div class="container"><h2>nossos clientes</h2> <?php 
        $images = get_field('clientes');
        if( $images ): ?> <div class="carrossell-clientes"> <?php foreach( $images as $imagem ): ?> <div class="item"><div class="d-flex align-items-center h-100 justify-content-center px-4 py-2"><img src="<?php echo esc_url($imagem['url']); ?>" alt="" class="img-fluid"></div></div> <?php endforeach; ?> </div> <?php endif; ?> </div></section><section class="depoimentos"><div class="container"><h2>depoimentos de clientes</h2> <?php
      $args_Depo = array(
        'post_type' => 'depoimento',
        'posts_per_page' => -1
      );
      $loop_Depo = new WP_Query($args_Depo);
      if($loop_Depo->have_posts()):
    ?> <div class="carrosel-depoimentos"> <?php while($loop_Depo->have_posts()): $loop_Depo->the_post() ?> <div class="item"><div class="conteudo"><div class="mensagem"> <?php the_content(); ?> </div><div class="imagem"> <?php the_post_thumbnail() ?> </div><div class="autor"><h3><?php the_title() ?></h3><h4><?= the_field('relacionamento') ?></h4></div></div></div> <?php endwhile; ?> </div> <?php
      endif;
    ?> </div></section><section class="insta-feed"><div class="container"> <?= do_shortcode('[instagram-feed feed=1]') ?> </div></section> <?php get_footer() ?>