<?php /* Template Name: Conteúdos Especiais */ ?>
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

<?php include'loop-ebooks.php'; ?>

<section class="section" id="ebooks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>Vídeos</span>
                        <div class="ft"></div>
                    </h1>
                </div>
            </div>

            <?php
            // The Query
            $args = array(
                'post_type' => 'conteudosespeciais', 
                'categorias' => 'videos',
                'showposts' => 4
            );
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
                    $fields = get_fields();
            ?>

            <div class="col-md-3">
                <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <div class="box">
                        <!-- <h1><?php the_title(); ?></h1> -->
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
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

<section class="section" id="ebooks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>Infográficos</span>
                        <div class="ft"></div>
                    </h1>
                </div>
            </div>

            <?php
            // The Query
            $args = array(
                'post_type' => 'conteudosespeciais', 
                'categorias' => 'infograficos',
                'showposts' => 4
            );
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
                    $fields = get_fields();
            ?>

            <div class="col-md-3">
                <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <div class="box">
                        <!-- <h1><?php the_title(); ?></h1> -->
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
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
    include'loop-especialistas.php';
    get_footer(); 
?>