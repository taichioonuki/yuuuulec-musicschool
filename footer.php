<footer id="footer" class="footer">
    <div class="inner">
        <div class="footer__nav">
            <ul class="footer__nav-list">
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/plan/')); ?>">料金</a></li>
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a></li>
                <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/result/')); ?>">卒業実績</a></li>
            </ul>
        </div>

        <div class="footer__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="きたむらミュージックスクール">
            </a>
        </div>

        <p class="footer__copyright">Copyright &copy; 0000 KITAMURA music school Inc.<br class="sp-only">All Rights
        </p>

        <div class="sns-icons">
            <a href="https://twitter.com">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.svg" width="22" height="18"
                    alt="twitter">
            </a>
            <a href="https://www.facebook.com">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg" width="22" height="18"
                    alt="facebook">
            </a>
            <a href="https://www.youtube.com">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.svg" width="22" height="18"
                    alt="youtube">
            </a>
            <a href="https://www.instagram.com">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.svg" width="22" height="18"
                    alt="instagram">
            </a>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>