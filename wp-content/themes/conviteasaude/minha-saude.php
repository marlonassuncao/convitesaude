<?php /* Template Name: Minha Saúde */ ?>
<?php get_header(); ?>

<div id="slider">
    <div class="container-fluid" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
        <div class="slide">
            <h1><?php the_title(); ?></h1>
            <div id="mlb2-1436384" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-1436384 form">
                <form class="ml-block-form" action="https://app.mailerlite.com/webforms/submit/a0f5v4"
                    data-code="a0f5v4" method="post" target="_blank">
                    <div class="ml-form-formContent horozintalForm">
                        <div class="ml-form-horizontalRow">
                            <div class="ml-input-horizontal">
                                <div style="width: 100%;" class="horizontal-fields">
                                    <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                        <input style="width: 100%;" type="email" class="form-control" data-inputmask=""
                                            name="fields[email]" value="" placeholder="Digite seu melhor e-mail"
                                            required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="ml-button-horizontal">
                                <button type="submit" class="primary btn">Inscrevar</button>
                                <button disabled="disabled" style="display: none;" type="button" class="loading">
                                    <div class="ml-form-embedSubmitLoad">
                                        <img src="<?php bloginfo('template_directory'); ?>/app/images/preloader.svg"
                                            alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="ml-submit" value="1">
                </form>
                <div class="ml-form-successBody row-success" style="display: none">
                    <div class="ml-form-successContent">
                        <h4>Obrigado!</h4>
                        <p>Tudo pronto, basta confirmar seu e-mail e você receberá nossa novidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/slider.jpg"></div>
</div>

<?php include'navinterno.php'; ?>

<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="minha-saude" data-aos="fade-in">
                    <div class="bread">
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                            }
                        ?>
                    </div>
                    <div class="title">
                        <h1><span>Destaques</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                    <div class="listposts listpostsinner">
                        <div class="destaque">

                            <?php
                            $args = array(
                                'cat'       => 1, 
                                'showposts' => 3,
                                'meta_query' => array(
                                    array(
                                        'key' => 'destaque',
                                        'compare' => '=',
                                        'value' => '1'
                                    )
                                )
                            );
                            $the_query = new WP_Query( $args );

                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                            ?>

                            <div class="box">
                                <div class="desc">
                                    <span class="cat">
                                        <?php the_category(', '); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                    </a>
                                </div>
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbPrincipal'); ?>
                                    </a>
                                </figure>
                            </div>

                            <?php endwhile;  else : ?>    

                                <h3>Sem registros encontrados!</h3>

                            <?php 
                                endif;
                                wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                    <div class="listcat">
                        <div class="title">
                            <h1><span>Escolha o conteúdo <br>  por editoria</span>
                                <div class="ft"></div>
                            </h1>
                        </div>
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
                    <div class="adsense">
                                        
                            <?php
                            $args = array(
                                'post_type' => 'adsense',
                                'showposts' => 1,
                                'orderby' => 'rand',
                                'categorias-adsense' => 'editorias-bottom-728x90'
                            );
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) :
                                    $the_query->the_post();
                                    $fields = get_fields();
                                    if( get_field('local') == 'h01' ) :
                            ?>
                                <figure>
                                    <?php if($fields['link']) : ?>
                                    <a href="<?php echo $fields['link']; ?>">
                                        <img src="<?php echo $fields['imagem']['url']; ?>" alt="<?php wp_title(); ?>">
                                    </a>
                                    <?php else : ?>
                                        <img src="<?php echo $fields['imagem']['url']; ?>" alt="<?php wp_title(); ?>">
                                    <?php endif; ?>
                                </figure>

                            <?php 
                                endif;
                                endwhile; 
                                endif;
                                wp_reset_postdata();
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="archive">
    <div class="posts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h1><span>Últimos Posts</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                </div>

                <?php
                $args = array(
                    'cat' => 1, 
                    'posts_per_page' => 8,
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
        </div>
    </div>
</section>

<?php 
    include'loop-ebooks.php';
    include'loop-especialistas.php';
    get_footer(); 
?>