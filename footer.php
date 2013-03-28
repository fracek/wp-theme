
            </section><!-- /end role["main"] -->
        </div><!-- /end .page -->
        <div id="push"></div>
    </div><!-- /end #wrap -->
    <footer id="footer">
        <div class="container">
            <? if (is_active_sidebar('footer-bottom')) : ?>
                <?php dynamic_sidebar('footer-bottom'); ?>
            <? endif; ?>
        </div>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>
