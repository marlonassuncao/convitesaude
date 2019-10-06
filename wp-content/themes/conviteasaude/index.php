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
                    <?php
                        $args = array(
                            'cat'       => 1, 
                            'showposts' => 1
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) :
                    ?>
                        <div class="destaque">

                            <?php
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

                            <?php endwhile; ?>

                        </div>
                        
                        <?php 
                            endif;
                            wp_reset_postdata();
                        ?>

                        <div class="allposts">

                            <?php
                            $args = array(
                                'cat'       => 1, 
                                'showposts' => 3,
                                'offset' => 1
                            );
                            $the_query = new WP_Query( $args );
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
                            
                            <?php endwhile;  else : ?>    

                                <h3>Sem registros encontrados!</h3>

                            <?php 
                                endif;
                                wp_reset_postdata();
                            ?>

                        </div>
                        <div class="btnend">
                            <a href="<?php bloginfo('url'); ?>/?page_id=13428" class="btn">Veja mais</a>
                        </div>
                    </div>
                    <div class="listcat">
                        <h3>Escolha o conteúdo por editoria</h3>
                        <ul>
                            <?php
                                $categories=get_categories(
                                    array( 'parent' => 1, 'hide_empty' => false )
                                );
                                foreach ($categories as $c) :
                                    $icone = get_field('icone', 'category_'.$c->term_id);
                            ?>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/?cat=<?php echo $c->cat_ID; ?>">
                                    <?php if(!$icone) : ?>
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/ico.png"
                                                alt=""></figure>
                                    <?php else : ?>
                                        <figure><img src="<?php echo $icone; ?>"
                                            alt=""></figure>
                                    <?php endif; ?>
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

                    <?php
                        $args = array(
                            'cat'       => 415, 
                            'showposts' => 1
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) :
                    ?>
                        <div class="destaque">

                            <?php
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

                            <?php endwhile; ?>

                        </div>

                        <?php 
                            endif;
                            wp_reset_postdata();
                        ?>

                        <div class="allposts">

                            <?php
                            $args = array(
                                'cat'       => 415, 
                                'showposts' => 3,
                                'offset' => 1
                            );
                            $the_query = new WP_Query( $args );
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

                            <?php endwhile;  else : ?>    

                                <h3>Sem registros encontrados!</h3>

                            <?php 
                                endif;
                                wp_reset_postdata();
                            ?>

                        </div>
                        <div class="btnend">
                            <a href="<?php bloginfo('url'); ?>/?page_id=13430" class="btn">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="listcat listcatanimal">
                    <h3>Escolha o conteúdo por editoria</h3>
                    <ul>
                        <?php
                            $categories=get_categories(
                                array( 'parent' => 415, 'hide_empty' => false )
                            );
                            foreach ($categories as $c) :
                                $icone = get_field('icone', 'category_'.$c->term_id);
                        ?>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/?cat=<?php echo $c->cat_ID; ?>">
                                <?php if(!$icone) : ?>
                                    <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/ico.png"
                                            alt=""></figure>
                                <?php else : ?>
                                    <figure><img src="<?php echo $icone; ?>"
                                        alt=""></figure>
                                <?php endif; ?>
                                <?php echo $c->cat_name; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <aside id="sidebar" data-aos="fade-left" data-aos-delay="300">
                    <h1>Notícias</h1>
                    <div class="posts">
                        <ul>

                            <?php
                            // The Query
                            $args = array(
                                'cat'       => 414, 
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

<?php 
    include'loop-ebooks.php';
    include'loop-especialistas.php';
    get_footer();
?>