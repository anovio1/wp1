<!DOCTYPE html>
<html>

    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>


<header class="d-flex justify-content-center unfilled">
        <div class="nav_header">
            <div class="navLogo-container">
                <?php bb_getLogo()?>
            </div>
            <div class="navMenu noselect">
                <div class="navCollapseButton" expanded="false">
                    <div id="navRect1" class="navRect"></div>
                    <div id="navRect2" class="navRect"></div>
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