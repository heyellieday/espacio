<header class="banner navbar" role="banner">
  <?php if( is_front_page() ) { ?>
  <div class="headerHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand tk-sarina" href="<?php echo home_url(); ?>/">Espacio</a>
      </div>

      <nav class="pull-right collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    <div class="row">
      <div class="container">
        <div class="col-sm-12">
          <div class="welcomeText">
            <h1>A coworking space with a great community.</h1>
            <h3><a href="#">Learn More</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="headerHomeOverlay">
  </div>
  <div class="headerHomeBackground">
  </div>
   <?php } else { ?>
   <div class="headerNonHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand tk-sarina" href="<?php echo home_url(); ?>/">Espacio</a>
      </div>

      <nav class="pull-right collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    </div>

  </div>
    <?php } ?>
</header>
