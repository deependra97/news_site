<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package news-unlimited
 */

get_header(); ?>

<section id="main-cat" class="main-cat"> <!-- main-cat start -->

    <div class="container">
        <!--  primary start -->
        <div class="row">
            <article id="primary" class="col-sm-8 col-md-8 fash-ion">
                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-12">

                    <?php
                    
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            news_unlimited_archive_listing_page();
                        endwhile;
                        
                    endif;
                    the_posts_navigation(
                            array(
                                'mid_size' => 2,
                            )
                        );
                    ?>

                    </article>
                    
                </div>
            </article><!-- primary end -->
            
            <article id="secondary" class="col-sm-4 col-md-4 tab listout lists_inner"><!-- tab section start -->
                <?php
                if (is_active_sidebar( 'sidebar-1' )) {
                    dynamic_sidebar( 'sidebar-1' );
                }
                ?>
            </article>
            <!-- tab section end -->
        </div>
    </div>
</section><!-- main-cat end -->




<?php
// get_sidebar();
get_footer();
