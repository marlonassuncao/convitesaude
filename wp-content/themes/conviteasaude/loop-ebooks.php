<?php
    $args = array(
        'post_type' => 'conteudosespeciais', 
        'categorias' => 'e-books',
        'showposts' => 4
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>
<section class="section" id="ebooks">
    <div class="container-fluid">
        <?php if(is_page(13436) || is_page(15838)) : ?>
        <div class="bread">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1><span>E-books</span>
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
                        <!-- <h1><?php the_title(); ?></h1> -->
                        <!-- <figure style="background-image: url('<?php echo $thumbEbooks[0]; ?>')"></figure> -->
                        <figure><img src="<?php echo $thumbEbooks[0]; ?>" class="img-fluid" alt=""></figure>
                    </div>
                </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<?php endif; ?>