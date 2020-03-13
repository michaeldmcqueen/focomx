<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="page-wrapper" class=" mx-auto">
  <div id="page">

    <div id="header" class="mb-4 px-6 md:px-0">
      <div class="container mx-auto flex items-center section clearfix md:px-5">
        <div class="nav-item  md:order-2 relative ">
          <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"
            class="inline-block bg-white align-top p-4 md:p-8 md:pt-3 w-40 md:w-64 rounded-b">
            <img class="site-logo block w-full mb-0" src="/<?php print drupal_get_path('theme', 'focomx'); ?>/images/logo.png"
              alt="<?php print t('Home'); ?>" />
          </a>
          <?php endif; ?>
          <div class="tickets align-top bg-dark border border-blue border-solid text-center md:order-1 hidden md:inline-block md:w-56 md:ml-6" style="margin-top: -1px;">
            <h4 class="p-6 px-4 text-white uppercase md:text-xl font-black lg:text-2xl leading-tight">
              <a href="https://nightout.com/events/focomx/tickets?utm_campaign=website-407&utm_source=Website&utm_medium=Custom+Tracking+Link" target="_blank">Get your tickets now!</a>
            </h4>
            <div class="py-3 bg-blue text-dark uppercase text-md">
              <a title="Add to Calendar"
                class="addeventatc" data-id="ZI4097890" href="https://www.addevent.com/event/ZI4097890" target="_blank"
                rel="nofollow">APRIL 24 & 25, 2020</a>
              </div>
          </div>
        </div>

        <button type="button" id="menu-btn"
          class="menu-toggle menu-close flex md:order-2 items-center text-xl md:text-3xl ml-auto md:mr-10 z-50">
          <svg width="30" height="15" viewBox="0 0 30 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="6.9018e-08" y1="13.4976" x2="30" y2="13.4976" stroke="#fff" stroke-width="2" />
            <line x1="6.9018e-08" y1="7.49756" x2="30" y2="7.49756" stroke="#fff" stroke-width="2" />
            <line x1="6.9018e-08" y1="1.49756" x2="30" y2="1.49756" stroke="#fff" stroke-width="2" />
          </svg>
          <span class="text-white inline-block pl-4 font-black">MENU</span>
        </button>
        <?php print render($page['header']); ?>

      </div>
    </div> <!-- /.section, /#header -->

    <?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation" class="mb-4 bg-blue pt-20 z-40">
      <div
        class="container  mx-auto md:flex items-end section clearfix heading text-2xl md:text-4xl text-white uppercase">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('clearfix', 'text-white')))); ?>
        <?php // print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div>
    </div> <!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php if ($breadcrumb): ?>
    <!--<div id="breadcrumb"><?php //print $breadcrumb; ?></div>-->
    <?php endif; ?>

    <div class="container mx-auto px-6"><?php print $messages; ?></div>

    <div id="main-wrapper" class="text-white container mx-auto">
      <div id="main" class="md:flex -mx-4 mb-6 clearfix">

        <div id="content" class="md:flex-1 px-10">
          <div class="section pt-12">
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <!-- <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?> -->
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
        </div> <!-- /.section, /#content -->

        <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="md:w-1/4 px-4">
          <div class="section">
            <?php print render($page['sidebar_first']); ?>
          </div>
        </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>

        <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar">
          <div class="section">
            <?php print render($page['sidebar_second']); ?>
          </div>
        </div> <!-- /.section, /#sidebar-second -->
        <?php endif; ?>

      </div>
    </div> <!-- /#main, /#main-wrapper -->

    <?php if ($page['postscript']): ?>
    <?php print render($page['postscript']); ?>
    <?php endif; ?>

    <div id="footer">
      <div class="section container p-10 text-center text-white mx-auto">
        <?php print render($page['footer']); ?>
        <p>Copyright 2019 Fort Collins Musicians Association | Powered by Volunteers</p>
      </div>
    </div> <!-- /.section, /#footer -->

  </div>
</div> <!-- /#page, /#page-wrapper -->