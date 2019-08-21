<?php 
    get_header(); 
    $fields = get_fields();
    // print_r($fields);
?>

<div id="slider">
    <div class="container-fluid">
        <div class="slide"></div>
    </div>
    <div class="perfil">
        <div class="top" style="<?php if($fields['cor_do_perfil']) : echo 'background-color: '.$fields['cor_do_perfil'].''; endif; ?>">
            <div class="container-fluid">
                <div class="socials" data-aos="fade-in" data-aos-delay="100">
                    <?php if($fields['facebook']) : echo '<a href="'.$fields['facebook'].'"><i class="ion-social-facebook"></i></a>'; endif; ?>
                    <?php if($fields['instagram']) : echo '<a href="'.$fields['instagram'].'"><i class="ion-social-instagram"></i></a>'; endif; ?>
                    <?php if($fields['twitter']) : echo '<a href="'.$fields['twitter'].'"><i class="ion-social-twitter"></i></a>'; endif; ?>
                    <?php if($fields['linkedin']) : echo '<a href="'.$fields['linkedin'].'"><i class="ion-social-linkedin"></i></a>'; endif; ?>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container-fluid" data-aos="fade-right" data-aos-delay="100">
                <figure>
                    <?php if(has_post_thumbnail()) : the_post_thumbnail('url'); else : ?>
                        <img src="<?php bloginfo('template_directory'); ?>/app/images/perfil.jpg" alt="">
                    <?php endif; ?>
                </figure>
                <div class="title" >
                    <h1><?php echo $fields['nome_destaque']; ?></h1>
                    <div class="subTitle"><?php echo $fields['especialidade']->post_title; ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php if($fields['banner']) : ?>
    <div class="parallax" data-parallax-image="<?php echo $fields['banner']; ?>"></div>
    <?php else : ?>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/slider.jpg"></div>
    <?php endif; ?>
</div>
<section class="section" id="page">
    <div class="container-fluid perfil">
        <div class="row">
            <div class="col-md-6">
            <div data-aos="fade-in" data-aos-delay="200">
                    <div class="box">
                        <h3>Especialidades</h3>
                        <ul>
                            <?php if($fields['locais_de_atendimento']) : foreach($fields['locais_de_atendimento'] as $locais_de_atendimento) : ?>
                            <li><?php echo $locais_de_atendimento['titulo']; ?></li>
                            <?php endforeach; else : ?>
                            <p>Sem informações.</p>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div data-aos="fade-in" data-aos-delay="400">
                    <div class="box">
                        <h3>Serviços</h3>
                        <ul>
                            <?php if($fields['servicos']) : foreach($fields['servicos'] as $servicos) : ?>
                            <li><?php echo $servicos['titulo']; ?></li>
                            <?php endforeach; else : ?>
                            <p>Sem informações.</p>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="dicas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div data-aos="fade-in" data-aos-delay="100">
                    <div class="box">
                        <h3><strong>D</strong>icas <br> Saúde</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="txt" data-aos="fade-in" data-aos-delay="300">
                    <?php if($fields['dicas_de_saude']) : echo $fields['dicas_de_saude']; else : echo '<p>Sem informações.</p>'; endif;  ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="galeria">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div data-aos="fade-in" data-aos-delay="100">
                    <div class="box">
                        <h3>Minhas Galeria de Fotos</h3>
                    </div>
                    <div class="galeria">
                        <?php if($fields['galeria_de_fotos']) : ?>
                        <ul class="owl-carousel owl-theme owlGaleria">
                            <?php foreach($fields['galeria_de_fotos'] as $galeria_de_fotos) : ?>
                                <li>
                                    <figure>
                                        <img src="<?php echo $galeria_de_fotos['sizes']['thumbnail']; ?>" class="img-fluid" alt="">
                                    </figure>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php else : ?>
                        <p>Sem informações.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="pets">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div data-aos="fade-in" data-aos-delay="100">
                    <div class="box">
                        <h3>Meus Pets</h3>
                    </div>
                    <div class="galeria">
                        <?php if($fields['meus_pets']) : ?>
                        <ul class="owl-carousel owl-theme owlPets">
                            <?php foreach($fields['meus_pets'] as $meus_pets) : ?>
                                <li>
                                    <figure>
                                        <img src="<?php echo $meus_pets['imagem']['sizes']['thumbnail']; ?>" class="img-fluid" alt="">
                                    </figure>
                                    <div class="txt">
                                       <p><?php echo $meus_pets['texto']; ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php else : ?>
                        <p>Sem informações.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="archive">
    <div class="posts">
        <div class="container-fluid" data-aos="fade-in" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <h1>Minhas Publicações</h1>
                </div>

                <?php
                $args = array(
                    'cat'       => 2, 
                    'showposts' => 4
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
                <div class="col-md-12">
                    <h3 class="noR">Sem posts registrados!</h1>
                </div>
                <?php endif; wp_reset_query();?>

            </div>
        </div>
    </div>
</section>
<section class="section" id="archive">
    <div class="posts">
        <div class="container-fluid" data-aos="fade-in" data-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <h1>Minhas Receitas</h1>
                </div>

                <?php
                $args = array(
                    'cat'       => 2, 
                    'showposts' => 4
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
                <div class="col-md-12">
                    <h3 class="noR">Sem posts registrados!</h1>
                </div>
                <?php endif; wp_reset_query();?>

            </div>
        </div>
    </div>
</section>
<div id="ad">
    <img src="https://via.placeholder.com/728x90?text=728x90" class="img-fluid" alt="">
</div>

<?php get_footer(); ?>