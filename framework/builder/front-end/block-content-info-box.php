<?php
/**
 * Block Name: Info Box
 */

$content_align = get_field('content_align');
$background_color = get_field('background_color');
$color = get_field('color');
$border = get_field('border');
$border_style = get_field('border_style');
$border_color = get_field('border_color');
$info_type = get_field('info_type');
$title = get_field('title');
$sub_title = get_field('sub_title');
$description = get_field('description');
$link = get_field('link');

$border_class= '';
$custom_border_style = '';
$padding_x = '';
$padding_y = '';

if($color) {
  $border_color = $color;
}else{
 $border_color = '#fff';
}

foreach($border as $value){

  if($border_style != 'double') {
    $border_class .= 'custom-border-'.$value.' ';
  }

  if($border_style) {
    $custom_border_style .= 'border-'.$value.'-'.$border_style.' ';
  }

  if($value == 'right' || $value == 'left' ){
    $padding_x = 'px-2 ';
  }

  if($value == 'top' || $value == 'bottom' ){
    $padding_y = 'py-2 ';
  }
}

?>

<section class="info-box <?= $custom_border_style ?> text-<?= $content_align .' '. $padding_x . ' ' . $padding_y . ' ' . $border_class?>" style="color: <?= $color ?>; background-color: <?= $background_color ?>; border-color:<?= $border_color ?>">
  <?php if($info_type == 'icon') {
    $icon = get_field('icon');?>
    <?=($icon)? "<span class='icon-box'>$icon</span>" : ""; ?>
  <?php
  }elseif($info_type == 'image') {

  }elseif($info_type == 'number') {

  }?>
  <?= ($title)? "<h2>$title</h2>": "" ?>
  <?= ($sub_title)? "<h3>$sub_title</h3>" : "" ?>
  <?= ($description)? "<p>$description</p>" : "" ?>
  <?= ($link)? "<a href=".$link['url']." style='color: $color'>".$link['title']."</a>" : "" ?>
</section>