<?php
function mirrorful_admin_bar_stage($wp_admin_bar) {
  $current_stage = WP_ENV;
  $color_class = '';
  if($current_stage == 'development') {
    $color_class = 'color-orange';
  }else if($current_stage == 'production') {
    $color_class = 'color-green';
  }
  $args = array(
    'id' => 'mirrorful-views',
    'title' => '<span class="ab-icon dashicons-admin-site ' .$color_class . '"></span>' . $current_stage . '',
    'href'   => '#',
    'meta' => array(
      'class' => 'mirrorful-views  mirrorful_admin_bar_stage ' . $color_class,
    )
  );
  $wp_admin_bar->add_node($args);
}

add_action('admin_bar_menu', 'mirrorful_admin_bar_stage', 100);
