<section class="section" id="newsletter">
    <h1>Assine nosso conteúdo <br> e mantenha-se informado</h1>
    <form action="#">
        <input type="email" name="email" class="form-control" placeholder="Digite seu melhor e-mail"
            required="required">
        <button class="btn">Cadastrar</button>
    </form>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/bg01.jpg"></div>
</section>
<footer class="section" id="footer">
    <div class="unidades" data-aos="fade-in" data-aos-delay="300" data-aos-easing="ease-out-cubic"
        data-aos-duration="500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="box">
                        <figure>
                            <a href="<?php bloginfo('url'); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/app/images/logoft.png" alt="">
                            </a>
                        </figure>
                        <p>"O conteúdo deste portal tem o objetivo de oferecer informações e não deve substituir os
                            conselhos, diagnósticos e tratamentos de profissionais da área de saúde."</p>
                    </div>
                    <div class="socials">
                        <a href="https://www.facebook.com/conviteasaude/" target="_blank">
                            <i class="ion-social-facebook"></i>
                        </a>
                        <a href="https://twitter.com/conviteasaude" target="_blank">
                            <i class="ion-social-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/conviteasaude/" target="_blank">
                            <i class="ion-social-instagram-outline"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCV3TGe7QAX8QxkNp67o_nEw?view_as=subscriber"
                            target="_blank">
                            <i class="ion-social-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <nav>
                        <ul>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13387">Sobre</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13399">Parcerias e Apoio</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13391">Contato</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13393">Trabalhe conosco</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13396">Anuncie</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=3">Política do Site</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 nav">
                    <h3>Minha Saúde</h3>
                    <nav>
                        <ul>
                            <?php
                                $categories=get_categories(
                                    array( 'parent' => 2 )
                                );
                                foreach ($categories as $c) :
                            ?>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/?cat=<?php echo $c->cat_ID; ?>">
                                    <?php echo $c->cat_name; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 nav animal">
                    <h3>Sáude Animal</h3>
                    <nav>
                        <ul>
                            <?php
                                $categories=get_categories(
                                    array( 'parent' => 3 )
                                );
                                foreach ($categories as $c) :
                            ?>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/?cat=<?php echo $c->cat_ID; ?>">
                                    <?php echo $c->cat_name; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="rodape">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <small><?php echo date('Y'); ?> ® Convite à Saúde todos os direitos reservados</small>
            </div>
            <!-- <div class="col-md-2">
                    <div class="sing">
                    </div>
                </div> -->
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/scripts/owl.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/scripts/parallax.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/scripts/main.min.js"></script>

</body>

</html>