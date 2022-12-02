        <footer>
            <section>Widgets do rodapé</section>
            <section>
                <div>Copyright</div>
                <div>
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location'	=> 'blog_frodo_footer_menu'
                            )
                        );
                    ?>
                </div>
            </section>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>