</main>
<?php
$copyright = get_field('copyright', 'options');
?>

<footer class="footer" id="contact">
    <div class="footer__container container">
        <div class="footer__top">
            <div class="footer__logo"><img src="<?= $footerLogo['url'] ?>" alt="<?= $footerLogo['title'] ?>"></div>
        </div>
        <div class="footer__copyright">
            <p><?= $copyright ?> <a href="https://instynctweb.com/">Instynct</a></p>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>