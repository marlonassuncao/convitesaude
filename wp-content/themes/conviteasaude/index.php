<?php /*Template Name:Home*/ ?>
<?php get_header(); ?>

<div id="slider">
    <?php putRevSlider( 'slider' ); ?>
</div>
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="minha-saude" data-aos="fade-in">
                    <div class="title">
                        <h1><span>Minha Saúde</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                    <div class="listposts">
                        <div class="destaque">

                            <?php
                            // The Query
                            $args = array(
                                'cat'       => 2, 
                                'showposts' => 1
                            );
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                            ?>

                            <div class="box">
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbPrincipal'); ?>
                                    </a>
                                </figure>
                                <div class="desc">
                                    <span class="cat">
                                        <?php the_category(', '); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                    </a>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                        <div class="allposts">

                            <?php
                            // The Query
                            $args = array(
                                'cat'       => 2, 
                                'showposts' => 4
                            );
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                            ?>

                            <div class="box">
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbPrincipalSmall'); ?>
                                    </a>
                                </figure>
                                <div class="desc">
                                    <span class="cat">
                                        <?php the_category(', '); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                    </a>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                        <div class="btnend">
                            <a href="#" class="btn">Veja mais</a>
                        </div>
                    </div>
                    <div class="listcat">
                        <h3>Escolha o conteúdo por editoria</h3>
                        <ul>
                            <?php
                                $categories=get_categories(
                                    array( 'parent' => 2 )
                                );
                                foreach ($categories as $c) :
                            ?>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/?cat=<?php echo $c->cat_ID; ?>">
                                    <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/ico.png"
                                            alt=""></figure>
                                    <?php echo $c->cat_name; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="saude-do-animal" data-aos="fade-in">
                    <div class="title">
                        <h1><span>Saúde do Animal</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                    <div class="listposts">
                        <div class="destaque">

                            <?php
                            // The Query
                            $args = array(
                                'cat'       => 3, 
                                'showposts' => 1
                            );
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                            ?>

                            <div class="box">
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbPrincipal'); ?>
                                    </a>
                                </figure>
                                <div class="desc">
                                    <span class="cat">
                                        <?php the_category(', '); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                    </a>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                        <div class="allposts">

                            <?php
                            // The Query
                            $args = array(
                                'cat'       => 3, 
                                'showposts' => 4
                            );
                            $the_query = new WP_Query( $args );

                            // The Loop
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                            ?>

                            <div class="box">
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbPrincipalSmall'); ?>
                                    </a>
                                </figure>
                                <div class="desc">
                                    <span class="cat">
                                        <?php the_category(', '); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                    </a>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                        <div class="btnend">
                            <a href="#" class="btn">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="listcat listcatanimal">
                    <h3>Escolha o conteúdo por editoria</h3>
                    <ul>
                        <?php
                            $categories=get_categories(
                                array( 'parent' => 2 )
                            );
                            foreach ($categories as $c) :
                        ?>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/?cat=<?php echo $c->cat_ID; ?>">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/ico.png" alt="">
                                </figure>
                                <?php echo $c->cat_name; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <aside data-aos="fade-left" data-aos-delay="300">
                    <h1>Notícias</h1>
                    <div class="posts">
                        <ul>

                            <?php
                            // The Query
                            $args = array(
                                'cat'       => 3, 
                                'showposts' => 4
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
                                        <?php the_post_thumbnail('thumbPrincipalSmall'); ?>
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

                            <?php
                                endwhile;
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
<section class="section" id="ebooks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>E-books</span>
                        <div class="ft"></div>
                    </h1>
                </div>
            </div>

            <?php
            // The Query
            $args = array(
                'cat'       => 3, 
                'showposts' => 4
            );
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
            ?>

            <div class="col-md-3">
                <a href="#">
                    <div class="box">
                        <h1><?php the_title(); ?></h1>
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
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

<?php get_footer();?>