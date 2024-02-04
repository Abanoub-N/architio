<?php
/**
 * Block Name: Title
 */

 $title = get_field('title');
 $heading = get_field('heading');
 $width = get_field('width');
 $color = get_field('color');
 $position = get_field('position');
 $rotate = get_field('rotate');
 $border = get_field('border');
 $border_style = get_field('border-style');

 $border_css = '';
 $padding = '';

 if($width == 'quarter') {
   $w = 'w-25';
 }elseif($width == 'quarter') {
  $w = 'w-50';
 }else{
  $w = 'w-100';
 }

 foreach($border as $value){

   if($color) {
     $border_color = $color;
   }else{
    $border_color = '#fff';
   }

   if(!$border_style) {
    $border_style = 'solid';
   }

   $border_css .= ' border-'.$value.': 2px ' . $border_style . ' ' . $border_color .';';

   if($value == 'right' || $value == 'left' ){
     $padding .= ' px-2 ';
   }

   if($value == 'top' || $value == 'bottom' ){
    $padding .= ' py-2 ';
  }
 }

?>
<<?= $heading ?> class="<?= $w . $padding ?> text-<?= $position ?>" style="color: <?= $color ?>; <?= $border_css  ?> transform: rotate(<?= $rotate ?>deg)"><?=  $title ?></<?= $heading ?>>