<?php

$logo = get_field('footer_logo', 'option');
$footer_text = get_field('footer_text', 'option');
$contact_phones = get_field('contact_phones', 'option');
$social_networks = get_field('social_networks','option');
$main_phone = get_field('main_phone', 'option');
$email = get_field('email', 'option');
$main_social = get_field('main_social', 'option');
$copyright = get_field('copyright', 'options');
$title_contacts = get_field('title_contacts', 'option');
$title_menu = get_field('title_menu', 'option');

?>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="<?= get_home_url(); ?>">
                    <img src="<?= $logo['url']; ?>" alt="<?= $logo['url']; ?>">
                </a>
            </div>
            <?php if($footer_text):?>
                <div class="footer-info">
                    <?= $footer_text;?>
                </div>
            <?php endif; ?>
            <div class="footer-menu">
                <?php if($title_menu):?>
                    <h3><?= $title_menu;?></h3>
                <?php endif; ?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => '',
                ]);?>
            </div>
            <div class="footer-contacts">
                <?php if($title_contacts):?>
                    <h3><?= $title_contacts;?></h3>
                <?php endif; ?>
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
                <div class="footer-contacts-item">
                    <div class="socials">
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
                        <?php if($main_social):?>
                            <?php foreach($main_social as $soc):?>
                                <a href="<?= $soc['link'];?>" target="_blank" class="facebook-desctop"><img src="<?= $soc['icon']['url'];?>" alt="<?= $soc['icon']['url'];?>"></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if($main_phone):?>
                        <a href="tel:<?= phone_clear($main_phone);?>"><?= $main_phone;?></a>
                    <?php endif; ?>
                </div>
                <?php if($email):?>
                    <a href="mailto:<?= $email;?>"><?= $email;?></a>
                <?php endif; ?>
                <?php if($main_social):
                    foreach ($main_social as $soc):?>
                        <a href="<?= $soc['link'];?>" class="facebook-mobile" target="_blank"><img src="<?= $soc['icon']['url'];?>" alt="<?= $soc['icon']['url'];?>"></a>
                    <?php endforeach;?>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="copyright"><?= $copyright?$copyright:__('Mykhailo Lymar Repatriation', 'mlr');?> © <?= date('Y'); ?></p>
            <?php wp_nav_menu([
                'theme_location' => 'footer-bottom-menu',
                'container' => false,
                'menu_class' => 'footer-bootom-menu',
            ]);?>
        </div>
    </div>
</footer>

  <?php wp_footer(); ?>
	</body>
</html>
