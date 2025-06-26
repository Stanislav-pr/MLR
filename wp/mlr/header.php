<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>

<?php

$logo = get_field('logo', 'option');
$phones_title = get_field('phones_title', 'option');
$phones_header = get_field('phones_header', 'option');
$button = get_field('button', 'option');
$contact_phones = get_field('contact_phones', 'option');
$social_networks = get_field('social_networks', 'option');
$mobile_copyright = get_field('mobile_copyright', 'option');
$main_phone = get_field('main_phone', 'option');
$email = get_field('email', 'option');
$main_social = get_field('main_social', 'option');

?>
<body <?php body_class() ?>>
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?= get_home_url(); ?>">
                        <img src="<?= $logo['url']; ?>" alt="<?= $logo['url']; ?>">
                    </a>
                </div>
                <div class="header-navigation">
                    <div class="header-info">
                        <div class="header-phones"><?= $phones_title;?>
                            <?php if ($phones_header):
                                foreach ($phones_header as $phone): ?>

                                    <a href="tel:<?= phone_clear($phone['phone']); ?>"><?= $phone['phone']; ?></a>

                                <?php endforeach;
                            endif; ?>
                        </div>
                        <?php if( $button ):
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                            ?>
                            <a class="cta-button" href="<?= esc_url($button_url); ?>" target="<?= esc_attr($button_target); ?>"><?= esc_html($button_title); ?></a>
                        <?php endif; ?>

                        <?php $languages = apply_filters( 'wpml_active_languages', NULL, array(
                            'skip_missing' => 0,
                            'orderby' => 'code',
                        ) );

                        if ( !empty( $languages ) ):?>
                            <div class="languages">
                                <?php foreach( $languages as $lang):
                                    if( $lang['active'] ):?>
                                        <a href="<?= esc_url($lang['url']); ?>" class="lang-item lang-item-active"><?= esc_html($lang['tag']);?></a>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <div class="lang-dropdown">
                                    <?php foreach( $languages as $lang):
                                        if( !$lang['active'] ):?>
                                            <a href="<?= esc_url($lang['url']);?>" class="lang-item"><?= esc_html($lang['tag']); ?></a>
                                        <?php endif;
                                    endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>


                    </div>
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'nav',
                        'walker' => new Nav_Menu(),
                    ]);?>
                </div>
                <div class="nav-mob">
                    <?php $languages = apply_filters( 'wpml_active_languages', NULL, array(
                        'skip_missing' => 0,
                        'orderby' => 'code',
                    ) );

                    if ( !empty( $languages ) ):?>
                        <div class="languages">
                            <?php foreach( $languages as $lang):
                                if( $lang['active'] ):?>
                                    <a href="<?= esc_url($lang['url']); ?>" class="lang-item lang-item-active"><?= esc_html($lang['tag']);?></a>
                                <?php endif;?>
                            <?php endforeach;?>
                            <div class="lang-dropdown">
                                <?php foreach( $languages as $lang):
                                    if( !$lang['active'] ):?>
                                        <a href="<?= esc_url($lang['url']);?>" class="lang-item"><?= esc_html($lang['tag']); ?></a>
                                    <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="burger">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </div>

                </div>
            </div>

        </div>
    </header>
    <div class="mobile-menu">
        <?php wp_nav_menu([
            'theme_location' => 'mobile-menu',
            'container' => false,
            'menu_class' => '',
        ]);?>
        <div class="mobile-phones">
            <?= $phones_title;?>
            <?php if ($phones_header):
                foreach ($phones_header as $phone): ?>

                    <a href="tel:<?= phone_clear($phone['phone']); ?>"><?= $phone['phone']; ?></a>

                <?php endforeach;
            endif; ?>
        </div>
        <?php if( $button ):
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <a class="btn-default" href="<?= esc_url($button_url); ?>" target="<?= esc_attr($button_target); ?>"><?= esc_html($button_title); ?></a>
        <?php endif; ?>
        <div class="mobile-contacts">
            <?php if($contact_phones):
                foreach ($contact_phones as $phone):
                    $link = $phone['phone'];
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    <?php endif; ?>
                <?php endforeach;
            endif; ?>
            <div class="mobile-contacts-item">
                <?php if($social_networks):?>
                    <div class="socials">
                        <?php foreach ($social_networks as $social):
                            $icon = $social['icon'];
                            $link = $social['link'];

                            if( $link ):?>
                                <a href="<?= $link;?>" target="_blank"><img src="<?= $icon['url'];?>" alt="<?= $icon['url'];?>"></a>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                <?php endif; ?>
                <?php if($main_phone):?>
                    <a href="tel:<?= phone_clear($main_phone);?>"><?= $main_phone;?></a>
                <?php endif; ?>
            </div>
            <?php if($email):?>
                <a href="mailto:<?= $email;?>"><?= $email;?></a>
            <?php endif; ?>
            <?php if($main_social):?>
                <?php foreach($main_social as $soc):?>
                    <a href="<?= $soc['link'];?>" target="_blank" class="mobile-social"><img src="<?= $soc['icon']['url'];
                    ?>" alt="<?=
                        $soc['icon']['url'];?>"></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <p class="mobile-copyright"><?= $mobile_copyright?$mobile_copyright:__('Mykhailo Lymar Repatriation', 'mlr');?> © <?= date('Y'); ?></p>
    </div>
    <main class="main">
