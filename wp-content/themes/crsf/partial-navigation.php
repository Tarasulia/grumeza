<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header pull-left">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                </a>
            <?php endif; ?>
        </div>
        <div class="navbar-header pull-right">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new wp_bootstrap_navwalker));  ?>
        </div><!-- /collapse -->
    </div><!-- container -->
</nav> <!-- /#navigation -->