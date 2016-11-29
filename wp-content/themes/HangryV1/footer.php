    </div>
    <footer class="site-footer">
        <div class="container">
            <nav class="site-nav">
                <?php 
                    $args= array(
                        'theme_location' => 'footer'
                    );
                    
                    ?>

                    <?php wp_nav_menu($args); ?>
            </nav>

            <p><?php bloginfo('name'); ?> - <?php echo date('Y'); ?></p>
        </div>
    </footer>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
<script type="text/javascript">
   var s = skrollr.init();
</script>
<?php wp_footer(); ?>
</body>
</html>