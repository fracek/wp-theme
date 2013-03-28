
        </section><!-- /end role["main"] -->
        <div class="clear"></div>
        <footer>
            <? if (is_active_sidebar('footer-bottom')) : ?>
                <?php dynamic_sidebar('footer-bottom'); ?>
            <? endif; ?>
            <?php wp_footer(); ?>
        </footer>
    </div><!-- /end .page -->
</body>
</html>
