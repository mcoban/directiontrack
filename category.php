<?php get_header() ?>
<?php $category = get_category( get_query_var( 'cat' ) ); ?>
<?php
    $posts = get_posts(array(
        'category' => $category->cat_id
    ));
?>
<div id="brands-page">
  <div class="banner">
    <header class="large-container">
      <h1><?php echo $category->name ?></h1>
      <p>
          <?php echo $category->category_description ?>
      </p>
    </header>
  </div>

  <div class="devices">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut rerum placeat rem cupiditate laborum provident, error similique, aliquid voluptatum autem possimus odio dicta praesentium illo optio nesciunt asperiores vel illum.
  </div>
</div>

<?php get_footer() ?>