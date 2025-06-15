<?php

$title = get_sub_field('title');
$info = get_sub_field('info');
$address = get_sub_field('address');
$map = get_sub_field('map');
$lat = $map['lat'];
$lng = $map['lng'];

$contact_phones = get_field('contact_phones', 'option');
$social_networks = get_field('social_networks','option');
$main_phone = get_field('main_phone', 'option');
$email = get_field('email', 'option');
$main_social = get_field('main_social', 'option');

?>

<section class="contacts-section">
    <div class="container">
        <?php if ($title) : ?>
        <h2 class="title-section"><span class="line line-1"></span><span class="line-text"><?= $title; ?></span><span class="line line-2"></span></h2>
        <?php endif; ?>
        <div class="contacts-wrap">
            <?php if ($info) : ?>
                <div class="contacts-info">
                    <?php echo wp_kses_post($info); ?>
                </div>
            <?php endif; ?>
            <div class="contacts-items">
                <div class="contacts-item">
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
                    <div class="social-contacts-item">
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
                </div>
                <?php if ($address) : ?>
                    <div class="contacts-item">
                        <p><?= $address; ?></p>
                    </div>
                <?php endif; ?>
                <div class="contacts-item">
                    <?php if($email):?>
                        <a href="mailto:<?= $email;?>"><?= $email;?></a>
                    <?php endif; ?>
                    <?php if($main_social):
                        foreach ($main_social as $soc):?>
                            <a href="<?= $soc['link'];?>" class="facebook-contact" target="_blank"><img src="<?= $soc['icon']['url'];?>" alt="<?= $soc['icon']['url'];?>"></a>
                        <?php endforeach;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div id="map" data-lat="<?= $lat;?>" data-lng="<?= $lng;?>"></div>
    </div>
</section>
