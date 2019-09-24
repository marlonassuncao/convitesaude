<?php /* Template Name: Doenças e Sintomas */ ?>
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
<section class="section" id="archiveInner">
    <div class="posts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="title">
                        <h1><span>Doenças e <br> Sintomas</span>
                            <div class="ft"></div>
                        </h1>
                    </div>
                    <div class="filter">
                        <div class="box">
                            <h3>Pesquise pela primeira letra:</h3>
                            <form id="formFilterSl" method="get" action="<?php echo home_url('doencas-e-sintomas'); ?>">
                                <select class="form-control" name="l">
                                    <option value="">Selecione a letra</option>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                    <option value="e">E</option>
                                    <option value="f">F</option>
                                    <option value="g">G</option>
                                    <option value="h">H</option>
                                    <option value="i">I</option>
                                    <option value="j">J</option>
                                    <option value="k">K</option>
                                    <option value="l">L</option>
                                    <option value="m">M</option>
                                    <option value="n">N</option>
                                    <option value="o">O</option>
                                    <option value="p">P</option>
                                    <option value="q">Q</option>
                                    <option value="r">R</option>
                                    <option value="s">S</option>
                                    <option value="t">T</option>
                                    <option value="u">U</option>
                                    <option value="v">V</option>
                                    <option value="w">W</option>
                                    <option value="x">X</option>
                                    <option value="y">Y</option>
                                    <option value="z">Z</option>
                                </select>
                                <button class="bt">Pesquisar</button>
                                <a href="<?php echo home_url('doencas-e-sintomas'); ?>" class="btn"> Limpar</a>
                            </form>
                        </div>
                        <div class="box">
                            <h3>Pesquise pelo nome:</h3>
                            <form action="<?php echo home_url('doencas-e-sintomas'); ?>" method="get" accept-charset="utf-8" role="search">
                                <input type="search" class="form-control" placeholder="Digite sua busca" name="sn" id="sn" value="<?php the_search_query(); ?>">
                                <button><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>

                    <?php
                        $postids = $wpdb->get_col($wpdb->prepare("
                            SELECT      ID
                            FROM        $wpdb->posts
                            WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
                            AND 		$wpdb->posts.post_type = 'doencas'
                            ORDER BY    $wpdb->posts.post_title", $first_char));
                                                    
                        if ( $postids ) {
                            $args = array(
                                'post__in' => $postids,
                                'posts_per_page' => 16,
                                'paged' => $paged,
                                'post_type' => 'doencas',
                            );
                        }
                        else if ( $sTerm ) {
                            $args = array(
                                's' => $sTerm,
                                'posts_per_page' => 16,
                                'paged' => $paged,
                                'post_type' => 'doencas',
                            );
                        }
                        else {
                            $args = array(
                                'posts_per_page' => 16,
                                'paged' => $paged,
                                'post_type' => 'doencas',
                                'post__in' => $postids,
                            );
                        }
                        $posts = new WP_Query( $args );
                        if ( $posts->have_posts() ) :
                            while ( $posts->have_posts() ) :
                                $posts->the_post();
                    ?>

                    <div class="col-md-12">
                        <div class="box">
                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('thumbPrincipal'); ?>
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
                    <?php endif; wp_pagenavi(); wp_reset_query(); ?>
                </div>
                <div class="col-md-3">
                    <aside id="sidebar" data-aos="fade-left" data-aos-delay="300">
                        <h1>E-books</h1>
                        <div class="posts">
                            <ul>

                                <?php
                                // The Query
                                $args = array(
                                    'post_type' => 'conteudosespeciais', 
                                    'categorias' => 'e-books',
                                    'showposts' => 4
                                );
                                $the_query = new WP_Query( $args );

                                // The Loop
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) :
                                        $the_query->the_post();
                                        $fields = get_fields();
                                ?>

                                <li>
                                    <figure>
                                        <a href="<?php echo $fields['link']; ?>" target="_blank">
                                            <?php the_post_thumbnail(); ?>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                    </figure>
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
    </div>
</section>


<?php 
    include'loop-especialistas.php';
    get_footer(); 
?>