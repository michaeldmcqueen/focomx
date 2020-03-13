<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
<head>
  <?php print $head; ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title><?php print $head_title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black|Rubik:400,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b98c9aeb4d.js" crossorigin="anonymous"></script>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

    <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="<?php print $classes; ?> bg-dark border-white border-solid border-15 lg:border-25 copy"<?php print $attributes; ?>>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
