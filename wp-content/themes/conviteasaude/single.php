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
<section class="section" id="listEspecialistas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>Nossos Especialistas</span>
                        <div class="ft"></div>
                    </h1>
                </div>
            </div>

            <?php
            // The Query
            $args = array(
                'post_type' => 'especialistas', 
                'showposts' => 4
            );
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $crm = get_field('crm'); 
                    $especialidade = get_field('especialidade'); 
            ?>

            <div class="col-md-3">
                <a href="#">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <figure>
                            <?php the_post_thumbnail('thumbPrincipalSmall'); ?>
                        </figure>
                        <div class="txt">
                            <h1><?php the_title(); ?></h1>
                            <strong><?php echo $especialidade; ?></strong>
                            <small><span>CRM</span><?php echo $crm; ?></small>
                        </div>
                    </div>
                </a>
            </div>

            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>