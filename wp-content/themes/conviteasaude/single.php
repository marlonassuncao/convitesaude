<?php 
    get_header(); 
    include'slider-archive.php'; 
    $fields = get_fields();
    // print_r($fields); die;
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
                    <span class="cat">
                       <span><strong>Categorias: </strong></span> <?php the_category(', '); ?>
                    </span>
                    <div class="data">Atualizado em: <?php the_time('j \d\e F \d\e Y'); ?></div>
                   
                    <?php 
                        if( $fields['autor']) : 
                            $nome_destaque = get_field('nome_destaque', $fields['autor'][0]->ID);
                            $especialidade = get_field('especialidade', $fields['autor'][0]->ID);
                    ?>
                        <div class="autor">
                            <?php if (has_post_thumbnail( $fields['autor'][0]->ID ) ) : $image = wp_get_attachment_image_src( get_post_thumbnail_id( $fields['autor'][0]->ID ), 'single-post-thumbnail' ); ?>
                                <figure>
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                </figure>
                                <div class="txt">
                                    <h3>Por: <a href="<?php echo $fields['autor'][0]->guid; ?>"><?php echo $nome_destaque; ?></a></h3>
                                    <a href="<?php echo $especialidade->guid; ?>"><?php echo $especialidade->post_title; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <figure class="imgprincipal">
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <?php the_content(); ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
                <?php 
                    if( $fields['autor']) : 
                        $nome_destaque = get_field('nome_destaque', $fields['autor'][0]->ID);
                        $especialidade = get_field('especialidade', $fields['autor'][0]->ID);
                        $crm = get_field('crm', $fields['autor'][0]->ID);
                ?>
                    <div class="autor autor_">
                        <?php if (has_post_thumbnail( $fields['autor'][0]->ID ) ) : $image = wp_get_attachment_image_src( get_post_thumbnail_id( $fields['autor'][0]->ID ), 'single-post-thumbnail' ); ?>
                            <figure>
                                <img src="<?php echo $image[0]; ?>" alt="">
                            </figure>
                            <div class="txt">
                                <h3>Por: <a href="<?php echo $fields['autor'][0]->guid; ?>"><?php echo $nome_destaque; ?></a></h3>
                                <a href="<?php echo $especialidade->guid; ?>"><?php echo $especialidade->post_title; ?></a>
                                <p> <strong>CRM:</strong> <?php echo $crm; ?></p>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit modi natus corporis nam quaerat hic totam, expedita incidunt accusantium consequuntur harum reiciendis earum magni cumque, laudantium sint mollitia? A, magni?</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
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

<?php if( $fields['autor']) : ?>
<section class="section" id="archive">
    <div class="posts">
        <div class="container-fluid">
            <div class="row">
                <div class="title">
                    <h1><span>Publicações do Autor</span>
                        <div class="ft"></div>
                    </h1>
                </div>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'orderby' => 'rand',
                    'meta_query' => array(
                        array(
                            'key' => 'autor',
                            'value' => '"' . $fields['autor'][0]->ID . '"',
                            'compare' => 'LIKE'
                        )
                    )
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
<?php endif; ?>

<?php get_footer(); ?>