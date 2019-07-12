<?php get_header(); ?>

<div id="slider">
    <div class="container-fluid" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
        <div class="slide"></div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/slider.jpg"></div>
</div>

<section class="section" id="archive">
    <div class="posts">
        <div class="container">
            <div class="row">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <a href="<?php the_permalink(); ?>" class="pBox">
                        <!-- <small><?php the_time('d'); ?> de <?php the_time('F'); ?>, <?php the_time('Y'); ?></small>
                  <span>por <?php the_author_posts_link(); ?></span> -->
                        <div class="box" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000">
                            <figure>
                                <?php
                            if (has_post_thumbnail()) { 
                                the_post_thumbnail('thumbnail'); 
                            }
                        ?>
                            </figure>
                            <h1><?php the_title(); ?></h1>
                            <a href="<?php the_permalink(); ?>" class="btl">Veja mais</a>
                        </div>
                    </a>
                </div>
                <?php endwhile; else : ?>
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <h3 class="noR">Sem posts registrados!</h1>
                </div>
                <?php endif; wp_reset_query();?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>