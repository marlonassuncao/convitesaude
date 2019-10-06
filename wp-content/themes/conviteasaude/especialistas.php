<?php /* Template Name: Especialistas */ ?>
<?php 
    get_header(); 
    include'slider.php';  
?>

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
<section class="section" id="listEspecialistas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bread">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                    ?>
                </div>
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
                'showposts' => 32,
                'orderby' => 'rand',
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
                            <?php if($crm) : ?>
                                <small><span>Registro Profissional</span> <?php echo $crm; ?></small>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile;  else : ?>    

            <h3>Sem registros encontrados!</h3>

            <?php 
                endif;
                wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

<?php 
    get_footer(); 
?>