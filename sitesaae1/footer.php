
  <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 sobre-rodape">
      <div class="title-box">
        <h4>Sobre Nós</h4>
      </div>
    
      <?php 
       if ( is_active_sidebar('sobre-nos-rodape') ) {
        dynamic_sidebar('sobre-nos-rodape');
        }
      ?>

    </div>
      <div class="col-md-4 sobre-rodape">
        <div class="title-box">
        <h4>Paginas</h4>
      </div>
      <?php wp_list_pages();?>
     </div>
    <div class="col-md-4">
              
    </div>

          </div>
        </div>
      </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
<?php wp_footer();?>    
  </body>
</html>