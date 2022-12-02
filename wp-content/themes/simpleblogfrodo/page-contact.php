<?php
get_header();
?>

    <main>
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
                        <hr>
                        <p>Nothing</p>
                        <hr>
                        <?php
                    endif;
                ?>
            </div>
        </section>
    </main>

<?php 
get_footer(); 
?>