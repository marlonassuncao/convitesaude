<?php get_header(); ?>

<div id="slider">
    <div class="container-fluid" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
        <div class="slide"></div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/slider.jpg"></div>
</div>
<section class="section" id="page">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div data-aos="fade-right" data-aos-delay="300">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <figure class="imgprincipal">
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <?php the_content(); ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>