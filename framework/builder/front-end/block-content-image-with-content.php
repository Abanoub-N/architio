<?php
/**
 * Block Name: Image with Content
 */

 $image_position = get_field('image_position');
 $image_radius = get_field('image_radius');
 $content_color = get_field('content_color');
 $content_bg = get_field('content_background');
 $image = get_field('image');
 $title = get_field('title');
 $sub_title = get_field('sub_title');
 $desc = get_field('description');
 $link = get_field('link');
?>

<section class="image-with-content">
  <div class="row align-items-stretch m-0">
    <?php if($image_position == 'left') : ?>
      <div class="col-md-6 p-0 overflow-hidden">
        <div class="imageDiv w-100 h-100" style="background-image:url('<?= $image['sizes']['large'] ?>'); border-radius: <?= $image_radius ?>"></div>
      </div>
    <?php endif; ?>
    <div class="col-md-6 px-0 py-5" style="color: <?= $content_color ?>; background-color: <?= $content_bg ?>">
      <div class="cotent px-3">
        <?= ($title)? "<h2>$title</h2>" : ""; ?>
        <?= ($sub_title)? "<h3>$sub_title</h3>" : ""; ?>
        <?= ($desc)? "<p>$desc</p>" : ""; ?>
        <?= ($link)? "<a href=".$link['url']." style='color: $content_color '>".$link['title']."</a>" : ""; ?>
      </div>
    </div>
    <?php if($image_position == 'right') : ?>
      <div class="col-md-6 p-0">
        <div class="imageDiv w-100 h-100" style="background-image:url('<?= $image['sizes']['large'] ?>'); border-radius: <?= $image_radius ?>">
      </div>
    <?php endif; ?>
  </div>
</section>