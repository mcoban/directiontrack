<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title() ?></title>
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
            <li><a href="/">Home</a></li>
            <li><a href="/contact/">Contact</a></li>
            <li><a href="http://directiontrack.com:8080/entrydispatcher.jsp">Login</a></li>
          </ul>
          <div @click="closeMobileMenu" class="close-button"><img src="<?php bloginfo('template_directory') ?>/img/close.svg" alt="Close Menu" height="48"></div>
      </div>
      <ul class="navmenu">
        <li><a href="<?php bloginfo('home') ?>/">Home</a></li>
        <li><a href="<?php bloginfo('home') ?>/contact/">Contact</a></li>
        <li><a href="http://directiontrack.com:8080/entrydispatcher.jsp">Login</a></li>
      </ul>
    </div>
  </div>