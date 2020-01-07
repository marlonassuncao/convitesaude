<section class="section" id="newsletter">
    <h1>Assine nosso conteúdo <br> e mantenha-se informado</h1>
    <!-- <form action="#">
        <input type="email" name="email" class="form-control" placeholder="Digite seu melhor e-mail"
            required="required">
        <button class="btn">Cadastrar</button>
    </form> -->
    <div id="mlb2-1436384" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-1436384">
        <form class="ml-block-form" action="https://app.mailerlite.com/webforms/submit/a0f5v4" data-code="a0f5v4"
            method="post" target="_blank">
            <div class="ml-form-formContent horozintalForm">
                <div class="ml-form-horizontalRow">
                    <div class="ml-input-horizontal">
                        <div style="width: 100%;" class="horizontal-fields">
                            <div class="ml-field-group ml-field-email ml-validate-email ml-validate-required">
                                <input style="width: 100%;" type="email" class="form-control" data-inputmask=""
                                    name="fields[email]" value="" placeholder="Digite seu melhor e-mail"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <div class="ml-button-horizontal">
                        <button type="submit" class="primary btn">Inscrevar</button>
                        <button disabled="disabled" style="display: none;" type="button" class="loading">
                            <div class="ml-form-embedSubmitLoad">
                                <img src="<?php bloginfo('template_directory'); ?>/app/images/preloader.svg" alt="">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="ml-submit" value="1">
        </form>
        <div class="ml-form-successBody row-success" style="display: none">
            <div class="ml-form-successContent">
                <h4>Obrigado!</h4>
                <p>Tudo pronto, basta confirmar seu e-mail e você receberá nossa novidades.</p>
            </div>
        </div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/bg01.jpg"></div>
</section>
<footer class="section" id="footer">
    <div class="unidades">
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
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13796">Quem somos</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=3">Política do Site</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13399">Parcerias e Apoio</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13391">Contato</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/?page_id=13393">Trabalhe conosco</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 nav">
                    <h3>Minha Saúde</h3>
                    <nav>
                        <ul>
                            <?php
                                $categories=get_categories(
                                    array( 'parent' => 1, 'hide_empty' => false )
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
                                    array( 'parent' => 415, 'hide_empty' => false )
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
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/scripts/owl.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/scripts/parallax.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app/scripts/main.min.js"></script>

<script>
function ml_webform_success_1436384() {
    var $ = ml_jQuery || jQuery;
    $('.ml-subscribe-form-1436384 .row-success').show();
    $('.ml-subscribe-form-1436384 .row-form').hide();
}
</script>
<img src="https://track.mailerlite.com/webforms/o/1436384/a0f5v4?vd890ed88b3a28c805acc70e1a88fa27c" width="1" height="1"
    style="max-width: 1px; max-height: 1px; visibility: hidden; padding: 0; margin: 0; display: block;" border="0">
<script src="https://static.mailerlite.com/js/w/webforms.min.js?vd890ed88b3a28c805acc70e1a88fa27c"
    type="text/javascript"></script>

</body>

</html>