<?php /* Template Name: Especialidades */ ?>
<?php 
    get_header(); 
    include'slider.php'; 
    
    global $wpdb;

    if (isset($_GET['l']) AND ($_GET['l'] != '')) {
        $l = $_GET['l'];
        $first_char = strtoupper(esc_attr($l));
    } 
    if (isset($_GET['sn']) AND ($_GET['sn'] != '')) {
        $sn = $_GET['sn'];
        $sTerm = strtoupper(esc_attr($sn));
    } 
    include'navinterno.php';
?>

<section class="section" id="archiveInner">
    <div class="posts">
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
                        <h1><span>Especialidades</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                    <div class="filter">
                        <div class="box">
                            <h3>Pesquise pela primeira letra:</h3>
                            <ul>
                                <li> <a href="">A</a> </li>
                                <li> <a href="">B</a> </li>
                                <li> <a href="">C</a> </li>
                                <li> <a href="">D</a> </li>
                                <li> <a href="">E</a> </li>
                                <li> <a href="">F</a> </li>
                                <li> <a href="">G</a> </li>
                                <li> <a href="">H</a> </li>
                                <li> <a href="">I</a> </li>
                                <li> <a href="">J</a> </li>
                                <li> <a href="">K</a> </li>
                                <li> <a href="">L</a> </li>
                                <li> <a href="">M</a> </li>
                                <li> <a href="">N</a> </li>
                                <li> <a href="">O</a> </li>
                                <li> <a href="">P</a> </li>
                                <li> <a href="">Q</a> </li>
                                <li> <a href="">R</a> </li>
                                <li> <a href="">S</a> </li>
                                <li> <a href="">T</a> </li>
                                <li> <a href="">U</a> </li>
                                <li> <a href="">V</a> </li>
                                <li> <a href="">W</a> </li>
                                <li> <a href="">X</a> </li>
                                <li> <a href="">Y</a> </li>
                                <li> <a href="">Z</a> </li>
                            </ul>
                            <form id="formFilterSl" method="get" action="<?php echo home_url('doencas-e-sintomas'); ?>">
                                <button class="bt">Pesquisar</button>
                                <a href="<?php echo home_url('doencas-e-sintomas'); ?>" class="btn"> Limpar</a>
                            </form>
                        </div>
                        <div class="box">
                            <h3>Pesquise pelo nome:</h3>
                            <form action="<?php echo home_url('doencas-e-sintomas'); ?>" method="get" accept-charset="utf-8" role="search" class="formS">
                                <input type="search" class="form-control" placeholder="Digite sua busca" name="sn" id="sn" value="<?php the_search_query(); ?>">
                                <button><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="listEspecialidades">
                        <?php
                            $postids = $wpdb->get_col($wpdb->prepare("
                                SELECT      ID
                                FROM        $wpdb->posts
                                WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
                                AND 		$wpdb->posts.post_type = 'especialidades'
                                ORDER BY    $wpdb->posts.post_title", $first_char));
                                                        
                            if ( $postids ) {
                                $args = array(
                                    'post__in' => $postids,
                                    'posts_per_page' => 9,
                                    'paged' => $paged,
                                    'post_type' => 'especialidades',
                                );
                            }
                            else if ( $sTerm ) {
                                $args = array(
                                    's' => $sTerm,
                                    'posts_per_page' => 9,
                                    'paged' => $paged,
                                    'post_type' => 'especialidades',
                                );
                            }
                            else {
                                $args = array(
                                    'posts_per_page' => 9,
                                    'paged' => $paged,
                                    'post_type' => 'especialidades',
                                    'post__in' => $postids,
                                );
                            }
                            $posts = new WP_Query( $args );
                            if ( $posts->have_posts() ) :
                                while ( $posts->have_posts() ) :
                                    $posts->the_post();
                        ?>

                        
                            <div class="box">
                                <div class="inner">
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
                                </div>
                            </div>

                        <?php endwhile;  else : ?>

                            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                                <h3>Sem posts registrados!</h1>
                            </div>

                            <?php endif; wp_pagenavi( array( 'query' => $posts ) ); wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
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
</section>


<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>