<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name');?><?php wp_title();?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


<?php wp_head();?>
  </head>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <div class="header">

   <div class="container ">
        <div class="row">
         <div class="col-md-3">
           <img src="<?php bloginfo('template_url')?>/imagens/logobranca.png" class="img-responsive center-block">
         </div>
         <div class="col-md-6">
          <div class="menu">
           <nav class="navbar navbar-default">
              <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

             
            </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

        ?>
        
                  </div><!-- /.container-fluid -->
               
                </nav>

                   </div>

         </div>

         <div class="col-md-3">
      <form class="navbar-form">
        <div class="form-group ">
          <input type="text" class="form-control" style="min-width:180px;" placeholder="Digite o que voçê procura aqui">
          <button class="btn btn-danger" style="background-color:#03b0ef; border-color:#03b0ef; " type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
</button>
        </div>
        
      </form>
   
         </div>
         
       </div>
     </div>

   </div>
   <!-- FIM DO HEADER -->


   