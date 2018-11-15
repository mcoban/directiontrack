<?php
  /*
    Template Name: Contact Page
  */
?>
<?php
  $lang = $_COOKIE['lang'];
  if ($lang != "en" && $lang != "tr") $lang = "en";
  include(__DIR__ . '/../lang.php');
?>
<?php get_header() ?>
  <div id="contact">
    <h1 class="title"><?php echo $contact[$lang]['title'] ?></h1>
    <h2><?php echo $contact[$lang]['description'] ?></h2>
  </div>
  <div id="contact-picture"></div>
  <div class="sub-info"></div>
  <div class="address-info">
    <div class="item">
      <h3><?php echo $contact[$lang]['where_we_are'] ?></h3>
      <p><?php echo $contact[$lang]['odtu'] ?></p>
      <p><?php echo $contact[$lang]['address'] ?></p>
      <p><a href="mailto:<?php echo $contact[$lang]['mail'] ?>"><?php echo $contact[$lang]['mail'] ?></a></p>
    </div>
    <div class="item" style="height: 400px">
      <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=ODTÜ+Teknokent+MET+Yerleşkesi&key=AIzaSyAZefp2oleT2i2-m8Z3FtTyo5p3wh_uqS4"></iframe>
    </div>
  </div>
<?php get_footer() ?>