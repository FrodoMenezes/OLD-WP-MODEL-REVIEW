<?php get_header(); ?>

<div>
    <main>
        <section>Home</section>
        <section>Principal</section>
        <section>Secundario</section>
        <section>Ilusoria</section>
        <section>Digital</section>
        <section>
            <div>
                <?php 
                    if( have_posts() ):
                        while( have_posts() ) : the_post();
                        ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <div><?php the_content(); ?></div>
                            </article>
                        <?php
                        endwhile;
                    else: 
                        ?>
                        <p>Nothing</p>
                        <?php
                    endif;
                ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
