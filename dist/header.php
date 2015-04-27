<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title("|", true, "right") ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
  </head>
  <body>
    <div class="panel-primary--bottom-margin">
      <div class="grid">
        <header role="banner" class="grid__col--12 panel"><a href="<?php bloginfo("url"); ?>" class="site-logo--left"><b class="srt">Ralph Maltby</b></a>
          <nav role="navigation" class="navbar"><span id="toggle" class="icn--nav-toggle is-displayed-mobile"><b class="srt">Toggle</b></span>
            <?php
                $defaults = array(
                    'menu_class' => 'nav is-collapsed-mobile',
                    'container' => false,
                    "theme location" => "primary-menu"
                );
                wp_nav_menu($defaults);
            ?>
          </nav>
        </header>
      </div>
    </div>