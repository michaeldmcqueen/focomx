<?php
function ds_home() {
  return array(
    'label' => t('Home Display'),
    'regions' => array(
      'one' => t('One'),
      'two' => t('Two'),
      'three' => t('Three'),
      'four' => t('Four'),
    ),
    // Add this line if there is a default css file.
    'css' => FALSE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => FALSE,
  );
}