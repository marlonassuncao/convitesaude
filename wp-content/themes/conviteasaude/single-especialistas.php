<?php 
    get_header(); 
    $fields = get_fields();
?>

<div id="slider">
    <div class="container-fluid">
        <div class="slide"></div>
    </div>
    <div class="perfil" style="<?php if($fields['cor_do_perfil_secundaria']) : echo 'background-color: '.$fields['cor_do_perfil_secundaria'].''; endif; ?>">
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
                <?php if(has_post_thumbnail()) : the_post_thumbnail('thumbnail'); else : ?>
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
                <div data-aos="fade-in" data-aos-delay="100">
                    <div class="box">
                        <h3>Informações Pessoais</h3>
                        <?php echo $fields['curriculo']; ?>
                        <div class="reg"><strong><?php print_r($fields['especialidade']->post_title); ?></strong></div>
                        <?php if($fields['crm']) : ?>
                            <div class="reg"><strong>Registro Profissional: </strong> <?php echo $fields['crm']; ?></div>
                        <?php endif; ?>
                        <?php if($fields['rqe']) : ?>
                            <div class="reg"><strong>RQE: </strong> <?php echo $fields['rqe']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="navTels">
                    <?php if($fields['telefone']) : ?>
                        <a href="tel:<?php echo $fields['telefone']; ?>" target="_blank" class="btn"> <i class="ion-android-call"></i> Ligação</a>
                    <?php endif; ?>
                    <?php if($fields['whatsapp']) : ?>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $fields['whatsapp']; ?>" target="_blank" class="btn"> <i class="ion-social-whatsapp-outline"></i> Mensagem</a>
                    <?php endif; ?>
                    <?php if($fields['e-mail']) : ?>
                        <a href="mailto:<?php echo $fields['e-mail']; ?>" target="_blank" class="btn"> <i class="ion-paper-airplane"></i> E-mail</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if($fields['texto_destaque']) : ?>
<section class="section" id="plx">
    <div class="container-fluid">
        <div class="txt" data-aos="fade-in" data-aos-delay="100"><?php echo $fields['texto_destaque']; ?></div>
    </div>
    <div class="parallax" data-parallax-image="<?php echo $fields['banner_destaque']['url']; ?>"></div>
</section>
<?php endif; ?>

<?php if($fields['servicos']) : ?>
<section class="section" id="servicos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1>Serviços</h1>
                </div>
            </div>
            <div class="col-md-12">
                <ul>
                    <?php foreach($fields['servicos'] as $servicos) : ?>
                        <li>
                            <figure><img src="<?php echo $servicos['icone']; ?>" alt="<?php wp_title(); ?>"></figure>
                            <h3><?php echo $servicos['titulo']; ?></h3>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($fields['locais_de_atendimento']) : ?>
<section class="section" id="locais">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1>Locais de Antendimento</h1>
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <ul class="tabs">
                    <?php foreach($fields['locais_de_atendimento'] as $key => $locais_de_atendimento) : ?>
                        <li data-tab="tab-<?php echo $key; ?>"><a href="javascript:void(0);"><?php echo $locais_de_atendimento['titulo']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php foreach($fields['locais_de_atendimento'] as $key => $locais_de_atendimento) : ?>
                    <div id="tab-<?php echo $key; ?>" class="tab-content">
                        <?php echo $locais_de_atendimento['informacoes']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($fields['formulario']) : ?>
<section class="section" id="fale-conosco" style="<?php if($fields['cor_do_perfil']) : echo 'background-color: '.$fields['cor_do_perfil'].''; endif; ?>">
    <div class="container">
        <div class="col-md-12">
            <div class="title">
                <h1>Agende já sua consulta</h1>
                <p>Faça sua avaliação na consulta e entenda por onde iniciar seu tratamento.</p>
            </div>
        </div>
        <div class="col-md-6 offset-3">
            <?php echo do_shortcode($fields['formulario']); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($fields['dicas_de_saude']) : ?>
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
                    <?php echo $fields['dicas_de_saude']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($fields['galeria_de_fotos']) : ?>
<section class="section" id="galeria">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1>Galeria de Fotos</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div data-aos="fade-in" data-aos-delay="100">
                    <div class="galeria">
                        <ul class="owl-carousel owl-theme owlGaleria">
                            <?php foreach($fields['galeria_de_fotos'] as $galeria_de_fotos) : ?>
                                <li>
                                    <figure>
                                       <a href="<?php echo $galeria_de_fotos['sizes']['large']; ?>" data-fancybox>
                                            <img src="<?php echo $galeria_de_fotos['sizes']['thumbnail']; ?>" class="img-fluid" alt="">
                                       </a>
                                    </figure>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($fields['meus_pets']) : ?>
<section class="section" id="pets">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1>Meus Pets</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div data-aos="fade-in" data-aos-delay="100">
                    <div class="galeria">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

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
                    'posts_per_page' => 8,
                    'orderby' => 'rand',
                    'meta_query' => array(
                        array(
                            'key' => 'autor',
                            'value' => '"' . $post->ID . '"',
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


<!-- <section class="section" id="archive">
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
</section> -->
<div id="ad">
    <img src="https://via.placeholder.com/728x90?text=728x90" class="img-fluid" alt="">
</div>

<?php get_footer(); ?>