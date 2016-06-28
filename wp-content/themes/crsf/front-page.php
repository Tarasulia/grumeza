<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package v_grumeza
 */

get_header(); ?>

    <main id="main" class="site-main row" role="main">
        <div class="col-xs-5 hidden-xs">
            <div class="home-bio">
                <h1>Привіт, мене звати Віктор</h1>
                <p>Lorem ipsum dolor
                    sit amet, cons
                    ectetur adipisicing elit, se
                    d do eiusmod tempor in
                    cididunt ut labor
                    e et dolore magna aliqua.</p>
            </div>
        </div>
    </main><!-- #main -->

<?php
get_footer();
