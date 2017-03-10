
  <?php get_header();?>
  <!-- ------SLIDER------ -->
  <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-lg">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

          <?php
            $posts_slides = new WP_Query(array(
                'category_name' => 'destaques',
                'posts_per_page' => 3
              ));
            $i = 1;
          while ($posts_slides->have_posts()) : $posts_slides->the_post();
          
           ?>
            <div class="item <?php if ($i == 1) echo 'active';?>">
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-slide');?></a>
              <div class="carousel-caption visible-lg">
               <h3><?php the_title();?></h3>
               
               <p>é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI,</p>
              </div>
            </div>
            <?php $i++; endwhile; wp_reset_postdata();?>
            
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- ------FIM SLIDER------ -->

      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <div class="title visible-lg">
              <h1>Destaques SAAE</h1>
            </div>
          </div>
          <div class="col-md-4">
            <div class="title visible-lg">
              <h1>Videos</h1>
            </div>
          </div>
        </div>
      </div>


        <!-- -------DESTAQUES ------------>
       <div class="container">
        <div class="row">
        <div class="col-md-8">
           <div class="title hidden-lg">
              <h1>Destaques do SAAE</h1>
            </div>
          
           <div class="row">
               <?php
            $posts_noticia = new WP_Query(array(
                'category_name' => 'noticias',
                'posts_per_page' => 3
              ));
          
          while ($posts_noticia->have_posts()) : $posts_noticia->the_post();
          
           ?>
            <div class="col-sm-6 col-md-4 linha">
              <div class="thumbnail">
               <?php the_post_thumbnail('thumbnail-noticias', array('class' => 'img-responsive img-thumbnail'));?>
                <div class="caption">
                  <h3><?php the_title();?></h3>
                
                  <p><a href="<?php the_permalink();?>" class="btn btn-primary" role="button">SAIBA MAIS</a></p>
                </div>
              </div>
               

            </div>
        <?php endwhile; wp_reset_postdata();?>
          </div>
          </div>
          <div class="col-md-4">
              <div class="title hidden-lg">
              <h1>Videos</h1>
          </div>

         <?php 
        $posts_slides = new WP_Query(array(
        'category_name' => 'videos',
        'posts_per_page' => 1
        ));
        
        while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?> 
      <div class="embed-responsive embed-responsive-16by9">
        <?php echo rwmb_meta('oembed','type=oembed'); ?>
      </div>
     
      <?php endwhile; wp_reset_postdata(); ?>
      <div class="cont">
      <img src="<?php bloginfo('template_url')?>/imagens/aten2.fw.png" class="img-responsive center-block">
      </div>
          </div>
        </div>
      </div>
          <!-- ------- FIM DESTAQUES ------------>


      <!-- ------- SANEAMENTO BASICO ------------>

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="title">
              <h1>Saneamento Basico</h1>
            </div>
          </div>
        </div>
      </div>    
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <a href="http://localhost/wordpress/wp-content/uploads/2017/02/OqueESaneamentoBasico.pdf"><img src="<?php bloginfo('template_url')?>/imagens/SaneamentoBasico.jpeg" width="100%" class="img-responsive"></a>
          </div>
             <div class="col-md-4">
              <img src="<?php bloginfo('template_url')?>/imagens/bn_legislacao.jpeg" width="100%" class="img-responsive">
               <img src="<?php bloginfo('template_url')?>/imagens/bn_transparencia.png"  class="img-responsive">
            </div>
        </div>
      </div>
        <!-- ------- FIM SANEAMENTO BASICO ------------>

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="title">
              <h1>Dicas de Economia</h1>
            </div>
          </div>
        </div>
      </div> 

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <img src="<?php bloginfo('template_url');?>/imagens/bn_dicas_home.png" width="100%" class="img-responsive">
          </div>
             <div class="col-md-4">
             <div class="fb-page" data-href="https://www.facebook.com/saae.caxias.ma.gov.br/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/saae.caxias.ma.gov.br/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/saae.caxias.ma.gov.br/?fref=ts">SAAE Caxias - MA</a></blockquote></div>
            </div>
        </div>
      </div>


    <?php get_footer();;?>