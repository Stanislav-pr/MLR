<?php

$socs = get_field('social_networks', 'options');
$copyright = get_field('copyright', 'options');

?>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="footer-info">
                <p><b>Mykhailo Lymar Repatriation</b></p>
                <p>Międzynarodowy Transport Zmarłych - International transport of the deceased</p>
                <p><b>NIP</b> 5273085707<br>
                    <b>REGON</b> 526987766</p>
            </div>
            <div class="footer-menu">
                <h3>послуги</h3>
                <ul>
                    <li><a href="#">Кремація</a></li>
                    <li><a href="#">Перевезення померлих</a></li>
                    <li><a href="#">Перевезення урн</a></li>
                    <li><a href="#">Партнерам</a></li>
                    <li><a href="#">Товари</a></li>
                </ul>
            </div>
            <div class="footer-contacts">
                <h3>контакти</h3>
                <a href="tel:48883513035">+48 883 513 035 - ua / ru</a>
                <a href="tel:48572272697">+48 572 272 697 - pl / en / ua / ru</a>
                <div class="footer-contacts-item">
                    <div class="socials">
                        <a href="#" target="_blank"><img src="img/whatsapp.svg" alt=""></a>
                        <a href="#" target="_blank"><img src="img/viber.svg" alt=""></a>
                        <a href="#" target="_blank"><img src="img/telegram.svg" alt=""></a>
                        <a href="#" target="_blank" class="facebook-desctop"><img src="img/facebook.svg" alt=""></a>
                    </div>
                    <a href="tel:380675741293 ">+38 067 574 12 93 </a>
                </div>
                <a href="mailto:biuro@mlrepatriation.com">biuro@mlrepatriation.com</a>
                <a href="#" target="_blank" class="facebook-mobile"><img src="img/facebook.svg" alt=""></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="copyright">Mykhailo Lymar Repatriation © 2025</p>
            <ul class="footer-bootom-menu">
                <li><a href="#">Політика конфіденційності</a></li>
                <li><a href="#">Умови використання</a></li>
            </ul>
        </div>
    </div>
</footer>

  <?php wp_footer(); ?>
	</body>
</html>
