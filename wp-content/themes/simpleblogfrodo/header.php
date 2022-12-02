<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

    <div id="page">
    
        <header>
            <section>Pesquisa</section>
            <section>
                <div>Logo</div>
                <div>
                    <div>Conta</div>
                    <div>
                        <nav>
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'theme_location'	=> 'fancy_lab_main_menu'
                                    )
                                ); 
                            ?>
                        </nav>
                    </div>
                </div>
            </section>
        </header>