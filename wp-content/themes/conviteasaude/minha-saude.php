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
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="minha-saude" data-aos="fade-in">
                    <div class="title">
                        <h1><span>Minha Saúde</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                    <div class="listposts listpostsinner">
                        <div class="destaque">

                            <?php
                            $args = array(
                                'cat'       => 2, 
                                'showposts' => 3
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

                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

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
            </div>
        </div>
    </div>
</section>
<section class="section" id="archive">
    <div class="posts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Minhas Publicações</h1>
                </div>

                <?php
                $args = array(
                    'cat'       => 2, 
                    'showposts' => 8
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();
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
                    <h3 class="noR">Sem posts registrados!</h1>
                </div>
                <?php endif; wp_reset_query();?>

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
            $args = array(
                'cat'       => 3, 
                'showposts' => 4
            );
            $the_query = new WP_Query( $args );
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

<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>