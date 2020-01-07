<?php
    global $post;
    global $cat_id;
    $direct_parent = $post->post_parent;
?>
<nav id="navinterno">
    <div class="container">
        <?php if($direct_parent == 13428 || $post->ID == 13428) : $cat_id = 1; ?>
        <ul>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13432">Doenças e Sintomas</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15837">Blog</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15838">Conteúdo Especial</a>
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
        
        <?php else : $cat_id = 415; ?>

        <ul>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15835">Doenças e Sintomas</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13434">Blog</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=13436">Conteúdo Especial</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15840">Especiliadades</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15842">Especialistas</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15844">Clínicas</a>
            </li>
        </ul>
        <?php endif; ?>
    </div>
</nav>