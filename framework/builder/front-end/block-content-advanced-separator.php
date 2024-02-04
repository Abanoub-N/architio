<?php
/**
 * Block Name: Advanced Separator
 */

$width = get_field('width');
$style = get_field('style');
$color = get_field('color');
$weight = get_field('weight');
$position = get_field('position');
$color = get_field('color');
?>

<hr class="float-<?= $position ?>" style="border-color: <?= $color ?> ; border-style: <?= $style ?>; border-width: <?= $weight ?>px; width: <?= $width ?>%;  ">