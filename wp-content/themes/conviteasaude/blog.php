<?php /* Template Name: Blog */ ?>
<?php get_header(); include'slider.php'; ?>

<nav id="navinterno">
    <div class="container">
        <ul>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13432">Doenças e Sintomas</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13434">Blog</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13436">Conteúdo Especial</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13439">Especiliadades</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13441">Especialistas</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13443">Clínicas</a>
            </li>
        </ul>
    </div>
</nav>
<section class="section" id="archive">
    <div class="posts">
        <div class="container-fluid">
            <div class="bread">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
            <div class="row">
                <div class="title">
                    <h1><span>Últimos posts <br> do Blog</span>
                        <div class="ft"></div>
                    </h1>
                </div>

                <?php
                $args = array(
                    'posts_per_page' => 16,
                    'paged' => $paged
                );
                $posts = new WP_Query( $args );
                if ( $posts->have_posts() ) :
                    while ( $posts->have_posts() ) :
                        $posts->the_post();
                ?>

                <div class="col-md-3">
                    <div class="box">
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
                    </div>
                </div>
                <?php endwhile; else : ?>
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <h3>Sem posts registrados!</h1>
                </div>
                <?php endif; wp_pagenavi( array( 'query' => $posts ) ); wp_reset_query(); ?>

            </div>
            <div class="listcat">
                <h1>Escolha o conteúdo por editoria</h1>
                <h3>Minha Saúde</h3>
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
            <div class="listcat listcatanimal">
                <h3>Sáude Animal</h3>
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
    </div>
</section>

<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>