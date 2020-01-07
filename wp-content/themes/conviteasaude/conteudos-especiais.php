<?php /* Template Name: Conteúdos Especiais */ ?>
<?php 
    get_header(); 
    include'slider.php'; 
    include'navinterno.php'; 
?>



<?php
    include'loop-ebooks.php'; 

    $args = array(
        'post_type' => 'conteudosespeciais', 
        'categorias' => 'videos',
        'showposts' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>
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
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
                    $fields = get_fields();
            ?>

            <div class="col-md-3">
                <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <div class="box">
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php
    $args = array(
        'post_type' => 'conteudosespeciais', 
        'categorias' => 'cursos',
        'showposts' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>
<section class="section" id="ebooks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>Cursos</span>
                        <div class="ft"></div>
                    </h1>
                </div>
            </div>

            <?php
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
                    $fields = get_fields();
            ?>

            <div class="col-md-3">
                <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <div class="box">
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php
    $args = array(
        'post_type' => 'conteudosespeciais', 
        'categorias' => 'podcast',
        'showposts' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>
<section class="section" id="ebooks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>Podcast</span>
                        <div class="ft"></div>
                    </h1>
                </div>
            </div>

            <?php
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
                    $fields = get_fields();
            ?>

            <div class="col-md-3">
                <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <div class="box">
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php
    $args = array(
        'post_type' => 'conteudosespeciais', 
        'categorias' => 'infograficos',
        'showposts' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>
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
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $thumbEbooks = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbEbooks' );
                    $fields = get_fields();
            ?>

            <div class="col-md-3">
                <a href="<?php echo $fields['link']; ?>" target="_blank">
                    <div class="box">
                        <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<?php endif; ?>

<section class="section">
    <div class="container">
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
</section>
<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>