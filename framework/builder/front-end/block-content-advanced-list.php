<?php
/**
 * Block Name: Advanced Separator
 */

 $line_height = get_field('line_height');
 $color = get_field('color');
 $align = get_field('align');
 $types = get_post_types( [], 'objects' );
 if(have_rows('items')): 
?>
<ul class="list-unstyled text-<?=$align ?>" style="color: <?= $color?>;">
  <?php while(have_rows('items')): 
    the_row();
    $text = get_sub_field('text');
    $icon = get_sub_field('icon');
  ?>
    <li style="line-height: <?= $line_height ?>"> <span class="px-2"><?= $icon ?></span><?= $text ?></li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>