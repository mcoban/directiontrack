<?php
  $lang = $_COOKIE['lang'];
  if ($lang != "en" && $lang != "tr") $lang = "en";
  include('lang.php');
  $lang_to_switch = $lang == "en" ? "tr" : "en";
  
  if ( is_page () ) {
    if ($lang !== 'en') {
      $other_title = get_post_meta($post->ID, $lang . "_title", $single);
      $other_title = $other_title[0];
    }
  }

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php 
    if (!$other_title) {
      wp_title();
    } else {
      echo $other_title;
    }
    ?>
  </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  <link rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo.png" type="image/x-icon"/>

  <?php wp_head() ?>
</head>

<body>
  <div class="header" id="header">
    <div class="container large-container">
      <a href="/" class="logo">
        <img src="<?php bloginfo('template_directory') ?>/img/logo.png" srcset="<?php bloginfo('template_directory') ?>/img/logo@2x.png 2x" alt="Logo">
      </a>
      <a @click="showMobileMenu" class="mobile-menu"><img src="<?php bloginfo('template_directory') ?>/img/menu.svg" alt="Menu Icon" height="36"></a>
      <div :class="['mobile-menu-popup', { 'is-visible': isVisible }]">
          <ul class="navmenu">
            <li><a href="/"><?php echo $header[$lang]['home'] ?></a></li>
            <li><a href="/contact/"><?php echo $header[$lang]['contact'] ?></a></li>
            <li><a href="https://directiontrack.com/directiontrack/entrydispatcher.jsp"><?php echo $header[$lang]['login'] ?></a></li>
            <li>
            <?php if ($lang_to_switch == "tr") { ?>
            <a @click="changeLanguage('tr')" class="flag tr"></a>
            <?php } else { ?>
              <a @click="changeLanguage('en')" class="flag en"></a>
            <?php } ?>
              <!-- <a href="#">
                <img src="<?php bloginfo('template_directory') ?>/img/<?php echo $lang_to_switch ?>.svg" height="16" alt="<?php echo $lang_to_switch ?>">
              </a> -->
            </li>
          </ul>
          <div @click="closeMobileMenu" class="close-button"><img src="<?php bloginfo('template_directory') ?>/img/close.svg" alt="Close Menu" height="48"></div>
      </div>
      <ul class="navmenu">
        <li><a href="<?php bloginfo('home') ?>/"><?php echo $header[$lang]['home'] ?></a></li>
        <li><a href="<?php bloginfo('home') ?>/contact/"><?php echo $header[$lang]['contact'] ?></a></li>
        <li><a href="https://directiontrack.com/directiontrack/entrydispatcher.jsp"><?php echo $header[$lang]['login'] ?></a></li>
        <li>
<?php if ($lang_to_switch == "tr") { ?>
          <a @click="changeLanguage('tr')" class="flag tr"></a>
          <?php } else { ?>
            <a @click="changeLanguage('en')" class="flag en"></a>
<?php } ?>
        </li>
      </ul>
    </div>
  </div>