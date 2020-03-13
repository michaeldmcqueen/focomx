<div class="schedule-listing-wrap">
<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
if (!empty($title)) {
  ?>
  <h3 class="schedule-time"><?php

  print $title;
  ?></h3>
<?php

}
?>

<div class="schedule-listing-items">
<?php
foreach ($rows as $id => $row) {
  ?>
  <div<?php

  if ($classes_array[$id]) {
    ?> class="<?php

    print $classes_array[$id];
    ?>"<?php

  }
  ?>>
    <?php

  print $row;
  ?>
  </div>
<?php

}
?>
</div>  
</div>  
