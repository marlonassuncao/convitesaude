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
                <a href="<?php the_permalink(); ?>">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <figure>
                            <?php if(has_post_thumbnail()) : the_post_thumbnail('thumbPrincipalSmall'); else : ?>
                                <img src="<?php bloginfo('template_directory'); ?>/app/images/perfil.jpg" alt="">
                            <?php endif; ?>
                        </figure>
                        <div class="txt">
                            <h1><?php the_title(); ?></h1>
                            <strong><?php print_r($especialidade->post_title); ?></strong>
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