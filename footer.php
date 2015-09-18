        <footer style="margin-bottom: 20px;">
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <a href="#top" data-scroll="true">
                        <i class="fa fa-arrow-up"></i> <?php _e('Back to top', 'gitsta'); ?>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <small class="text-muted">
                        <?php printf(__('&copy <strong>%s</strong>', 'Sabayon'), get_bloginfo('name')); ?></strong><br>
                        <?php printf(__('Theme by %s', 'Sabayon'), '<a href="' . esc_url('https://github.com/fusion809/Sabayon') . '" target="_blank">Brenton</a>'); ?>
                    </small>
                </div>
            </div>
        </footer>
    </div>
    
    <?php wp_footer(); ?>
</body>
</html>
