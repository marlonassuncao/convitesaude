<?php get_header(); include'slider-archive.php'; ?>

<section class="section" id="archiveInner">
    <div class="posts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="title">
                        <h1><span><?php single_cat_title(); ?></span>
                            <div class="ft"></div>
                        </h1>
                    </div>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="col-md-12">
                        <div class="box">
                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('thumbPrincipal'); ?>
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
                        </div>
                    </div>
                    <?php endwhile; else : ?>
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                        <h3>Sem posts registrados!</h1>
                    </div>
                    <?php endif; wp_pagenavi(); wp_reset_query(); ?>
                </div>
                <div class="col-md-3">
                    <aside id="sidebar" data-aos="fade-left" data-aos-delay="300">
                        <h1>E-books</h1>
                        <div class="posts">
                            <ul>

                                <?php
                                // The Query
                                $args = array(
                                    'post_type' => 'conteudosespeciais', 
                                    'categorias' => 'e-books',
                                    'showposts' => 4
                                );
                                $the_query = new WP_Query( $args );

                                // The Loop
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) :
                                        $the_query->the_post();
                                        $fields = get_fields();
                                ?>

                                <li>
                                    <figure>
                                        <a href="<?php echo $fields['link']; ?>" target="_blank">
                                            <?php the_post_thumbnail(); ?>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                    </figure>
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
        
    </div>
</section>

<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>