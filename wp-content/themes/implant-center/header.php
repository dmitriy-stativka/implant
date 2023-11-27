<?php $build_folder = get_template_directory_uri() . '/' ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="Description" content="default">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php the_field('browser-title', 'Options');?></title>

    <link rel="preload" href="<?php echo $build_folder ?>fonts/ZonaPro-Light.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/ZonaPro-Regular.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/ZonaPro-SemiBold.woff2" as="font"
        crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/ZonaPro-Bold.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/ZonaPro-ExtraBold.woff2" as="font"
        crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/ZonaPro-Black.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/Worksans-Regular.woff2" as="font"
        crossorigin="anonymous">
    <link rel="preload" href="<?php echo $build_folder ?>fonts/Worksans-Bold.woff2" as="font" crossorigin="anonymous">

    <?php wp_head();?>

    <?php  $lang = pll_current_language();?>
    <?php  $languages = pll_the_languages(array('raw' => 1)); ?>

</head>

<body <?php body_class(); ?>>



<header>
    <div class="container container--header">
        <div class="header">
        <a href="/" class="header-logo">
            <picture>
                <source type='image/webp' srcset='<?php echo get_template_directory_uri();?>/img/logo.webp'>
                <img width='30' height='31' src='<?php echo get_template_directory_uri();?>/img/logo.png' alt='logo'>
            </picture>
        </a>

        <div class="header__item">

            <nav class="nav">
                <?php
                    $lang = pll_current_language();
                    wp_nav_menu([
                        'theme_location' => '',
                        'menu' => 'header-menu' . '-' . $lang,
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'header-menu' . '-' . $lang,
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="nav__list %2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => new description_walker(),
                    ]);
                ?>
            </nav>

            <div class="header-lang"> 
             
                
                
                
            
             <?php $translations = pll_the_languages(array("raw" => 1,));?>  
                <div class='select'>
                    <div class='select__header'>

                        <?php foreach ($translations as $item) :
                                if($item['current_lang']){ ?>
                                    <span class='select__current'><?= $item['name'] ?></span>
                                <?php }
                            endforeach; 
                        ?>
                        <div class='select__icon'>
                            <svg width="8" height="5" >
                                <use href='<?php echo get_template_directory_uri();?>/img/sprite/sprite.svg#arrow-bottom'></use>
                            </svg>
                        </div>
                    </div>
                    <div class='select__body'>
                        <ul class='select__wrapp'>
                            <?php foreach ($translations as $item) :
                                if($item['current_lang']){
                                    echo '';
                                }else{ ?>
                                    <li class='select__item' data-choice='choosen'>
                               
                                            <a class="dropdown-item <?= ($item['current_lang']) ? 'disabled' : '' ?>" href="<?= $item['url'] ?>">
                                                <?= $item['name'] ?>
                                            </a>    
                                   
                                    </li>
                                <?php }
                            endforeach; ?>
                        </ul>
                    </div>
                </div>  
                
                
                
            </div>
            <ul class="header-phones">
                <li class="header-phones__item">
                    <a href="tel:<?php the_field('tell1', 'options');?>" class="header-phones__link"><?php the_field('tell1', 'options');?></a>
                </li>
                <li class="header-phones__item">
                    <a href="tel:<?php the_field('tell2', 'options');?>" class="header-phones__link"><?php the_field('tell2', 'options');?></a>
                </li>
            </ul>

        </div>
        <button class="mobile-burger">
            <span></span>
            <span></span>
            <span></span>
        </button>

        </div>
    </div>
</header>
<main>

<!-- Start bg-wrapper -->
<!-- <div class="bg-wrapper"> -->