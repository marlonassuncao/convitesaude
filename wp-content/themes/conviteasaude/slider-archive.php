<div id="slider">
    <div class="container-fluid" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
        <div class="slide">
            <?php $icone = get_field('icone', 'category_'.get_queried_object()->term_id); ?>
            <h1>
            <?php if(!$icone) : ?>
                <figure><img src="<?php bloginfo('template_directory'); ?>/app/images/ico.png"
                        alt=""></figure>
            <?php else : ?>
                <figure><img src="<?php echo $icone; ?>"
                    alt=""></figure>
            <?php endif; ?>    
            <?php single_term_title(); ?>
            </h1>
            <div id="mlb2-1436384" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-1436384 form">
                <form class="ml-block-form" action="https://app.mailerlite.com/webforms/submit/a0f5v4"
                    data-code="a0f5v4" method="post" target="_blank">
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
                                        <img src="<?php bloginfo('template_directory'); ?>/app/images/preloader.svg"
                                            alt="">
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
        </div>
    </div>
    <div class="parallax" data-parallax-image="<?php bloginfo('template_directory'); ?>/app/images/slider.jpg"></div>
</div>