<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>

<!-- <script type='text/javascript' src='http://www.andreabocelli.com/wp-content/themes/andreabocelli/js/lib/jquery.easing.js'></script> -->
<!-- <script type='text/javascript' src='http://www.andreabocelli.com/wp-content/themes/andreabocelli/js/plugin/momentjs.min.js'></script> -->

<!-- <script type='text/javascript' src='http://www.andreabocelli.com/wp-content/themes/andreabocelli/js/ck/init-ck.js'></script> -->
<!-- <script type='text/javascript' src='http://www.andreabocelli.com/wp-content/plugins/sitepress-multilingual-cms/res/js/jquery.cookie.js'></script> -->

<!-- <script type='text/javascript' src='http://www.andreabocelli.com/wp-content/plugins/sitepress-multilingual-cms/res/js/browser-redirect.js?ver=3.7.0'></script> -->
<script type="text/javascript">
  var websiteLanguage = 'en';
  var templateUrl = 'http://www.andreabocelli.com/wp-content/themes/andreabocelli';
  templateUrl = templateUrl.replace('http://cdn.', 'http://www.');
</script>

</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed master-wrapper">
    <div id="inner-wrapper" class="website-wrapper">

    <header id="header" class="menu-wrapper" role="banner">
        <a class="menu-logo" href="http://www.andreabocelli.com"></a>
        <nav id="menu" role="navigation">
            <div class="menu-inside">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'container_class' => 'menu-menu-1-container',
                    'menu_class' => 'bocelli-menu'
                 )
             ); ?>
            </div>

            <div class="menu-socialbox">
                <div class="menu-lang-search-wrap">
                  <div class="lang-wrapper">
                    <div class="lang-control"><a href="#" class="active">en</a>
                      <div></div>
                                          <a href="#/vi/">vi</a>

                                      </div>
                  </div>
                  <div class="menu-search-box"><div></div></div>
                </div>
                <div class="menu-socialbox-inner">
                  <div class="menu-socialbox-google"><a target="_blank" href="https://plus.google.com/"></a></div>
                  <div class="menu-socialbox-youtube"><a target="_blank" href="https://www.youtube.com/"></a></div>
                  <div class="menu-socialbox-instagram"><a target="_blank" href="http://instagram.com/"></a></div>
                  <div class="menu-socialbox-facebook"><a target="_blank" href="https://www.facebook.com/"></a></div>
                  <div class="menu-socialbox-twitter"><a target="_blank" href="https://twitter.com/"></a></div>
                </div>
            </div>
        </nav>
    </header>