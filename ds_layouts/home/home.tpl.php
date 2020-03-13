<?php

/**
 * @file
 * Display Suite 3 column 25/50/25 stacked template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds_home <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $one_wrapper ?> class="group-header<?php print $one_classes; ?>">
    <?php print $one; ?>
    <?php print $two; ?>
  </<?php print $one_wrapper ?>>

  <<?php print $three_wrapper ?> class="<?php print $three_classes; ?>">
    <?php print $three; ?>
  </<?php print $three_wrapper ?>>

  <<?php print $four_wrapper ?> class="group-four<?php print $four_classes; ?>">
    <?php print $four; ?>
  </<?php print $four_wrapper ?>>


</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
