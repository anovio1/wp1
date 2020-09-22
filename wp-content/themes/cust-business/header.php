<!DOCTYPE html>
<html>

    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>


<header class="d-flex sticky-top justify-content-center">
        <div class="nav_header">
            <div class="navLogo-container">
                <?php bb_getLogo()?>
            </div>
            <div class="navMenu noselect">
                <div class="navCollapseButton" expanded="false">
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'topMenu',
                        'menu_class' => 'nav_topMenu'
                    )
                )
                ?>
            </div>
        </div>
        <div class="broch-header-bottom"></div>
</header>