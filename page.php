<?php get_header() ?>
<?php
  $lang = $_COOKIE['lang'];
  if ($lang != "en" && $lang != "tr") $lang = "en";
  include('lang.php');
  $lang_to_switch = $lang == "en" ? "tr" : "en";
?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post() ?>

<?php 
  if ($lang !== "en") {
    $other_title = get_post_meta($post->ID, $lang . "_title", $single);
    $other_content = get_post_meta($post->ID, $lang . "_content", $single); ?>

<div id="page">
  <h1><?php echo $other_title; ?></h1>
  <div class="content">
  <?php echo $other_content; ?>
  </div>
</div>

<?php  } else { ?>
<div id="page">
  <h1><?php the_title() ?></h1>
  <div class="content">
  <?php the_content() ?>
  </div>
</div>
<?php  } ?>

<?php endwhile ?>
<?php endif ?>




<?php get_footer() ?>