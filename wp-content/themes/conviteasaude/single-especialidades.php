<?php 
    get_header(); 
    include'slider.php'; 
?>

<section class="section" id="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="bread">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                    ?>
                </div>
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
            <div class="col-md-3">
                <aside id="sidebar" data-aos="fade-left" data-aos-delay="300">
                    <h1>Leia Também</h1>
                    <div class="posts">
                        <ul>

                            <?php
                            // The Query
                            $args = array(
                                'showposts' => 8,
                                'orderby' => 'rand',
                            );
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                            ?>

                            <li>
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbSidebar'); ?>
                                    </a>
                                </figure>
                                <div class="txt">
                                    <span class="cat">
                                        <?php the_category(', '); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                    </a>
                                </div>
                            </li>

                            <?php endwhile;  else : ?>    

                                <h3>Sem registros encontrados!</h3>

                            <?php 
                                endif;
                                wp_reset_postdata();
                            ?>
                            
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>