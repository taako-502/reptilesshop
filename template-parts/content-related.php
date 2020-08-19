<aside class="relatedkiji">
  <h4>関連記事</h4>
  <ul>
  <?php if(has_category() ) {
    $cats =get_the_category();
    $catkwds = array();
    foreach($cats as $cat){
         $catkwds[] = $cat->term_id;
    }
  } ?>
  <?php $args = array(
      'post_type' => 'post',
      'posts_per_page' => '4',
      'post__not_in' =>array( $post->ID ),
      'category__in' => $catkwds,
      'orderby' => 'rand'
    );
  $my_query = new WP_Query( $args );?>
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        <div class="text">
          <?php the_title(); ?>
        </div>
      </a></li>
    <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  </ul>
</aside>
